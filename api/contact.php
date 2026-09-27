<?php
require_once __DIR__ . '/../private/inc/bootstrap.php';
require_once PRIV . '/inc/form.php';

$d = form_input();
$data = [
  'name' => v_name($d), 'email' => v_email($d), 'phone' => v_phone($d),
  'company' => v_text($d, 'company', 120),
  'subject' => in_array($d['subject'] ?? '', ['Contract manufacturing', 'Product quotation', 'Distribution / supply', 'Export enquiry', 'Audit / site visit', 'Other'], true) ? $d['subject'] : fail(422, 'Select an enquiry type.', 'subject'),
  'product' => v_slug($d, 'product'),
  'message' => v_text($d, 'message', 3000, 20, 'Message must be 20–3000 characters.'),
];
v_consent($d);
record('contact', $data);
send_mail(MAIL_TO_CONTACT, "[Website enquiry] {$data['subject']} — {$data['name']}" . ($data['company'] ? ", {$data['company']}" : ''), $data['email'],
  ['Name' => $data['name'], 'Company' => $data['company'], 'Email' => $data['email'], 'Phone' => $data['phone'], 'Enquiry type' => $data['subject'], 'Product' => $data['product'], 'Message' => $data['message']]);
ok('/thank-you?form=contact');
