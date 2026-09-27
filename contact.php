<?php
require_once __DIR__ . '/private/inc/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
<?php include PRIV . '/inc/head.php'; ?>
<title>Contact Swanya Pharmaceuticals, Baddi | Request a Quote</title>
<meta name="description" content="Contact Swanya Pharmaceuticals in Baddi, Himachal Pradesh for sterile liquid contract manufacturing and quotes. Address, phone, email, hours, map, WhatsApp.">
<link rel="canonical" href="<?= v('SITE_URL') ?>/contact">
<meta property="og:type" content="website"><meta property="og:site_name" content="Swanya Pharmaceuticals Pvt Ltd">
<meta property="og:title" content="Contact Swanya Pharmaceuticals, Baddi | Request a Quote">
<meta property="og:description" content="Contact Swanya Pharmaceuticals in Baddi, Himachal Pradesh for sterile liquid contract manufacturing and quotes. Address, phone, email, hours, map, WhatsApp.">
<meta property="og:url" content="<?= v('SITE_URL') ?>/contact"><meta property="og:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-contact.jpg">
<meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Contact Swanya"><meta name="twitter:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-contact.jpg">
<link rel="stylesheet" href="/css/pages/contact.css">
<script type="application/ld+json">
{"@context":"https://schema.org","@graph":[
 {"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"<?= v('SITE_URL') ?>/"},{"@type":"ListItem","position":2,"name":"Contact Us","item":"<?= v('SITE_URL') ?>/contact"}]},
 {"@type":"ContactPage","name":"Contact Swanya Pharmaceuticals","url":"<?= v('SITE_URL') ?>/contact","mainEntity":{"@id":"<?= v('SITE_URL') ?>/#organization"}}
]}
</script>
</head>
<body>
<?php include PRIV . '/inc/header.php'; ?>
<main id="main">
<section class="phero" aria-labelledby="h1">
  <div class="phero__mesh"></div>
  <div class="container">
    <nav aria-label="Breadcrumb"><ol class="breadcrumb"><li><a href="/">Home</a></li><li aria-current="page">Contact Us</li></ol></nav>
    <span class="eyebrow">Contact us</span>
    <h1 id="h1">Talk to the Swanya team</h1>
    <p class="lead">Quotations, contract-manufacturing feasibility, product samples, audits and site visits — send the details below and we will respond within one business day.</p>
  </div>
</section>

<section class="section">
  <div class="container contact__layout">
    <div class="contact__card reveal" id="enquiry">
      <h2>Send an enquiry</h2>
      <p>Fields marked <span class="req">*</span> are required. We only use your details to respond to this enquiry — see our <a href="/privacy-policy" style="color:var(--primary)">privacy policy</a>.</p>
      <form class="form" id="contact-form" action="/api/contact" method="post" novalidate>
        <div class="form__row">
          <div class="field"><label for="c-name">Full name <span class="req">*</span></label><input id="c-name" name="name" type="text" required autocomplete="name" maxlength="100"><div class="err" aria-live="polite"></div></div>
          <div class="field"><label for="c-company">Company / organisation</label><input id="c-company" name="company" type="text" autocomplete="organization" maxlength="120"><div class="err"></div></div>
        </div>
        <div class="form__row">
          <div class="field"><label for="c-email">Work email <span class="req">*</span></label><input id="c-email" name="email" type="email" required autocomplete="email" maxlength="160"><div class="err" aria-live="polite"></div></div>
          <div class="field"><label for="c-phone">Phone / WhatsApp <span class="req">*</span></label><input id="c-phone" name="phone" type="tel" required autocomplete="tel" inputmode="tel" maxlength="20" placeholder="+91"><div class="err" aria-live="polite"></div></div>
        </div>
        <div class="form__row">
          <div class="field"><label for="c-subject">Enquiry type <span class="req">*</span></label>
            <select id="c-subject" name="subject" required>
              <option value="">Select…</option>
              <option>Contract manufacturing</option>
              <option>Product quotation</option>
              <option>Distribution / supply</option>
              <option>Export enquiry</option>
              <option>Audit / site visit</option>
              <option>Other</option>
            </select><div class="err" aria-live="polite"></div></div>
          <div class="field"><label for="c-product">Product of interest</label>
            <select id="c-product" name="product">
              <option value="">Any / not sure</option>
              <option value="sterile-water-for-injection">Sterile Water for Injection</option>
              <option value="normal-saline-solution">Normal Saline Solution</option>
              <option value="respules">Respules</option>
              <option value="ffs-ampoules">FFS Ampoules</option>
            </select><div class="err"></div></div>
        </div>
        <div class="field"><label for="c-msg">Message <span class="req">*</span></label><textarea id="c-msg" name="message" required minlength="20" maxlength="3000" placeholder="Products, fill volumes, annual quantities, target markets…"></textarea><div class="err" aria-live="polite"></div></div>
        <div class="field" style="flex-direction:row;display:flex;gap:10px;align-items:flex-start"><input id="c-consent" name="consent" type="checkbox" required style="width:auto;margin-top:4px"><label for="c-consent" style="font-weight:400;font-size:13.5px;color:var(--body)">I consent to Swanya Pharmaceuticals storing my details to respond to this enquiry. <span class="req">*</span></label></div>
        <div class="hp" aria-hidden="true"><label>Leave this field empty <input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
        <input type="hidden" name="ts" value="">
        <div class="form__status" role="status" aria-live="polite"></div>
        <button class="btn btn--primary" type="submit">Send enquiry <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></button>
      </form>
    </div>

    <aside class="reveal reveal--right">
      <div class="cinfo">
        <div class="cinfo__item"><div class="cinfo__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s7-6.2 7-11.5A7 7 0 0 0 5 9.5C5 14.8 12 21 12 21Z"/><circle cx="12" cy="9.5" r="2.5"/></svg></div><div><div class="cinfo__t">Address</div><address class="cinfo__d" style="font-style:normal">Swanya Pharmaceuticals Pvt Ltd<br><!-- TODO: confirm exact address with client -->Baddi, Solan District, Himachal Pradesh, India</address></div></div>
        <div class="cinfo__item"><div class="cinfo__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Z"/></svg></div><div><div class="cinfo__t">Phone</div><div class="cinfo__d"><a href="tel:<?= v('PHONE_TEL') ?>" data-track="phone"><?= v('PHONE') ?></a></div></div></div>
        <div class="cinfo__item"><div class="cinfo__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg></div><div><div class="cinfo__t">Email</div><div class="cinfo__d"><a href="mailto:<?= v('EMAIL') ?>" data-track="email"><?= v('EMAIL') ?></a></div></div></div>
        <div class="cinfo__item"><div class="cinfo__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div><div><div class="cinfo__t">Business hours</div><div class="cinfo__d"><?= v('HOURS') ?></div></div></div>
        <div class="cinfo__item"><div class="cinfo__ic" style="background:#e8f9ef;color:#1a9d4b"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2Zm0 18.2a8.2 8.2 0 0 1-4.2-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2Z"/></svg></div><div><div class="cinfo__t">WhatsApp</div><div class="cinfo__d"><a href="<?= v('WA_LINK') ?>" target="_blank" rel="noopener" data-track="whatsapp">Chat with our team</a></div></div></div>
      </div>
      <div class="map" id="map">
        <!-- Click-to-load: the Google Maps iframe is injected only on request (heavy third-party payload) -->
        <div class="map__ph"><div><b>Swanya Pharmaceuticals, Baddi</b><small>Loads an interactive Google Map. Google's privacy policy applies once loaded.</small><button class="btn btn--primary btn--sm" type="button" id="map-load">Load map</button></div></div>
      </div>
    </aside>
  </div>
</section>
</main>
<?php include PRIV . '/inc/footer.php'; ?>
<script type="module">
import { initForm } from '/js/forms.js';
initForm(document.getElementById('contact-form'));
// Preselect product from ?product=
const p = new URLSearchParams(location.search).get('product'); if (p) document.getElementById('c-product').value = p;
// Map click-to-load
document.getElementById('map-load').addEventListener('click', () => {
  const m = document.getElementById('map');
  // TODO: confirm with client — replace query with exact place / Plus Code
  m.innerHTML = '<iframe title="Map showing Swanya Pharmaceuticals in Baddi" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=Swanya+Pharmaceuticals+Baddi+Himachal+Pradesh&output=embed"></iframe>';
});
</script>
</body>
</html>
