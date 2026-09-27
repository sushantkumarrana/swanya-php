<?php
require_once __DIR__ . '/private/inc/bootstrap.php';
$V['TESTIMONIALS'] = testimonial_carousel();
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
<?php include PRIV . '/inc/head.php'; ?>
<title>Sterile Water for Injection & FFS Vial Manufacturer | Swanya</title>
<meta name="description" content="Swanya Pharmaceuticals, Baddi: sterile liquid manufacturer of Sterile Water for Injection, Normal Saline and Respules on FFS lines. Contract manufacturing.">
<link rel="canonical" href="<?= v('SITE_URL') ?>/">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Swanya Pharmaceuticals Pvt Ltd">
<meta property="og:title" content="Sterile Water for Injection & FFS Vial Manufacturer | Swanya">
<meta property="og:description" content="Swanya Pharmaceuticals, Baddi: sterile liquid manufacturer of Sterile Water for Injection, Normal Saline and Respules on FFS lines. Contract manufacturing.">
<meta property="og:url" content="<?= v('SITE_URL') ?>/">
<meta property="og:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-home.jpg">
<meta property="og:image:width" content="1200"><meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Sterile Water for Injection & FFS Vial Manufacturer | Swanya">
<meta name="twitter:description" content="Sterile liquid pharmaceutical manufacturing in Baddi, Himachal Pradesh — SWFI, Normal Saline, Respules and FFS ampoules.">
<meta name="twitter:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-home.jpg">
<link rel="preload" as="image" href="/assets/img/generated/swanya-ffs-vial-filling-line-hero-960.webp" imagesrcset="/assets/img/generated/swanya-ffs-vial-filling-line-hero-480.webp 480w, /assets/img/generated/swanya-ffs-vial-filling-line-hero-960.webp 960w, /assets/img/generated/swanya-ffs-vial-filling-line-hero-1600.webp 1600w" imagesizes="100vw">
<link rel="stylesheet" href="/css/pages/home.css">
<link rel="stylesheet" href="/css/diagram.css">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["Organization", "LocalBusiness"],
      "@id": "<?= v('SITE_URL') ?>/#organization",
      "name": "Swanya Pharmaceuticals Pvt Ltd",
      "url": "<?= v('SITE_URL') ?>/",
      "logo": "<?= v('SITE_URL') ?>/assets/img/logo.jpg",
      "image": "<?= v('SITE_URL') ?>/assets/img/real/swanya-facility-exterior-baddi.jpg",
      "description": "Sterile liquid pharmaceutical manufacturer producing Sterile Water for Injection, Normal Saline solutions and Respules on Form-Fill-Seal lines in Baddi, Himachal Pradesh, India.",
      "telephone": "<?= v('PHONE_TEL') ?>",
      "email": "<?= v('EMAIL') ?>",
      "address": { "@type": "PostalAddress", "addressLocality": "Baddi", "addressRegion": "Himachal Pradesh", "postalCode": "173205", "addressCountry": "IN" },
      "geo": { "@type": "GeoCoordinates", "latitude": 30.9578, "longitude": 76.7914 },
      "founder": [{ "@type": "Person", "name": "Sushil Garg", "jobTitle": "Chairman" }],
      "employee": [{ "@type": "Person", "name": "Mohit Garg", "jobTitle": "Managing Director" }],
      "sameAs": [],
      "openingHoursSpecification": { "@type": "OpeningHoursSpecification", "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"], "opens": "09:00", "closes": "18:00" }
    },
    { "@type": "WebSite", "@id": "<?= v('SITE_URL') ?>/#website", "url": "<?= v('SITE_URL') ?>/", "name": "Swanya Pharmaceuticals", "publisher": { "@id": "<?= v('SITE_URL') ?>/#organization" } }
  ]
}
</script>
</head>
<body data-autopopup="30000">
<?php include PRIV . '/inc/header.php'; ?>

<main id="main">

<!-- ================= HERO ================= -->
<section class="hero" aria-labelledby="hero-h1">
  <div class="hero__media" data-parallax="0.25">
    <picture>
      <source type="image/webp" srcset="/assets/img/generated/swanya-ffs-vial-filling-line-hero-480.webp 480w, /assets/img/generated/swanya-ffs-vial-filling-line-hero-960.webp 960w, /assets/img/generated/swanya-ffs-vial-filling-line-hero-1600.webp 1600w" sizes="100vw">
      <img src="/assets/img/generated/swanya-ffs-vial-filling-line-hero-1600.jpg" srcset="/assets/img/generated/swanya-ffs-vial-filling-line-hero-480.jpg 480w, /assets/img/generated/swanya-ffs-vial-filling-line-hero-960.jpg 960w, /assets/img/generated/swanya-ffs-vial-filling-line-hero-1600.jpg 1600w" sizes="100vw" width="1600" height="900" alt="Form-Fill-Seal sterile vial filling line inside a blue-lit pharmaceutical clean room" fetchpriority="high" decoding="async">
    </picture>
  </div>
  <div class="hero__scrim"></div>
  <div class="hero__mesh"></div>
  <div class="container hero__inner">
    <span class="hero__badge"><i class="pulse"></i> Baddi, Himachal Pradesh · Sterile liquids</span>
    <h1 id="hero-h1">Sterile liquid pharmaceutical manufacturing, <span class="accent">built on FFS precision.</span></h1>
    <p class="hero__sub">Swanya Pharmaceuticals is a sterile water for injection, normal saline and respules manufacturer in Baddi — a purpose-built Form-Fill-Seal facility offering contract manufacturing to pharma partners, hospital supply chains and distributors across India.</p>
    <div class="hero__actions">
      <a class="btn btn--primary" href="/products">Explore Products <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
      <a class="btn btn--light" href="/manufacturing#contract">Contract Manufacturing</a>
    </div>
    <div class="hero__stats reveal--stagger">
      <div class="hero__stat"><div class="k"><span data-count="1800">1,800</span><small>sq.m</small></div><div class="v">Plot area</div></div>
      <div class="hero__stat"><div class="k"><span data-count="3000">3,000</span><small>sq.m</small></div><div class="v">Built-up, vertical</div></div>
      <div class="hero__stat"><div class="k"><span data-count="2500">2,500</span><small>L</small></div><div class="v">Max batch size</div></div>
      <div class="hero__stat"><div class="k"><span data-count="48">48</span><small>m³/day</small></div><div class="v">WFI generation</div></div>
    </div>
  </div>
  <div class="hero__cue" aria-hidden="true"><div class="track"></div>Scroll</div>
</section>

<!-- ================= TRUST STRIP ================= -->
<section class="trust" aria-label="Key facts">
  <div class="container">
    <div class="trust__row reveal--stagger">
      <div class="trust__item"><div class="trust__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3 4 6v6c0 5 3.5 8 8 9 4.5-1 8-4 8-9V6z"/><path d="m9 12 2 2 4-4"/></svg></div><div><div class="trust__t">cGMP sterile facility</div><div class="trust__d">Separate personnel &amp; material entry</div></div></div>
      <div class="trust__item"><div class="trust__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 8h8M8 12h8M8 16h5"/></svg></div><div><div class="trust__t">Online filter integrity testing</div><div class="trust__d">Every sterilising filter, every batch</div></div></div>
      <div class="trust__item"><div class="trust__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 3v7l-5 9a1 1 0 0 0 .9 1.5h14.2a1 1 0 0 0 .9-1.5l-5-9V3M8 3h8"/></svg></div><div><div class="trust__t">In-house QC labs</div><div class="trust__d">Wet, instrument &amp; micro labs; HPLC, UV, IR</div></div></div>
      <div class="trust__item"><div class="trust__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3s6 7 6 11a6 6 0 0 1-12 0c0-4 6-11 6-11z"/></svg></div><div><div class="trust__t">Multi-stage water systems</div><div class="trust__d">Purified Water 60 m³/day · WFI 48 m³/day</div></div></div>
    </div>
  </div>
</section>

<!-- ================= WELCOME / INTRO ================= -->
<section class="section" id="about" aria-labelledby="about-h">
  <div class="container welcome__layout">
    <div class="welcome__head reveal">
      <span class="eyebrow">Welcome to Swanya</span>
      <h2 class="h-lg" id="about-h">A sterile-liquid specialist in the heart of India's pharma corridor</h2>
      <p class="lead">Swanya Pharmaceuticals Pvt Ltd operates a vertically built, 3,000 sq. m sterile manufacturing site on an 1,800 sq. m plot in Baddi, Himachal Pradesh. We focus on one thing and do it well: clear solutions and suspensions filled on Form-Fill-Seal machines — Sterile Water for Injection, Normal Saline and Respules in single-use vials with in-built twist-off caps.</p>
      <ul class="welcome__points">
        <li class="welcome__point"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg><div><b>Form-Fill-Seal technology</b><span>Vials are formed, filled and sealed in one continuous, closed process — minimal human intervention, maximal sterility assurance.</span></div></li>
        <li class="welcome__point"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg><div><b>500 L – 2,500 L batch capacity</b><span>Dedicated areas for clear solutions and for suspensions, with sterilisation by autoclaving, filtration and Sterilization-in-Place.</span></div></li>
        <li class="welcome__point"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6 9 17l-5-5"/></svg><div><b>Quality led from the top</b><span>Chairman Sushil Garg and Managing Director Mohit Garg lead a site organised around regulatory compliance, ethics and flawless execution.</span></div></li>
      </ul>
      <blockquote class="quote">
        <p>"We believe that healthcare is a fundamental right, not a privilege. Our work is about restoring hope and enhancing the quality of life for families."</p>
        <footer><b>Sushil Garg</b> · Chairman, Swanya Pharmaceuticals</footer>
      </blockquote>
      <div class="welcome__cta">
        <a class="btn btn--primary" href="/about">About Swanya <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
        <a class="link-arrow" href="/about#leadership">Meet the leadership <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
      </div>
    </div>
    <div class="welcome__media reveal reveal--right">
      <div class="welcome__img media-zoom"><img src="/assets/img/real/swanya-facility-exterior-baddi.jpg" width="725" height="622" alt="Swanya Pharmaceuticals manufacturing facility exterior in Baddi, Himachal Pradesh" loading="lazy" decoding="async"></div>
      <div class="welcome__inset"><img src="/assets/img/real/swanya-clean-room-corridor.jpg" width="660" height="655" alt="Clean room corridor inside the Swanya sterile manufacturing block" loading="lazy" decoding="async"></div>
      <div class="welcome__tag"><div class="n">Baddi, HP</div><div class="l">Est. sterile site</div></div>
    </div>
  </div>
</section>

<!-- ================= FEATURED PRODUCTS ================= -->
<section class="section section--surface" id="products" aria-labelledby="prod-h">
  <div class="container">
    <div class="sec-head reveal">
      <div class="sec-head__l">
        <span class="eyebrow">Featured products</span>
        <h2 class="h-lg" id="prod-h">Sterile liquids in single-use FFS vials</h2>
        <p class="lead">Every product below is manufactured on Form-Fill-Seal lines with in-built twist-off caps — no glass, no separate stopper, no particulate risk from ampoule opening.</p>
      </div>
      <a class="btn btn--ghost" href="/products">All products <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
    </div>
    <div class="pgrid reveal--stagger">
      <a class="pcard" href="/products/sterile-water-for-injection">
        <div class="pcard__media"><img src="/assets/img/real/swanya-ffs-vials-sterile-water-injection.png" width="1044" height="661" alt="Sterile Water for Injection single-use FFS vials with twist-off caps" loading="lazy" decoding="async"><span class="pcard__badge">SVP</span></div>
        <div class="pcard__body"><div class="pcard__tag">5 · 10 · 20 · 25 · 30 ml</div><h3 class="pcard__t">Sterile Water for Injection</h3><p class="pcard__d">Single-use vials with in-built twist-off cap, for reconstitution and dilution of parenteral drugs.</p><div class="pcard__foot"><span class="link-arrow">View specifications <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></span></div></div>
      </a>
      <a class="pcard" href="/products/normal-saline-solution">
        <div class="pcard__media"><img src="/assets/img/real/swanya-ffs-vials-sterile-water-injection.png" width="1044" height="661" alt="Normal Saline 0.9% sodium chloride 10 ml FFS vials" loading="lazy" decoding="async"><span class="pcard__badge">SVP</span></div>
        <div class="pcard__body"><div class="pcard__tag">10 ml</div><h3 class="pcard__t">Normal Saline Solution</h3><p class="pcard__d">Sodium chloride solution in 10 ml single-use vials with in-built twist-off cap.</p><div class="pcard__foot"><span class="link-arrow">View specifications <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></span></div></div>
      </a>
      <a class="pcard" href="/products/respules">
        <div class="pcard__media"><img src="/assets/img/real/swanya-ffs-respules-vial-strips.png" width="1045" height="685" alt="Respules 1–5 ml solution and suspension vial strips with twist-off caps" loading="lazy" decoding="async"><span class="pcard__badge">Respules</span></div>
        <div class="pcard__body"><div class="pcard__tag">1 – 5 ml</div><h3 class="pcard__t">Respules</h3><p class="pcard__d">Solution and suspension vials with twist-off caps for nebulisation, filled in a dedicated suspension area.</p><div class="pcard__foot"><span class="link-arrow">View specifications <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></span></div></div>
      </a>
      <a class="pcard" href="/products/ffs-ampoules">
        <div class="pcard__media"><img src="/assets/img/real/swanya-ffs-respules-vial-strips.png" width="1045" height="685" alt="Form-Fill-Seal plastic ampoules" loading="lazy" decoding="async"><span class="pcard__badge">FFS</span></div>
        <div class="pcard__body"><div class="pcard__tag">Form-Fill-Seal</div><h3 class="pcard__t">FFS Ampoules</h3><p class="pcard__d">Break-off plastic ampoules formed, filled and sealed in a single closed cycle.</p><div class="pcard__foot"><span class="link-arrow">View specifications <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></span></div></div>
      </a>
    </div>
  </div>
</section>

<!-- ================= MANUFACTURING CAPABILITIES ================= -->
<section class="section section--navy caps" id="capabilities" aria-labelledby="cap-h">
  <div class="caps__bg"><img src="/assets/img/real/swanya-wfi-water-system-skid.jpg" width="1114" height="742" alt="" loading="lazy" decoding="async"></div>
  <div class="container">
    <div class="caps__layout">
      <div class="caps__copy reveal">
        <span class="eyebrow">Manufacturing capabilities</span>
        <h2 class="h-lg" id="cap-h">Water is our raw material. We treat it accordingly.</h2>
        <p>Sterile liquids are only as good as the water they are made from. Swanya runs a 120 m³/day water-treatment train — soft water, multi-stage Purified Water and a hot WFI loop — feeding FFS lines that form, fill and seal every vial in one closed cycle.</p>
        <ul class="caps__list">
          <li class="caps__item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 7h16v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zM4 11h16"/></svg><div><b>Batch capacity 500 – 2,500 L</b><span>Clear solutions and suspensions, separate handling areas</span></div></li>
          <li class="caps__item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3 4 6v6c0 5 3.5 8 8 9 4.5-1 8-4 8-9V6z"/></svg><div><b>Autoclaving · Filtration · SIP</b><span>Three validated sterilisation routes with online filter integrity testing</span></div></li>
          <li class="caps__item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 12c2-3 4-3 6 0s4 3 6 0 4-3 6 0"/></svg><div><b>Purified Water + WFI systems</b><span>Ozone, UV, RO, EDI train; WFI stored and looped at ≥ 80 °C</span></div></li>
        </ul>
        <div style="margin-top:28px"><a class="btn btn--white" href="/manufacturing">Full manufacturing capabilities <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a></div>
      </div>
      <div class="caps__panel glass glass--dark reveal reveal--right">
        <div class="caps__panel-head"><b>Purified water treatment process</b><a class="link-arrow" href="/manufacturing#water-systems">Both systems, full detail <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a></div>
        <div class="diagram diagram--dark" data-diagram="purified" data-compact>
          <ol class="diagram__steps" aria-label="Purified water treatment steps">
            <li>Feed water</li><li>Ozone treatment</li><li>UV</li><li>Multigrade filter</li><li>Softener</li><li>RO</li><li>EDI</li><li>UV</li><li>Purified water</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="caps__stats reveal--stagger">
      <div class="caps__stat"><div class="n"><span data-count="120">120</span><small>m³/day</small></div><div class="l">Total water treatment</div></div>
      <div class="caps__stat"><div class="n"><span data-count="175">175</span><small>TR</small></div><div class="l">Chilling capacity</div></div>
      <div class="caps__stat"><div class="n"><span data-count="350">350</span><small>KVA</small></div><div class="l">Installed power · 250 KVA gensets</div></div>
      <div class="caps__stat"><div class="n"><span data-count="2000">2,000</span><small>kg/hr</small></div><div class="l">Boiler steam output</div></div>
    </div>
  </div>
</section>

<!-- ================= WHY CHOOSE US ================= -->
<section class="section" id="why" aria-labelledby="why-h">
  <div class="container">
    <div class="sec-head sec-head--center reveal">
      <div class="sec-head__l">
        <span class="eyebrow">Why choose Swanya</span>
        <h2 class="h-lg" id="why-h">Built for partners who audit before they order</h2>
        <p class="lead">Procurement heads and QA evaluators look past the brochure. Here is what they find on site.</p>
      </div>
    </div>
    <div class="why__grid reveal--stagger">
      <div class="why__cell"><div class="card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 20V4h6v16M14 20V9h6v11M2 20h20"/></svg></div><div class="why__n">01</div><h3 class="why__t">Segregated flows by design</h3><p class="why__d">Separate entries for personnel and material movement, and a separate area for handling suspensions, keep cross-contamination risk out of the process.</p></div>
      <div class="why__cell"><div class="card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 5h16l-6 8v6l-4-2v-4z"/></svg></div><div class="why__n">02</div><h3 class="why__t">Online filter integrity testing</h3><p class="why__d">Sterilising-grade filters are integrity tested in line — objective evidence for every sterile filtration step, on every batch.</p></div>
      <div class="why__cell"><div class="card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3s6 7 6 11a6 6 0 0 1-12 0c0-4 6-11 6-11z"/></svg></div><div class="why__n">03</div><h3 class="why__t">Hot WFI, always circulating</h3><p class="why__d">WFI is stored and looped at 80 °C and above, with vent filtration and routine conductivity, pH, pyrogen and microbial limit testing.</p></div>
      <div class="why__cell"><div class="card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 3v7l-5 9a1 1 0 0 0 .9 1.5h14.2a1 1 0 0 0 .9-1.5l-5-9V3M8 3h8"/></svg></div><div class="why__n">04</div><h3 class="why__t">Complete in-house QC</h3><p class="why__d">Segregated wet, instrument and micro labs test raw materials, packaging materials and finished goods on GLP-compliant HPLC, UV and IR systems with 100% UPS backup.</p></div>
      <div class="why__cell"><div class="card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div><div class="why__n">05</div><h3 class="why__t">ICH stability for every market</h3><p class="why__d">Stability studies are run per ICH requirements for all target markets, so registration dossiers are supported from day one.</p></div>
      <div class="why__cell"><div class="card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M3 12h18M8 7V5h8v2"/></svg></div><div class="why__n">06</div><h3 class="why__t">cGMP warehouse discipline</h3><p class="why__d">Controlled storage, a separate sampling booth for APIs and excipients, RLAF dispensing booths and strict FEFO/FIFO consumption.</p></div>
    </div>
  </div>
</section>

<!-- ================= CERTIFICATIONS ================= -->
<section class="section section--cool section--tight" id="certifications" aria-labelledby="cert-h">
  <div class="container">
    <div class="sec-head sec-head--center reveal">
      <div class="sec-head__l">
        <span class="eyebrow">Certifications &amp; compliance</span>
        <h2 class="h-lg" id="cert-h">Manufactured under current GMP</h2>
        <p class="lead">Our facility, water systems and QC laboratories are operated to cGMP and GLP practice. Certification documents are available to qualified partners on request.</p>
      </div>
    </div>
    <div class="certs reveal--stagger">
      <!-- TODO: confirm with client — exact certification list (WHO-GMP? ISO 9001? State Drugs Licence number?). Cards describe practice, not certificates, until confirmed. -->
      <article class="cert"><div class="cert__media"><picture><source type="image/webp" srcset="/assets/img/generated/stock-cgmp-sterile-operator-480.webp 480w, /assets/img/generated/stock-cgmp-sterile-operator-960.webp 960w" sizes="(min-width:768px) 33vw, 100vw"><img src="/assets/img/generated/stock-cgmp-sterile-operator-960.jpg" srcset="/assets/img/generated/stock-cgmp-sterile-operator-480.jpg 480w, /assets/img/generated/stock-cgmp-sterile-operator-960.jpg 960w" sizes="(min-width:768px) 33vw, 100vw" width="960" height="640" alt="Gowned operator working at a sterile manufacturing vessel under cGMP conditions" loading="lazy" decoding="async"></picture></div><div class="cert__body"><h3 class="cert__t"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3 4 6v6c0 5 3.5 8 8 9 4.5-1 8-4 8-9V6z"/><path d="m9 12 2 2 4-4"/></svg>cGMP manufacturing practice</h3><p class="cert__d">Segregated personnel and material flows, validated sterilisation (autoclaving, filtration, SIP) and complete batch documentation on every lot.</p></div></article>
      <article class="cert"><div class="cert__media"><picture><source type="image/webp" srcset="/assets/img/generated/stock-glp-lab-instrument-readings-480.webp 480w, /assets/img/generated/stock-glp-lab-instrument-readings-960.webp 960w" sizes="(min-width:768px) 33vw, 100vw"><img src="/assets/img/generated/stock-glp-lab-instrument-readings-960.jpg" srcset="/assets/img/generated/stock-glp-lab-instrument-readings-480.jpg 480w, /assets/img/generated/stock-glp-lab-instrument-readings-960.jpg 960w" sizes="(min-width:768px) 33vw, 100vw" width="960" height="640" alt="Analyst reviewing instrument readings in a GLP-compliant pharmaceutical laboratory" loading="lazy" decoding="async"></picture></div><div class="cert__body"><h3 class="cert__t"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 3v7l-5 9a1 1 0 0 0 .9 1.5h14.2a1 1 0 0 0 .9-1.5l-5-9V3M8 3h8"/></svg>GLP-compliant QC laboratories</h3><p class="cert__d">Segregated wet, instrument and micro labs with HPLC, UV and IR on compliant software; complete RM, PM and FG testing in-house with 100% UPS backup.</p></div></article>
      <article class="cert"><div class="cert__media"><picture><source type="image/webp" srcset="/assets/img/generated/stock-clean-room-stainless-equipment-480.webp 480w, /assets/img/generated/stock-clean-room-stainless-equipment-960.webp 960w" sizes="(min-width:768px) 33vw, 100vw"><img src="/assets/img/generated/stock-clean-room-stainless-equipment-960.jpg" srcset="/assets/img/generated/stock-clean-room-stainless-equipment-480.jpg 480w, /assets/img/generated/stock-clean-room-stainless-equipment-960.jpg 960w" sizes="(min-width:768px) 33vw, 100vw" width="960" height="640" alt="Stainless steel process equipment inside a pharmaceutical clean room" loading="lazy" decoding="async"></picture></div><div class="cert__body"><h3 class="cert__t"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>ICH stability programme</h3><p class="cert__d">Stability studies for all target markets per ICH requirements, run in validated chambers alongside audit-ready water-system and environmental monitoring.</p></div></article>
    </div>
  </div>
</section>

<!-- ================= CLIENTS / TESTIMONIALS ================= -->
<section class="section section--flush-bottom" id="testimonials" aria-labelledby="test-h">
  <div class="container">
    <div class="sec-head reveal">
      <div class="sec-head__l">
        <span class="eyebrow">Clients &amp; testimonials</span>
        <h2 class="h-lg" id="test-h">Trusted by partners who need sterile liquids delivered right</h2>
      </div>
    </div>
    <!-- TODO: confirm with client — attach real names / company logos to data/testimonials.json -->
    <div class="reveal"><?= v('TESTIMONIALS') ?></div>
  </div>
</section>

<!-- ================= CONTACT CTA ================= -->
<section class="section section--flush-top" id="cta" aria-labelledby="cta-h">
  <div class="container">
    <div class="cta__box reveal reveal--scale">
      <div class="cta__inner">
        <div>
          <span class="eyebrow">Work with Swanya</span>
          <h2 class="h-lg" id="cta-h">Need a sterile-liquid manufacturing partner in Baddi?</h2>
          <p>Send us your product list, volumes and target markets. Our team will respond with feasibility, lead times and a site-visit invitation.</p>
          <div class="cta__aud"><span>Contract manufacturing</span><span>Loan licence</span><span>Hospital supply</span><span>Distribution</span><span>Export registration</span></div>
        </div>
        <div class="cta__actions">
          <a class="btn btn--white" href="/contact#enquiry" data-modal="enquiry">Request a quote <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
          <a class="btn btn--light" href="<?= v('WA_LINK') ?>" target="_blank" rel="noopener" data-track="whatsapp">Chat on WhatsApp</a>
          <div class="cta__contact">
            <a href="tel:<?= v('PHONE_TEL') ?>" data-track="phone"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Z"/></svg><?= v('PHONE') ?></a>
            <a href="mailto:<?= v('EMAIL') ?>" data-track="email"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg><?= v('EMAIL') ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</main>

<?php include PRIV . '/inc/footer.php'; ?>
<script type="module">import { initDiagrams } from '/js/diagram.js'; initDiagrams();</script>
</body>
</html>
