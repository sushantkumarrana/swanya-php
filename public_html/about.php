<?php
require_once __DIR__ . '/../private/inc/bootstrap.php';
$V['TESTIMONIALS'] = testimonial_carousel();
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
<?php include PRIV . '/inc/head.php'; ?>
<title>About Swanya Pharmaceuticals | Sterile Liquids, Baddi HP</title>
<meta name="description" content="Swanya Pharmaceuticals is a sterile liquid manufacturer in Baddi, led by Chairman Sushil Garg and MD Mohit Garg. Company overview, leadership and organogram.">
<link rel="canonical" href="<?= v('SITE_URL') ?>/about">
<meta property="og:type" content="website"><meta property="og:site_name" content="Swanya Pharmaceuticals Pvt Ltd">
<meta property="og:title" content="About Swanya Pharmaceuticals | Sterile Liquids, Baddi HP">
<meta property="og:description" content="Swanya Pharmaceuticals is a sterile liquid manufacturer in Baddi, led by Chairman Sushil Garg and MD Mohit Garg. Company overview, leadership and organogram.">
<meta property="og:url" content="<?= v('SITE_URL') ?>/about"><meta property="og:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-about.jpg">
<meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="About Swanya Pharmaceuticals"><meta name="twitter:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-about.jpg">
<link rel="stylesheet" href="/css/pages/about.css">
<script type="application/ld+json">
{"@context":"https://schema.org","@graph":[
 {"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"<?= v('SITE_URL') ?>/"},{"@type":"ListItem","position":2,"name":"About Us","item":"<?= v('SITE_URL') ?>/about"}]},
 {"@type":"AboutPage","name":"About Swanya Pharmaceuticals","url":"<?= v('SITE_URL') ?>/about","about":{"@id":"<?= v('SITE_URL') ?>/#organization"}},
 {"@type":"Person","name":"Sushil Garg","jobTitle":"Chairman","worksFor":{"@id":"<?= v('SITE_URL') ?>/#organization"},"image":"<?= v('SITE_URL') ?>/assets/img/real/team/sushil-garg-chairman.png"},
 {"@type":"Person","name":"Mohit Garg","jobTitle":"Managing Director","worksFor":{"@id":"<?= v('SITE_URL') ?>/#organization"},"image":"<?= v('SITE_URL') ?>/assets/img/real/team/mohit-garg-managing-director.png"}
]}
</script>
</head>
<body>
<?php include PRIV . '/inc/header.php'; ?>
<main id="main">

<section class="phero" aria-labelledby="h1">
  <div class="phero__bg"><img src="/assets/img/real/swanya-clean-room-ffs-filling-area.png" width="525" height="423" alt="" fetchpriority="high"></div>
  <div class="phero__mesh"></div>
  <div class="container">
    <nav aria-label="Breadcrumb"><ol class="breadcrumb"><li><a href="/">Home</a></li><li aria-current="page">About Us</li></ol></nav>
    <span class="eyebrow">About Swanya</span>
    <h1 id="h1">A sterile liquid manufacturer built on compliance, quality and ethics</h1>
    <p class="lead">Swanya Pharmaceuticals Pvt Ltd manufactures Sterile Water for Injection, Normal Saline and Respules on Form-Fill-Seal lines at a purpose-built site in Baddi, Himachal Pradesh — India's largest pharmaceutical manufacturing hub.</p>
  </div>
</section>

<!-- Company overview -->
<section class="section" id="overview" aria-labelledby="ov-h">
  <div class="container overview__layout">
    <div class="reveal">
      <span class="eyebrow">Company overview</span>
      <h2 class="h-lg" id="ov-h">Small footprint, vertical build, sterile focus</h2>
      <div class="prose" style="margin-top:18px">
        <p>Swanya Pharmaceuticals occupies an <strong>1,800 sq. metre plot</strong> in Baddi with a <strong>3,000 sq. metre vertical built-up</strong> manufacturing block. Rather than spread across a large campus, the site stacks warehouse, manufacturing, filling and laboratories so that material and personnel flows are short, controlled and separately routed.</p>
        <p>The company specialises in <strong>sterile liquids filled on Form-Fill-Seal (FFS) machines</strong>: Sterile Water for Injection in 5–30 ml vials, Normal Saline in 10 ml vials, Respules from 1–5 ml for both solutions and suspensions, and FFS ampoules. Clear solutions and suspensions are manufactured in separate areas in batch sizes from 500 L to 2,500 L.</p>
        <p>Behind the filling lines sit a 120 m³/day water-treatment train with a hot WFI loop, three sterilisation routes (autoclaving, filtration and SIP), a cGMP warehouse with dedicated sampling and RLAF dispensing booths, and segregated wet, instrument and micro QC laboratories. Everything needed to release a sterile batch happens on site.</p>
        <p>Swanya works with pharmaceutical marketing companies, hospital supply chains, distributors and export partners as a <a href="/manufacturing#contract">contract manufacturer</a> of sterile liquids.</p>
      </div>
      <div class="overview__facts reveal--stagger">
        <div class="stat"><div class="stat__n">1,800<small>sq.m</small></div><div class="stat__l">Plot size</div></div>
        <div class="stat"><div class="stat__n">3,000<small>sq.m</small></div><div class="stat__l">Built-up (vertical)</div></div>
        <div class="stat"><div class="stat__n">500–2,500<small>L</small></div><div class="stat__l">Batch capacity</div></div>
        <div class="stat"><div class="stat__n">4</div><div class="stat__l">FFS dosage forms</div></div>
      </div>
    </div>
    <div class="overview__media media-zoom sticky-media reveal reveal--right"><img src="/assets/img/real/swanya-facility-exterior-baddi.jpg" width="725" height="622" alt="Swanya Pharmaceuticals plant building with company signage, Baddi" loading="lazy" decoding="async"></div>
  </div>
</section>

<!-- Leadership -->
<section class="section section--cool" id="leadership" aria-labelledby="lead-h">
  <div class="container">
    <div class="sec-head reveal"><div class="sec-head__l"><span class="eyebrow">Leadership</span><h2 class="h-lg" id="lead-h">Messages from the Chairman and the Managing Director</h2></div></div>

    <article class="leader reveal" id="chairman">
      <div class="leader__photo"><img src="/assets/img/real/team/sushil-garg-chairman.png" width="744" height="721" alt="Sushil Garg, Chairman of Swanya Pharmaceuticals" loading="lazy" decoding="async"></div>
      <div>
        <div class="leader__role">Chairman's message</div>
        <h3>Sushil Garg</h3>
        <div class="leader__msg">
          <p>At Swanya Pharmaceuticals, our foundation is built upon an unyielding commitment to regulatory compliance, uncompromising quality, and the highest standards of ethics. We recognise that our licence to operate is a privilege earned through consistent transparency and rigorous adherence to global healthcare standards.</p>
          <p class="pull">"We believe that healthcare is a fundamental right, not a privilege. Our work is about restoring hope and enhancing the quality of life for families."</p>
        </div>
        <div class="leader__sig">Sushil Garg · Chairman</div>
      </div>
    </article>

    <article class="leader leader--flip reveal" id="director">
      <div class="leader__photo"><img src="/assets/img/real/team/mohit-garg-managing-director.png" width="687" height="871" alt="Mohit Garg, Managing Director of Swanya Pharmaceuticals" loading="lazy" decoding="async"></div>
      <div>
        <div class="leader__role">Director's message</div>
        <h3>Mohit Garg</h3>
        <div class="leader__msg">
          <p>In the pharmaceutical industry, efficacy and safety are the ultimate measures of value. As Director, my primary focus is to ensure that Swanya Pharmaceuticals bridges the gap between scientific innovation and flawless execution, maintaining an uncompromised standard of quality across our entire ecosystem.</p>
        </div>
        <div class="leader__sig">Mohit Garg · Managing Director</div>
      </div>
    </article>
  </div>
</section>

<!-- Certifications -->
<section class="section" id="certifications" aria-labelledby="cert-h">
  <div class="container">
    <div class="sec-head sec-head--center reveal"><div class="sec-head__l"><span class="eyebrow">Certifications &amp; compliance</span><h2 class="h-lg" id="cert-h">Operated to cGMP and GLP practice</h2><p class="lead">The facility, water systems and laboratories are run to current Good Manufacturing Practice; the QC laboratories use GLP-compliant instruments and software. Certificates are shared with qualified partners on request.</p></div></div>
    <!-- TODO: confirm with client — exact certification list (WHO-GMP? ISO? State Drugs Licence). No badges added until confirmed. -->
    <div class="grid-3 reveal--stagger">
      <div class="card"><div class="card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3 4 6v6c0 5 3.5 8 8 9 4.5-1 8-4 8-9V6z"/><path d="m9 12 2 2 4-4"/></svg></div><div class="card__t">cGMP manufacturing</div><p class="card__d">Segregated flows, controlled areas, validated sterilisation and complete batch documentation.</p></div>
      <div class="card"><div class="card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 3v7l-5 9a1 1 0 0 0 .9 1.5h14.2a1 1 0 0 0 .9-1.5l-5-9V3M8 3h8"/></svg></div><div class="card__t">GLP-compliant laboratories</div><p class="card__d">HPLC, UV and IR with compliant software; wet, instrument and micro labs; 100% UPS backup.</p></div>
      <div class="card"><div class="card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div><div class="card__t">ICH stability</div><p class="card__d">Stability studies for all target markets as per ICH requirements.</p></div>
    </div>
    <p class="todo" style="margin-top:20px;display:inline-block">TODO: add certificate list &amp; licence numbers once confirmed by client</p>
  </div>
</section>

<!-- Organogram -->
<section class="section section--surface" id="organogram" aria-labelledby="org-h">
  <div class="container">
    <div class="sec-head sec-head--center reveal"><div class="sec-head__l"><span class="eyebrow">Site organogram</span><h2 class="h-lg" id="org-h">Named owners for every function</h2><p class="lead">Operations, Quality Assurance, Quality Control, Engineering and Human Resources each report to the Managing Director.</p></div></div>
    <div class="org reveal" role="tree" aria-label="Site organogram">
      <div class="org__node org__node--md" role="treeitem" aria-expanded="true"><div class="org__av"><img src="/assets/img/real/team/mohit-garg-managing-director.png" width="92" height="92" alt="" loading="lazy"></div><div><div class="org__name">Mohit Garg</div><div class="org__role">Managing Director</div></div></div>
      <div class="org__stem" aria-hidden="true"></div>
      <ul class="org__row" role="group">
        <li role="treeitem" style="--d:.1s"><div class="org__node"><div class="org__av"><img src="/assets/img/real/team/nasir-ansari-head-operations.jpg" width="92" height="92" alt="" loading="lazy"></div><div><div class="org__name">Nasir Ansari</div><div class="org__role">Head, Operations</div></div></div></li>
        <li role="treeitem" style="--d:.3s"><div class="org__node"><div class="org__av"><img src="/assets/img/real/team/rokee-kumar-head-qa.png" width="92" height="92" alt="" loading="lazy"></div><div><div class="org__name">Rokee Kumar</div><div class="org__role">Head, QA</div></div></div></li>
        <li role="treeitem" style="--d:.5s"><div class="org__node"><div class="org__av"><img src="/assets/img/real/team/fatehyab-ali-head-qc.png" width="92" height="92" alt="" loading="lazy"></div><div><div class="org__name">Fatehyab Ali</div><div class="org__role">Head, QC</div></div></div></li>
        <li role="treeitem" style="--d:.7s"><div class="org__node"><div class="org__av"><img src="/assets/img/real/team/parminder-singh-head-engineering.png" width="92" height="92" alt="" loading="lazy"></div><div><div class="org__name">Parminder Singh</div><div class="org__role">Head, Engineering</div></div></div></li>
        <li role="treeitem" style="--d:.9s"><div class="org__node"><div class="org__av"><img src="/assets/img/real/team/mahesh-kumar-head-hr.png" width="92" height="92" alt="" loading="lazy"></div><div><div class="org__name">Mahesh Kumar</div><div class="org__role">Head, HR</div></div></div></li>
      </ul>
    </div>
    <div class="org__legend"><span>Direct reporting to the Managing Director</span></div>
  </div>
</section>

<!-- Testimonials -->
<section class="section" id="testimonials" aria-labelledby="test-h">
  <div class="container">
    <div class="sec-head reveal"><div class="sec-head__l"><span class="eyebrow">Testimonials</span><h2 class="h-lg" id="test-h">What partners say</h2></div></div>
    <!-- TODO: confirm with client — real testimonials. No names fabricated. -->
    <div class="reveal"><?= v('TESTIMONIALS') ?></div>
    <div style="margin-top:36px;display:flex;gap:14px;flex-wrap:wrap">
      <a class="btn btn--primary" href="/manufacturing">See manufacturing capabilities <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
      <a class="btn btn--ghost" href="/contact">Contact Swanya</a>
    </div>
  </div>
</section>

</main>
<?php include PRIV . '/inc/footer.php'; ?>
</body>
</html>
