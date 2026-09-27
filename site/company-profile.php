<?php
require_once __DIR__ . '/private/inc/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
<?php include PRIV . '/inc/head.php'; ?>
<title>Company Profile PDF — Swanya Pharmaceuticals Pvt Ltd</title>
<meta name="description" content="Download the Swanya Pharmaceuticals company profile PDF: Baddi sterile facility, leadership, FFS capabilities, water systems, warehouse, utilities and QC.">
<link rel="canonical" href="<?= v('SITE_URL') ?>/company-profile">
<meta property="og:type" content="website"><meta property="og:site_name" content="Swanya Pharmaceuticals Pvt Ltd">
<meta property="og:title" content="Company Profile | Swanya Pharmaceuticals"><meta property="og:description" content="Download the Swanya Pharmaceuticals company profile PDF: Baddi sterile facility, leadership, FFS capabilities, water systems, warehouse, utilities and QC.">
<meta property="og:url" content="<?= v('SITE_URL') ?>/company-profile"><meta property="og:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-about.jpg">
<meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Company Profile | Swanya"><meta name="twitter:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-about.jpg">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"<?= v('SITE_URL') ?>/"},{"@type":"ListItem","position":2,"name":"Company Profile","item":"<?= v('SITE_URL') ?>/company-profile"}]}</script>
</head>
<body>
<?php include PRIV . '/inc/header.php'; ?>
<main id="main">
<section class="phero" aria-labelledby="h1">
  <div class="phero__bg"><img src="/assets/img/real/swanya-facility-exterior-baddi.jpg" width="725" height="622" alt="" fetchpriority="high"></div>
  <div class="phero__mesh"></div>
  <div class="container">
    <nav aria-label="Breadcrumb"><ol class="breadcrumb"><li><a href="/">Home</a></li><li aria-current="page">Company Profile</li></ol></nav>
    <span class="eyebrow">Company profile</span>
    <h1 id="h1">Swanya Pharmaceuticals at a glance</h1>
    <p class="lead">A one-document summary of the Baddi site for procurement, partners and regulators — leadership, facility, dosage forms, water systems, warehouse, utilities and quality.</p>
    <div style="margin-top:28px;display:flex;gap:12px;flex-wrap:wrap">
      <!-- TODO: confirm with client — final company-profile.pdf -->
      <a class="btn btn--white" href="/assets/docs/company-profile.pdf" data-track="pdf" download>Download Company Profile (PDF) <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 3v12m0 0 4-4m-4 4-4-4M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"/></svg></a>
      <a class="btn btn--light" href="/contact">Request a site visit</a>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="grid-3 reveal--stagger">
      <div class="card"><div class="card__t">Site</div><p class="card__d">Baddi, Himachal Pradesh · 1,800 sq. m plot · 3,000 sq. m vertical built-up · separate personnel and material entries.</p></div>
      <div class="card"><div class="card__t">Dosage forms</div><p class="card__d">Sterile Water for Injection 5–30 ml · Normal Saline 10 ml · Respules 1–5 ml (solution &amp; suspension) · FFS ampoules.</p></div>
      <div class="card"><div class="card__t">Manufacturing</div><p class="card__d">Clear solutions and suspensions · 500–2,500 L batches · online filter integrity testing · autoclaving, filtration, SIP.</p></div>
      <div class="card"><div class="card__t">Water systems</div><p class="card__d">120 m³/day treatment · Soft 100 · Purified 60 · WFI 48 m³/day, stored ≥ 80 °C with loop circulation.</p></div>
      <div class="card"><div class="card__t">Utilities</div><p class="card__d">175 TR chilling · 240 CFM air · 2,000 kg/hr boiler · 350 KVA installed · 250 KVA gensets · 5 m³/day ETP.</p></div>
      <div class="card"><div class="card__t">Quality</div><p class="card__d">Segregated wet, instrument and micro labs · complete RM/PM/FG testing · ICH stability · GLP HPLC, UV, IR · 100% UPS.</p></div>
    </div>
    <div style="margin-top:36px;display:flex;gap:14px;flex-wrap:wrap">
      <a class="btn btn--primary" href="/about">Leadership &amp; organogram <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
      <a class="btn btn--ghost" href="/manufacturing">Manufacturing detail</a>
    </div>
  </div>
</section>
</main>
<?php include PRIV . '/inc/footer.php'; ?>
</body>
</html>
