<?php
require_once __DIR__ . '/../private/inc/bootstrap.php';
require_once PRIV . '/inc/form.php';

$d = form_input();
$file = $d['file'] ?? '';
if (!preg_match('#^/assets/docs/[a-z0-9/-]+\.pdf$#', $file)) fail(422, 'Invalid document.', 'file');
$data = [
  'name' => v_name($d), 'email' => v_email($d), 'phone' => v_phone($d),
  'company' => v_text($d, 'company', 120), 'file' => $file, 'title' => v_text($d, 'title', 120),
];
record('download', $data);
send_mail(MAIL_TO_CONTACT, '[Download lead] ' . ($data['title'] ?: $file) . " — {$data['name']}", $data['email'],
  ['Document' => $data['title'], 'File' => $file, 'Name' => $data['name'], 'Company' => $data['company'], 'Email' => $data['email'], 'Phone' => $data['phone']]);
ok('/thank-you-download?file=' . rawurlencode($file) . '&title=' . rawurlencode($data['title']));
