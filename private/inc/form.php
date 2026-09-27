<?php
/**
 * Shared form handling for api/*.php: JSON/multipart input, rate limit,
 * honeypot + timestamp, validation helpers, JSONL record, mail().
 */
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

function respond(int $code, array $body): void {
  http_response_code($code);
  echo json_encode($body, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
  exit;
}
function fail(int $code, string $error, ?string $field = null): void {
  respond($code, ['ok' => false, 'error' => $error] + ($field ? ['field' => $field] : []));
}
function ok(string $redirect): void { respond(200, ['ok' => true, 'redirect' => $redirect]); }

function client_ip(): string { return $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0'; }

/** 10 submissions / 15 min / IP, file-based. */
function rate_limit(): void {
  $dir = PRIV . '/tmp/ratelimit';
  if (!is_dir($dir)) mkdir($dir, 0700, true);
  $file = $dir . '/' . md5(client_ip()) . '.json';
  $now = time();
  $hits = array_filter(json_decode((string) @file_get_contents($file), true) ?: [], fn($t) => $t > $now - 900);
  if (count($hits) >= 10) fail(429, 'Too many requests. Please try again later.');
  $hits[] = $now;
  file_put_contents($file, json_encode(array_values($hits)), LOCK_EX);
}

/** Read body (JSON or form/multipart), run spam checks. Returns trimmed string map. */
function form_input(): array {
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') fail(405, 'Method not allowed');
  rate_limit();
  $ct = $_SERVER['CONTENT_TYPE'] ?? '';
  $data = str_starts_with($ct, 'application/json') ? (json_decode((string) file_get_contents('php://input'), true) ?: []) : $_POST;
  $data = array_map(fn($v) => is_string($v) ? trim($v) : $v, $data);
  if (!empty($data['website'])) fail(400, 'Submission rejected.');
  $ts = (int) ($data['ts'] ?? 0);
  if (!$ts || (microtime(true) * 1000 - $ts) < MIN_FORM_SECONDS * 1000) fail(400, 'Please take a moment before submitting.');
  if (RECAPTCHA_SECRET) {
    $r = json_decode((string) @file_get_contents('https://www.google.com/recaptcha/api/siteverify?' . http_build_query(['secret' => RECAPTCHA_SECRET, 'response' => $data['recaptcha'] ?? '', 'remoteip' => client_ip()])), true);
    if (empty($r['success']) || (isset($r['score']) && $r['score'] < 0.5)) fail(400, 'Spam check failed.');
  }
  return $data;
}

// ---- Validators (each returns the clean value or fails) --------------------
function v_name(array $d): string {
  $v = $d['name'] ?? '';
  if (mb_strlen($v) < 2 || mb_strlen($v) > 100) fail(422, 'Name is required.', 'name');
  return $v;
}
function v_email(array $d): string {
  $v = strtolower($d['email'] ?? '');
  if (!filter_var($v, FILTER_VALIDATE_EMAIL) || strlen($v) > 160) fail(422, 'A valid email is required.', 'email');
  return $v;
}
function v_phone(array $d): string {
  $v = $d['phone'] ?? '';
  if (!preg_match('/^[+\d][\d\s().-]{6,19}$/', $v)) fail(422, 'A valid phone number is required.', 'phone');
  return $v;
}
function v_consent(array $d): void {
  $v = $d['consent'] ?? '';
  if (!in_array($v, ['on', 'true', true], true)) fail(422, 'Consent is required.', 'consent');
}
function v_text(array $d, string $k, int $max, int $min = 0, ?string $msg = null): string {
  $v = $d[$k] ?? '';
  if (mb_strlen($v) < $min || mb_strlen($v) > $max) fail(422, $msg ?? "Invalid $k.", $k);
  return $v;
}
function v_slug(array $d, string $k, bool $required = false): string {
  $v = $d[$k] ?? '';
  if ($v === '' && !$required) return '';
  if (!preg_match('/^[a-z0-9-]{1,60}$/', $v)) fail(422, 'Invalid selection.', $k);
  return $v;
}

function record(string $kind, array $data): void {
  $dir = PRIV . '/submissions';
  if (!is_dir($dir)) mkdir($dir, 0700, true);
  file_put_contents("$dir/$kind-" . date('Y-m-d') . '.jsonl', json_encode(['at' => date('c'), 'ip' => client_ip()] + $data, JSON_UNESCAPED_UNICODE) . "\n", FILE_APPEND | LOCK_EX);
}

/** Send key/value table email via mail(); optional single attachment. */
function send_mail(string $to, string $subject, string $replyTo, array $fields, ?array $attachment = null): void {
  $fields = array_filter($fields, fn($v) => $v !== null && $v !== '');
  $rows = '';
  $text = '';
  foreach ($fields as $k => $v) {
    $rows .= '<tr><td style="padding:6px 10px;color:#7089A0;font:13px system-ui">' . e((string) $k) . '</td><td style="padding:6px 10px;font:14px system-ui;color:#0A2440">' . nl2br(e((string) $v)) . '</td></tr>';
    $text .= "$k: $v\n";
  }
  $html = '<div style="font:14px system-ui;color:#0A2440"><h2 style="font-size:18px">' . e($subject) . '</h2><table cellspacing="0">' . $rows . '</table><p style="color:#7089A0;font-size:12px;margin-top:20px">Sent from the Swanya website.</p></div>';
  $subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
  $headers = "From: " . MAIL_FROM . "\r\nReply-To: $replyTo\r\nMIME-Version: 1.0\r\n";
  if ($attachment) {
    $b = 'b' . md5(uniqid('', true));
    $headers .= "Content-Type: multipart/mixed; boundary=\"$b\"\r\n";
    $body = "--$b\r\nContent-Type: text/html; charset=UTF-8\r\nContent-Transfer-Encoding: base64\r\n\r\n" . chunk_split(base64_encode($html))
      . "--$b\r\nContent-Type: {$attachment['type']}; name=\"{$attachment['name']}\"\r\nContent-Disposition: attachment; filename=\"{$attachment['name']}\"\r\nContent-Transfer-Encoding: base64\r\n\r\n"
      . chunk_split(base64_encode((string) file_get_contents($attachment['path']))) . "--$b--";
  } else {
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $body = $html;
  }
  if (!@mail($to, $subject, $body, $headers) && DEBUG) error_log("[mail] failed: $subject → $to");
}
