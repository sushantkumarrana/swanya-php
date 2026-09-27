<?php
require_once __DIR__ . '/../private/inc/bootstrap.php';
require_once PRIV . '/inc/form.php';

$d = form_input();
$data = [
  'name' => v_name($d), 'email' => v_email($d), 'phone' => v_phone($d),
  'position' => v_text($d, 'position', 120, 2, 'Position is required.'),
  'experience' => ($d['experience'] ?? '') === '' ? '' : (is_numeric($d['experience']) && $d['experience'] >= 0 && $d['experience'] <= 50 ? (string) $d['experience'] : fail(422, 'Invalid experience.', 'experience')),
  'location' => v_text($d, 'location', 100), 'message' => v_text($d, 'message', 2000),
];
v_consent($d);

// CV upload: PDF/DOC/DOCX, 5 MB, stored outside web root under a random name
$f = $_FILES['cv'] ?? null;
if (!$f || $f['error'] === UPLOAD_ERR_NO_FILE) fail(422, 'CV is required.', 'cv');
if ($f['error'] === UPLOAD_ERR_INI_SIZE || $f['error'] === UPLOAD_ERR_FORM_SIZE || $f['size'] > 5 * 1024 * 1024) fail(422, 'CV must be 5 MB or smaller.', 'cv');
if ($f['error'] !== UPLOAD_ERR_OK) fail(422, 'Upload failed.', 'cv');
$allowed = ['application/pdf' => 'pdf', 'application/msword' => 'doc', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'docx'];
$mime = (string) mime_content_type($f['tmp_name']);
$ext = strtolower(pathinfo($f['name'], PATHINFO_EXTENSION));
if (!isset($allowed[$mime]) || !in_array($ext, ['pdf', 'doc', 'docx'], true)) fail(422, 'Upload a PDF or Word document.', 'cv');
$dir = PRIV . '/uploads/cv';
if (!is_dir($dir)) mkdir($dir, 0700, true);
$dest = $dir . '/' . time() . '-' . bin2hex(random_bytes(4)) . '.' . $allowed[$mime];
if (!move_uploaded_file($f['tmp_name'], $dest)) fail(500, 'Upload failed.', 'cv');

record('careers', $data + ['cv' => basename($dest)]);
send_mail(MAIL_TO_CAREERS, "[Job application] {$data['position']} — {$data['name']}", $data['email'],
  ['Position' => $data['position'], 'Name' => $data['name'], 'Email' => $data['email'], 'Phone' => $data['phone'], 'Experience' => $data['experience'], 'Location' => $data['location'], 'Cover note' => $data['message']],
  ['path' => $dest, 'name' => preg_replace('/[^\w.-]/', '_', $f['name']), 'type' => $mime]);
ok('/thank-you?form=careers');
