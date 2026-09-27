<?php
require_once __DIR__ . '/../private/inc/bootstrap.php';
require_once PRIV . '/inc/form.php';

$d = form_input();
$p = get_product(v_slug($d, 'product', true)) ?? fail(422, 'Unknown product.', 'product');
$data = [
  'name' => v_name($d), 'email' => v_email($d), 'phone' => v_phone($d),
  'company' => v_text($d, 'company', 120), 'quantity' => v_text($d, 'quantity', 100), 'message' => v_text($d, 'message', 3000),
  'product' => $p['slug'],
];
record('enquiry', $data);
send_mail(MAIL_TO_CONTACT, "[Product enquiry] {$p['name']} — {$data['name']}", $data['email'],
  ['Product' => $p['name'], 'Name' => $data['name'], 'Company' => $data['company'], 'Email' => $data['email'], 'Phone' => $data['phone'], 'Quantity' => $data['quantity'], 'Message' => $data['message']]);
ok('/thank-you?form=enquiry');
