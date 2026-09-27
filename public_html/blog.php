<?php
require_once __DIR__ . '/../private/inc/bootstrap.php';
$p = get_post($_GET['slug'] ?? ''); if (!$p) { require __DIR__ . '/404.php'; exit; } $V += post_vars($p);
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
<?php include PRIV . '/inc/head.php'; ?>
<title><?= v('B_META_TITLE') ?></title>
<meta name="description" content="<?= v('B_EXCERPT') ?>">
<link rel="canonical" href="<?= v('SITE_URL') ?>/blogs/<?= v('B_SLUG') ?>">
<meta property="og:type" content="article"><meta property="og:site_name" content="Swanya Pharmaceuticals Pvt Ltd">
<meta property="og:title" content="<?= v('B_TITLE') ?>"><meta property="og:description" content="<?= v('B_EXCERPT') ?>">
<meta property="og:url" content="<?= v('SITE_URL') ?>/blogs/<?= v('B_SLUG') ?>"><meta property="og:image" content="<?= v('B_IMAGE') ?>">
<meta property="article:published_time" content="<?= v('B_DATE_ISO') ?>">
<meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="<?= v('B_TITLE') ?>"><meta name="twitter:image" content="<?= v('B_IMAGE') ?>">
<link rel="stylesheet" href="/css/pages/blog.css">
<script type="application/ld+json"><?= v('B_LD') ?></script>
</head>
<body>
<div class="progress" aria-hidden="true"></div>
<?php include PRIV . '/inc/header.php'; ?>
<main id="main">
<section class="phero" style="padding-bottom:100px" aria-label="Article header">
  <div class="phero__mesh"></div>
  <div class="container">
    <nav aria-label="Breadcrumb"><ol class="breadcrumb"><li><a href="/">Home</a></li><li><a href="/blogs">Blogs</a></li><li aria-current="page"><?= v('B_CATEGORY') ?></li></ol></nav>
    <span class="eyebrow"><?= v('B_CATEGORY') ?></span>
    <h1 id="h1" style="max-width:24ch"><?= v('B_TITLE') ?></h1>
    <div class="post__meta"><span>By <?= v('B_AUTHOR') ?></span><span><?= v('B_DATE') ?></span><span><?= v('B_READ') ?> min read</span></div>
  </div>
</section>
<article class="section" style="padding-top:0">
  <div class="container">
    <div class="post__hero"><?= v('B_HERO') ?></div>
    <div class="post">
      <div class="post__body"><?= v('B_BODY') ?></div>
      <div class="post__foot">
        <div class="post__author"><img src="/assets/img/logo.jpg" alt="" width="44" height="44"><div><b><?= v('B_AUTHOR') ?></b><small>Swanya Pharmaceuticals Pvt Ltd · Updated <?= v('B_UPDATED') ?></small></div></div>
        <div><?= v('B_TAGS') ?></div>
      </div>
    </div>
  </div>
</article>
<section class="section section--cool section--tight" aria-labelledby="rel-h">
  <div class="container">
    <div class="sec-head"><div class="sec-head__l"><span class="eyebrow">Keep reading</span><h2 class="h-md" id="rel-h">Related articles</h2></div><a class="link-arrow" href="/blogs">All articles <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a></div>
    <div class="agrid"><?= v('B_RELATED') ?></div>
  </div>
</section>
</main>
<?php include PRIV . '/inc/footer.php'; ?>
</body>
</html>
