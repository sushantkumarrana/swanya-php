<?php
require_once __DIR__ . '/../private/inc/bootstrap.php';
$V['FAQ_GROUPS'] = faq_groups(); $V['FAQ_LD'] = faq_ld();
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
<?php include PRIV . '/inc/head.php'; ?>
<title>FAQs — Sterile Manufacturing, Quality & Ordering | Swanya</title>
<meta name="description" content="Answers on FFS dosage forms, batch sizes, WFI and sterilisation, in-house QC, certifications, MOQ, lead times, private label supply and careers at Swanya.">
<link rel="canonical" href="<?= v('SITE_URL') ?>/faq">
<meta property="og:type" content="website"><meta property="og:site_name" content="Swanya Pharmaceuticals Pvt Ltd">
<meta property="og:title" content="FAQs | Swanya Pharmaceuticals"><meta property="og:description" content="Answers on FFS dosage forms, batch sizes, WFI and sterilisation, in-house QC, certifications, MOQ, lead times, private label supply and careers at Swanya.">
<meta property="og:url" content="<?= v('SITE_URL') ?>/faq"><meta property="og:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-faq.jpg">
<meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="FAQs | Swanya"><meta name="twitter:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-faq.jpg">
<style>.faq__group+.faq__group{margin-top:44px}.faq__group h2{margin-bottom:16px}.faq__nav{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:34px}</style>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"<?= v('SITE_URL') ?>/"},{"@type":"ListItem","position":2,"name":"FAQs","item":"<?= v('SITE_URL') ?>/faq"}]}</script>
<script type="application/ld+json"><?= v('FAQ_LD') ?></script>
</head>
<body>
<?php include PRIV . '/inc/header.php'; ?>
<main id="main">
<section class="phero" aria-labelledby="h1">
  <div class="phero__mesh"></div>
  <div class="container">
    <nav aria-label="Breadcrumb"><ol class="breadcrumb"><li><a href="/">Home</a></li><li aria-current="page">FAQs</li></ol></nav>
    <span class="eyebrow">FAQs</span>
    <h1 id="h1">Frequently asked questions</h1>
    <p class="lead">Straight answers on what we make, how we make it, how to order and how to join. Not covered? <a href="/contact" style="text-decoration:underline">Ask us directly</a>.</p>
  </div>
</section>
<section class="section">
  <div class="container container--narrow">
    <nav class="faq__nav" aria-label="FAQ categories">
      <a class="badge" href="#manufacturing">Manufacturing</a><a class="badge" href="#quality-compliance">Quality &amp; Compliance</a><a class="badge" href="#ordering-supply">Ordering &amp; Supply</a><a class="badge" href="#careers">Careers</a>
    </nav>
    <?= v('FAQ_GROUPS') ?>
  </div>
</section>
</main>
<?php include PRIV . '/inc/footer.php'; ?>
<script type="module">
document.querySelectorAll('.acc__btn').forEach((b) => b.addEventListener('click', () => {
  const open = b.getAttribute('aria-expanded') === 'true';
  b.setAttribute('aria-expanded', String(!open));
  document.getElementById(b.getAttribute('aria-controls')).classList.toggle('is-open', !open);
}));
if (location.hash) document.querySelector(location.hash)?.scrollIntoView();
</script>
</body>
</html>
