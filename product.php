<?php
require_once __DIR__ . '/private/inc/bootstrap.php';
$p = get_product($_GET['slug'] ?? ''); if (!$p) { require __DIR__ . '/404.php'; exit; } $V += product_vars($p);
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
<?php include PRIV . '/inc/head.php'; ?>
<title><?= v('P_NAME') ?> Manufacturer, Baddi | Swanya</title>
<meta name="description" content="<?= v('P_META_DESC') ?>">
<meta name="keywords" content="<?= v('P_KEYWORDS') ?>">
<link rel="canonical" href="<?= v('SITE_URL') ?>/products/<?= v('P_SLUG') ?>">
<meta property="og:type" content="product"><meta property="og:site_name" content="Swanya Pharmaceuticals Pvt Ltd">
<meta property="og:title" content="<?= v('P_NAME') ?> | Swanya Pharmaceuticals"><meta property="og:description" content="<?= v('P_SUMMARY') ?>">
<meta property="og:url" content="<?= v('SITE_URL') ?>/products/<?= v('P_SLUG') ?>"><meta property="og:image" content="<?= v('P_IMAGE') ?>">
<meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="<?= v('P_NAME') ?> | Swanya"><meta name="twitter:image" content="<?= v('P_IMAGE') ?>">
<link rel="stylesheet" href="/css/pages/products.css">
<script type="application/ld+json"><?= v('P_LD') ?></script>
</head>
<body>
<?php include PRIV . '/inc/header.php'; ?>
<main id="main">
<section class="phero" style="padding-bottom:40px" aria-label="Product header">
  <div class="phero__mesh"></div>
  <div class="container">
    <nav aria-label="Breadcrumb"><ol class="breadcrumb"><li><a href="/">Home</a></li><li><a href="/products">Products</a></li><li aria-current="page"><?= v('P_NAME') ?></li></ol></nav>
  </div>
</section>

<section class="section" style="padding-top:clamp(36px,5vw,60px)">
  <div class="container pdetail">
    <div class="gallery reveal" data-images="<?= v('P_IMAGES_JSON') ?>">
      <button class="gallery__main" type="button" aria-label="Open image in lightbox"><?= v('P_GALLERY_MAIN') ?></button>
      <div class="gallery__thumbs"><?= v('P_GALLERY_THUMBS') ?></div>
    </div>
    <div class="reveal reveal--right">
      <div class="pdetail__cats"><span class="badge"><?= v('P_CATS') ?></span></div>
      <h1><?= v('P_NAME') ?></h1>
      <div class="pdetail__tag"><?= v('P_TAGLINE') ?></div>
      <p class="lead"><?= v('P_SUMMARY') ?></p>
      <div class="pdetail__actions">
        <a class="btn btn--primary" href="/contact?product=<?= v('P_SLUG') ?>#enquiry" data-modal="enquiry" data-product="<?= v('P_SLUG') ?>">Enquire about this product <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
        <!-- TODO: confirm with client — datasheet PDFs -->
        <a class="btn btn--ghost" href="<?= v('P_DATASHEET') ?>" data-modal="download" data-file="<?= v('P_DATASHEET') ?>" data-title="<?= v('P_NAME') ?> datasheet">Download datasheet <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 3v12m0 0 4-4m-4 4-4-4M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"/></svg></a>
      </div>
      <h2 class="h-sm">Sizes &amp; variants</h2>
      <ul class="variants"><?= v('P_VARIANTS') ?></ul>
    </div>
  </div>

  <div class="container">
    <div class="pdetail__section prose reveal" style="max-width:none">
      <h2>Description</h2>
      <div class="prose"><?= v('P_DESC') ?></div>
    </div>
    <div class="pdetail__section reveal">
      <h2>Specifications</h2>
      <div class="table-wrap"><table class="table"><thead><tr><th scope="col">Attribute</th><th scope="col">Detail</th></tr></thead><tbody><?= v('P_SPECS') ?></tbody></table></div>
      <p class="hint" style="font-size:13px;color:var(--body-light);margin-top:10px">Product information is provided for healthcare professionals and trade partners. It is not a substitute for the approved product label or prescribing information.</p>
    </div>
    <div class="enquiry-strip reveal">
      <div><h2 class="h-sm" id="enq">Need pricing, MOQ or samples?</h2><p style="font-size:14.5px;margin-top:4px">Tell us the volumes and markets; we reply with a quotation and lead time.</p></div>
      <div style="display:flex;gap:10px;flex-wrap:wrap"><a class="btn btn--primary btn--sm" href="/contact?product=<?= v('P_SLUG') ?>#enquiry" data-modal="enquiry" data-product="<?= v('P_SLUG') ?>">Send product enquiry</a><a class="btn btn--wa btn--sm" href="<?= v('WA_LINK') ?><?= v('P_NAME') ?>" target="_blank" rel="noopener" data-track="whatsapp">WhatsApp</a></div>
    </div>
    <div class="pdetail__section reveal">
      <h2>Related products</h2>
      <div class="grid-3"><?= v('P_RELATED') ?></div>
    </div>
  </div>
</section>

<div class="lightbox" id="lightbox" hidden role="dialog" aria-modal="true" aria-label="Image viewer">
  <button class="lightbox__close" type="button" aria-label="Close"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6l12 12M18 6 6 18"/></svg></button>
  <button class="lightbox__nav lightbox__nav--prev" type="button" aria-label="Previous image"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 6-6 6 6 6"/></svg></button>
  <img src="" alt="" width="1200" height="800">
  <button class="lightbox__nav lightbox__nav--next" type="button" aria-label="Next image"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 6 6 6-6 6"/></svg></button>
</div>
</main>
<?php include PRIV . '/inc/footer.php'; ?>
<script type="module">
const g = document.querySelector('.gallery'), imgs = JSON.parse(g.dataset.images), main = g.querySelector('.gallery__img'), thumbs = [...g.querySelectorAll('.gallery__thumb')];
const lb = document.getElementById('lightbox'), lbImg = lb.querySelector('img');
let i = 0;
const srcOf = (im) => im.src.includes('/generated/') ? `${im.src.replace(/-\d+$/, '')}-1600.jpg` : `${im.src}.${im.ext}`;
const show = (n) => { i = (n + imgs.length) % imgs.length; main.src = srcOf(imgs[i]); main.alt = imgs[i].alt; main.parentElement.querySelector('source')?.remove(); thumbs.forEach((t, k) => t.classList.toggle('is-active', k === i)); };
thumbs.forEach((t) => t.addEventListener('click', () => show(+t.dataset.index)));
const open = () => { lbImg.src = srcOf(imgs[i]); lbImg.alt = imgs[i].alt; lb.hidden = false; lb.querySelector('.lightbox__close').focus(); document.body.style.overflow = 'hidden'; };
const close = () => { lb.hidden = true; document.body.style.overflow = ''; g.querySelector('.gallery__main').focus(); };
g.querySelector('.gallery__main').addEventListener('click', open);
lb.querySelector('.lightbox__close').addEventListener('click', close);
lb.querySelector('.lightbox__nav--prev').addEventListener('click', () => { show(i - 1); lbImg.src = srcOf(imgs[i]); });
lb.querySelector('.lightbox__nav--next').addEventListener('click', () => { show(i + 1); lbImg.src = srcOf(imgs[i]); });
lb.addEventListener('click', (e) => { if (e.target === lb) close(); });
document.addEventListener('keydown', (e) => { if (lb.hidden) return; if (e.key === 'Escape') close(); if (e.key === 'ArrowLeft') { show(i - 1); lbImg.src = srcOf(imgs[i]); } if (e.key === 'ArrowRight') { show(i + 1); lbImg.src = srcOf(imgs[i]); } });
</script>
</body>
</html>
