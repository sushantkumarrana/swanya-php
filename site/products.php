<?php
require_once __DIR__ . '/private/inc/bootstrap.php';
$V['PRODUCT_CARDS'] = product_cards();
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
<?php include PRIV . '/inc/head.php'; ?>
<title>FFS Vials, SVP & Sterile Liquid Products | Swanya Baddi</title>
<meta name="description" content="Sterile Water for Injection 5–30 ml, Normal Saline 10 ml, Respules 1–5 ml and FFS ampoules — single-use Form-Fill-Seal vials made in Baddi. Download portfolio.">
<link rel="canonical" href="<?= v('SITE_URL') ?>/products">
<meta property="og:type" content="website"><meta property="og:site_name" content="Swanya Pharmaceuticals Pvt Ltd">
<meta property="og:title" content="FFS Vials, SVP & Sterile Liquid Products | Swanya Baddi">
<meta property="og:description" content="Sterile Water for Injection 5–30 ml, Normal Saline 10 ml, Respules 1–5 ml and FFS ampoules — single-use Form-Fill-Seal vials made in Baddi. Download portfolio.">
<meta property="og:url" content="<?= v('SITE_URL') ?>/products"><meta property="og:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-products.jpg">
<meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Sterile Liquid Products | Swanya"><meta name="twitter:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-products.jpg">
<link rel="stylesheet" href="/css/pages/products.css">
<script type="application/ld+json">
{"@context":"https://schema.org","@graph":[
 {"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"<?= v('SITE_URL') ?>/"},{"@type":"ListItem","position":2,"name":"Products","item":"<?= v('SITE_URL') ?>/products"}]},
 {"@type":"CollectionPage","name":"Swanya sterile liquid products","url":"<?= v('SITE_URL') ?>/products"}
]}
</script>
</head>
<body>
<?php include PRIV . '/inc/header.php'; ?>
<main id="main">

<section class="phero" aria-labelledby="h1">
  <div class="phero__bg"><img src="/assets/img/real/swanya-ffs-vials-sterile-water-injection.png" width="1044" height="661" alt="" fetchpriority="high"></div>
  <div class="phero__mesh"></div>
  <div class="container">
    <nav aria-label="Breadcrumb"><ol class="breadcrumb"><li><a href="/">Home</a></li><li aria-current="page">Products</li></ol></nav>
    <span class="eyebrow">Products</span>
    <h1 id="h1">Sterile liquids in single-use FFS vials</h1>
    <p class="lead">Every Swanya product is a sterile liquid formed, filled and sealed on a Form-Fill-Seal machine — Sterile Water for Injection, Normal Saline, Respules and FFS ampoules, manufactured in Baddi for partners across India.</p>
  </div>
</section>

<section class="section" aria-labelledby="list-h">
  <div class="container">
    <div class="prose reveal" style="margin-bottom:40px">
      <p>Swanya is an <strong>FFS vial manufacturer</strong> and <strong>sterile water for injection manufacturer in India</strong>, serving hospital supply chains, marketing companies and distributors from a purpose-built site in Baddi, Himachal Pradesh. The range is deliberately narrow — sterile liquids only — so that every line, every water system and every laboratory method is tuned to one job: filling clear solutions and suspensions into single-use polymer containers without contamination.</p>
      <p>Each presentation below is available for supply under the Swanya label or under a partner's brand through <a href="/manufacturing#contract">contract manufacturing</a>. Product pages list fill volumes, container and closure details, sterilisation route and release testing; datasheets and the consolidated product portfolio can be downloaded for tender and registration files. Fill volumes and pack configurations outside the standard list are assessed at the feasibility stage.</p>
    </div>
    <div class="cat-intro reveal--stagger">
      <div class="card"><div class="card__t">FLWD Containers</div><p class="card__d">Form-Fill-Seal plastic vials and ampoules: the container is formed, filled and sealed in one closed cycle — no glass, no separate stopper.</p></div>
      <div class="card"><div class="card__t">SVP — Small Volume Parenterals</div><p class="card__d">Sterile solutions up to 30 ml: Sterile Water for Injection, Normal Saline and unit-dose respules.</p></div>
      <div class="card"><div class="card__t">LVP — Large Volume Parenterals</div><p class="card__d"><!-- TODO: confirm with client --><span class="todo">TODO: confirm LVP presentations with client</span></p></div>
    </div>
    <div class="sec-head reveal"><div class="sec-head__l"><h2 class="h-lg" id="list-h">Product range</h2></div></div>
    <div class="filters" role="group" aria-label="Filter products by category">
      <button type="button" aria-pressed="true" data-filter="all">All</button>
      <button type="button" aria-pressed="false" data-filter="flwd">FLWD Containers</button>
      <button type="button" aria-pressed="false" data-filter="lvp">LVP</button>
      <button type="button" aria-pressed="false" data-filter="svp">SVP</button>
    </div>
    <div class="pgrid reveal--stagger" id="pgrid"><?= v('PRODUCT_CARDS') ?></div>
    <p class="todo" id="pempty" hidden style="margin-top:16px">No products in this category yet — TODO: confirm LVP range with client.</p>
  </div>
</section>

<section class="section section--tight" aria-labelledby="pf-h">
  <div class="container">
    <div class="portfolio reveal reveal--scale">
      <div><span class="eyebrow" style="color:var(--cyan)">Product portfolio</span><h2 class="h-md" id="pf-h" style="margin-top:12px">Download the full product portfolio (PDF)</h2><p style="margin-top:8px">All presentations, fill volumes, pack configurations and container details in one document for procurement and regulatory teams.</p></div>
      <!-- TODO: confirm with client — final product portfolio PDF -->
      <a class="btn btn--white" href="/assets/docs/product-portfolio.pdf" data-modal="download" data-file="/assets/docs/product-portfolio.pdf" data-title="Product Portfolio">Download portfolio <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 3v12m0 0 4-4m-4 4-4-4M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"/></svg></a>
    </div>
  </div>
</section>

</main>
<?php include PRIV . '/inc/footer.php'; ?>
<script type="module">
const btns = document.querySelectorAll('.filters button'), cards = document.querySelectorAll('#pgrid .pcard'), empty = document.getElementById('pempty');
btns.forEach((b) => b.addEventListener('click', () => {
  btns.forEach((x) => x.setAttribute('aria-pressed', x === b));
  const f = b.dataset.filter; let n = 0;
  cards.forEach((c) => { const show = f === 'all' || c.dataset.cat.split(' ').includes(f); c.classList.toggle('is-hidden', !show); if (show) n++; });
  empty.hidden = n > 0;
}));
</script>
</body>
</html>
