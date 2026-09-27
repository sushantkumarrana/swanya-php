<?php
require_once __DIR__ . '/../private/inc/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
<?php include PRIV . '/inc/head.php'; ?>
<title>Thank You — Swanya Pharmaceuticals</title>
<meta name="description" content="Your message has been received by Swanya Pharmaceuticals. We will respond within one business day.">
<meta name="robots" content="noindex">
<link rel="canonical" href="<?= v('SITE_URL') ?>/thank-you">
</head>
<body>
<?php include PRIV . '/inc/header.php'; ?>
<main id="main">
<section class="phero" style="min-height:70vh;display:flex;align-items:center" aria-labelledby="h1">
  <div class="phero__mesh"></div>
  <div class="container">
    <span class="eyebrow">Message received</span>
    <h1 id="h1">Thank you — we'll be in touch shortly.</h1>
    <p class="lead">Your submission has reached the Swanya team. Expect a reply within one business day (<?= v('HOURS') ?>). For anything urgent, call <a href="tel:<?= v('PHONE_TEL') ?>" style="text-decoration:underline"><?= v('PHONE') ?></a> or message us on WhatsApp.</p>
    <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:32px">
      <a class="btn btn--white" href="/">Back to Home</a>
      <a class="btn btn--light" href="/products">Browse Products</a>
      <a class="btn btn--light" href="/blogs">Read Insights</a>
    </div>
  </div>
</section>
</main>
<?php include PRIV . '/inc/footer.php'; ?>
<script>window.dataLayer=window.dataLayer||[];window.dataLayer.push({event:'conversion_thank_you',form_id:new URLSearchParams(location.search).get('form')||''});</script>
</body>
</html>
