<?php
require_once __DIR__ . '/../private/inc/bootstrap.php';
$V['BLOG_CARDS'] = blog_cards(); $V['BLOG_CATS'] = blog_cats();
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
<?php include PRIV . '/inc/head.php'; ?>
<title>Sterile Manufacturing Insights & Company Updates | Swanya</title>
<meta name="description" content="Articles on Form-Fill-Seal technology, Water for Injection, cGMP warehousing, ICH stability and choosing a sterile contract manufacturer, from Swanya Baddi.">
<link rel="canonical" href="<?= v('SITE_URL') ?>/blogs">
<meta property="og:type" content="website"><meta property="og:site_name" content="Swanya Pharmaceuticals Pvt Ltd">
<meta property="og:title" content="Sterile Manufacturing Insights & Company Updates | Swanya">
<meta property="og:description" content="Articles on Form-Fill-Seal technology, Water for Injection, cGMP warehousing, ICH stability and choosing a sterile contract manufacturer, from Swanya Baddi.">
<meta property="og:url" content="<?= v('SITE_URL') ?>/blogs"><meta property="og:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-blogs.jpg">
<meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Insights | Swanya"><meta name="twitter:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-blogs.jpg">
<link rel="stylesheet" href="/css/pages/blog.css">
<script type="application/ld+json">
{"@context":"https://schema.org","@graph":[
 {"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"<?= v('SITE_URL') ?>/"},{"@type":"ListItem","position":2,"name":"Blogs","item":"<?= v('SITE_URL') ?>/blogs"}]},
 {"@type":"Blog","name":"Swanya Pharmaceuticals Blog","url":"<?= v('SITE_URL') ?>/blogs","publisher":{"@id":"<?= v('SITE_URL') ?>/#organization"}}
]}
</script>
</head>
<body>
<?php include PRIV . '/inc/header.php'; ?>
<main id="main">
<section class="phero" aria-labelledby="h1">
  <div class="phero__mesh"></div>
  <div class="container">
    <nav aria-label="Breadcrumb"><ol class="breadcrumb"><li><a href="/">Home</a></li><li aria-current="page">Blogs</li></ol></nav>
    <span class="eyebrow">Blogs</span>
    <h1 id="h1">Industry articles and company updates</h1>
    <p class="lead">Plain-language explainers on sterile liquid manufacturing — FFS, water systems, warehousing, stability — written for procurement, QA and regulatory teams, plus news from the Baddi site.</p>
  </div>
</section>

<section class="section" aria-labelledby="list-h">
  <div class="container">
    <h2 class="sr-only" id="list-h">All articles</h2>
    <div class="blog__tools">
      <div class="filters" role="group" aria-label="Filter by category">
        <button type="button" aria-pressed="true" data-filter="all">All</button>
        <?= v('BLOG_CATS') ?>
        <button type="button" aria-pressed="false" data-filter="Company Updates">Company Updates</button>
      </div>
      <label class="blog__search"><span class="sr-only">Search articles</span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg><input type="search" id="bsearch" placeholder="Search articles…" autocomplete="off"></label>
    </div>
    <div class="agrid" id="agrid"><?= v('BLOG_CARDS') ?></div>
    <p class="todo" id="bempty" hidden style="margin-top:16px">No articles match. Company updates will appear here as they are published.</p>
    <nav class="pager" id="pager" aria-label="Pagination"></nav>
  </div>
</section>
</main>
<?php include PRIV . '/inc/footer.php'; ?>
<script type="module">
const PER = 6, cards = [...document.querySelectorAll('#agrid .acard')], btns = document.querySelectorAll('.filters button'), q = document.getElementById('bsearch'), pager = document.getElementById('pager'), empty = document.getElementById('bempty');
let cat = 'all', page = 1;
function apply() {
  const term = q.value.trim().toLowerCase();
  const list = cards.filter((c) => (cat === 'all' || c.dataset.cat === cat) && (!term || c.dataset.search.includes(term)));
  const pages = Math.max(1, Math.ceil(list.length / PER)); page = Math.min(page, pages);
  cards.forEach((c) => c.classList.add('is-hidden'));
  list.slice((page - 1) * PER, page * PER).forEach((c) => c.classList.remove('is-hidden'));
  empty.hidden = list.length > 0;
  pager.innerHTML = pages > 1 ? Array.from({ length: pages }, (_, i) => `<button type="button" ${i + 1 === page ? 'aria-current="page"' : ''} data-page="${i + 1}">${i + 1}</button>`).join('') : '';
}
btns.forEach((b) => b.addEventListener('click', () => { btns.forEach((x) => x.setAttribute('aria-pressed', x === b)); cat = b.dataset.filter; page = 1; apply(); }));
q.addEventListener('input', () => { page = 1; apply(); });
pager.addEventListener('click', (e) => { const b = e.target.closest('[data-page]'); if (b) { page = +b.dataset.page; apply(); window.scrollTo({ top: document.getElementById('agrid').offsetTop - 120, behavior: 'smooth' }); } });
apply();
</script>
</body>
</html>
