<?php
require_once __DIR__ . '/../private/inc/bootstrap.php';
$V['PRODUCT_LIST_ROWS'] = product_list_rows();
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
<?php include PRIV . '/inc/head.php'; ?>
<title>Downloads — Product List, Compatibility Chart, Brochures</title>
<meta name="description" content="Download Swanya resources: sterile liquid product list, container compatibility chart, brochures and datasheets for SWFI, Normal Saline, Respules, ampoules.">
<link rel="canonical" href="<?= v('SITE_URL') ?>/downloads">
<meta property="og:type" content="website"><meta property="og:site_name" content="Swanya Pharmaceuticals Pvt Ltd">
<meta property="og:title" content="Downloads | Swanya Pharmaceuticals"><meta property="og:description" content="Download Swanya resources: sterile liquid product list, container compatibility chart, brochures and datasheets for SWFI, Normal Saline, Respules, ampoules.">
<meta property="og:url" content="<?= v('SITE_URL') ?>/downloads"><meta property="og:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-downloads.jpg">
<meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Downloads | Swanya"><meta name="twitter:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-downloads.jpg">
<style>.dl{display:flex;gap:16px;align-items:center;padding:20px 22px;border:1px solid var(--line);border-radius:var(--radius);background:var(--surface);transition:transform var(--dur),box-shadow var(--dur),border-color var(--dur)}.dl:hover{transform:translateY(-4px);box-shadow:var(--shadow-md);border-color:var(--cyan-soft)}.dl__ic{width:46px;height:46px;border-radius:12px;background:var(--bg-cool);display:grid;place-items:center;color:var(--primary);flex:none}.dl__ic svg{width:22px;height:22px}.dl b{display:block;color:var(--ink);font-family:var(--f-display)}.dl small{color:var(--body-light);font-size:12.5px}.dl__grid{display:grid;gap:14px}@media(min-width:768px){.dl__grid{grid-template-columns:repeat(2,1fr)}}</style>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"<?= v('SITE_URL') ?>/"},{"@type":"ListItem","position":2,"name":"Downloads","item":"<?= v('SITE_URL') ?>/downloads"}]}</script>
</head>
<body>
<?php include PRIV . '/inc/header.php'; ?>
<main id="main">
<section class="phero" aria-labelledby="h1">
  <div class="phero__mesh"></div>
  <div class="container">
    <nav aria-label="Breadcrumb"><ol class="breadcrumb"><li><a href="/">Home</a></li><li aria-current="page">Downloads</li></ol></nav>
    <span class="eyebrow">Downloads</span>
    <h1 id="h1">Product list, compatibility chart and brochures</h1>
    <p class="lead">Everything a procurement or regulatory team needs to evaluate Swanya's sterile liquid range, in one place.</p>
  </div>
</section>
<section class="section" aria-labelledby="pl-h">
  <div class="container">
    <div class="sec-head reveal"><div class="sec-head__l"><span class="eyebrow">Product list</span><h2 class="h-lg" id="pl-h">Sterile liquid product list</h2><p class="lead">Current presentations manufactured on Form-Fill-Seal lines in Baddi. Full specifications are on each product page.</p></div><a class="btn btn--ghost" href="/assets/docs/product-list.pdf" data-track="pdf" download>Download list (PDF)</a></div>
    <div class="table-wrap reveal"><table class="table"><thead><tr><th scope="col">Product</th><th scope="col">Fill volumes</th><th scope="col">Category</th><th scope="col">Datasheet</th></tr></thead><tbody><?= v('PRODUCT_LIST_ROWS') ?></tbody></table></div>
    <!-- TODO: confirm with client — product-list.pdf, compatibility chart and brochure PDFs to be supplied -->
  </div>
</section>
<section class="section section--cool" id="compatibility" aria-labelledby="cc-h">
  <div class="container">
    <div class="sec-head reveal"><div class="sec-head__l"><span class="eyebrow">Compatibility chart</span><h2 class="h-lg" id="cc-h">Container &amp; closure compatibility</h2><p class="lead">Which fill volumes, container formats and closures are available for each dosage form.</p></div></div>
    <div class="table-wrap reveal"><table class="table"><thead><tr><th scope="col">Dosage form</th><th scope="col">Container</th><th scope="col">Closure</th><th scope="col">Fill range</th><th scope="col">Solution</th><th scope="col">Suspension</th></tr></thead><tbody>
      <tr><td>Sterile Water for Injection</td><td>FFS vial</td><td>In-built twist-off cap</td><td>5 – 30 ml</td><td>✔</td><td>—</td></tr>
      <tr><td>Normal Saline Solution</td><td>FFS vial</td><td>In-built twist-off cap</td><td>10 ml</td><td>✔</td><td>—</td></tr>
      <tr><td>Respules</td><td>FFS respule strip</td><td>Twist-off cap</td><td>1 – 5 ml</td><td>✔</td><td>✔</td></tr>
      <tr><td>FFS Ampoules</td><td>FFS ampoule</td><td>Break-off</td><td>TODO: confirm</td><td>✔</td><td>—</td></tr>
    </tbody></table></div>
    <p style="margin-top:14px"><a class="link-arrow" href="/assets/docs/compatibility-chart.pdf" data-track="pdf" download>Download compatibility chart (PDF) <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a></p>
  </div>
</section>
<section class="section" id="brochures" aria-labelledby="br-h">
  <div class="container">
    <div class="sec-head reveal"><div class="sec-head__l"><span class="eyebrow">Brochures</span><h2 class="h-lg" id="br-h">Brochures &amp; documents</h2></div></div>
    <div class="dl__grid reveal--stagger">
      <a class="dl" href="/assets/docs/company-profile.pdf" data-track="pdf" download><span class="dl__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><path d="M14 3v6h6"/></svg></span><span><b>Company Profile</b><small>Site, leadership, capabilities · PDF</small></span></a>
      <a class="dl" href="/assets/docs/product-portfolio.pdf" data-modal="download" data-file="/assets/docs/product-portfolio.pdf" data-title="Product Portfolio"><span class="dl__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><path d="M14 3v6h6"/></svg></span><span><b>Product Portfolio</b><small>All presentations &amp; pack details · PDF</small></span></a>
      <a class="dl" href="/assets/docs/brochures/ffs-technology-brochure.pdf" data-track="pdf" download><span class="dl__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><path d="M14 3v6h6"/></svg></span><span><b>FFS Technology Brochure</b><small>Form-Fill-Seal explained · PDF</small></span></a>
      <a class="dl" href="/assets/docs/brochures/contract-manufacturing-brochure.pdf" data-track="pdf" download><span class="dl__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><path d="M14 3v6h6"/></svg></span><span><b>Contract Manufacturing Brochure</b><small>Engagement models &amp; process · PDF</small></span></a>
    </div>
    <p class="todo" style="margin-top:18px;display:inline-block">TODO: PDFs to be supplied by client — links are wired to /assets/docs/</p>
  </div>
</section>
</main>
<?php include PRIV . '/inc/footer.php'; ?>
</body>
</html>
