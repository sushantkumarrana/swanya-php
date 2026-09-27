<?php
require_once __DIR__ . '/private/inc/bootstrap.php';
$f = $_GET['file'] ?? ''; $V['DL_FILE'] = preg_match('#^/assets/docs/[a-z0-9/-]+\.pdf$#', $f) ? $f : ''; $V['DL_TITLE'] = e(mb_substr((string) ($_GET['title'] ?? 'your document'), 0, 120));
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
<?php include PRIV . '/inc/head.php'; ?>
<title>Your Download Is Starting — Swanya Pharmaceuticals</title>
<meta name="description" content="Thank you. Your Swanya Pharmaceuticals document will download automatically in a few seconds.">
<meta name="robots" content="noindex">
<link rel="canonical" href="<?= v('SITE_URL') ?>/thank-you-download">
<style>.count{display:inline-grid;place-items:center;width:96px;height:96px;border-radius:50%;border:3px solid rgba(143,214,242,.4);font-family:var(--f-display);font-size:2.4rem;font-weight:700;color:#fff;position:relative;margin:26px 0 18px}.count::after{content:"";position:absolute;inset:-3px;border-radius:50%;border:3px solid var(--cyan);border-color:var(--cyan) transparent transparent transparent;animation:spin 1s linear infinite}@keyframes spin{to{transform:rotate(360deg)}}.count.is-done::after{animation:none;border-color:var(--cyan)}</style>
</head>
<body>
<?php include PRIV . '/inc/header.php'; ?>
<main id="main">
<section class="phero" style="min-height:70vh;display:flex;align-items:center" aria-labelledby="h1">
  <div class="phero__mesh"></div>
  <div class="container">
    <span class="eyebrow">Thank you</span>
    <h1 id="h1">Your download is starting</h1>
    <p class="lead"><strong style="color:#fff" id="dl-title"><?= v('DL_TITLE') ?></strong> will download automatically in <span id="secs">3</span> <span id="unit">seconds</span>.</p>
    <div class="count" id="count" aria-hidden="true">3</div>
    <p class="lead" style="font-size:15px">Didn't start? <a id="dl-link" href="<?= v('DL_FILE') ?>" download data-track="pdf" style="text-decoration:underline">Click here to download the PDF</a>.</p>
    <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:32px">
      <a class="btn btn--white" href="/products">Browse Products</a>
      <a class="btn btn--light" href="/contact">Contact Us</a>
    </div>
  </div>
</section>
</main>
<?php include PRIV . '/inc/footer.php'; ?>
<script>
(function(){
  var link=document.getElementById('dl-link'), n=3, secs=document.getElementById('secs'), c=document.getElementById('count');
  if(!link.getAttribute('href')){ secs.parentElement.textContent='Document not found. Please contact us.'; c.hidden=true; return; }
  var t=setInterval(function(){ n--; secs.textContent=n; c.textContent=n; document.getElementById('unit').textContent=n===1?'second':'seconds'; if(n<=0){ clearInterval(t); c.classList.add('is-done'); c.textContent='✓'; secs.parentElement.textContent=document.getElementById('dl-title').textContent+' download started.'; link.click(); window.dataLayer=window.dataLayer||[]; window.dataLayer.push({event:'pdf_download',file:link.href}); } },1000);
})();
</script>
</body>
</html>
