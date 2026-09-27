<?php
require_once __DIR__ . '/../private/inc/bootstrap.php';
$V['JOB_CARDS'] = job_cards(); $V['JOBS_LD'] = jobs_ld(); $V['JOB_OPTIONS'] = job_options();
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
<?php include PRIV . '/inc/head.php'; ?>
<title>Careers at Swanya Pharmaceuticals, Baddi | Openings</title>
<meta name="description" content="Careers at Swanya Pharmaceuticals, sterile liquid manufacturer in Baddi: openings in production, QA, QC and engineering, plus an online CV application form.">
<link rel="canonical" href="<?= v('SITE_URL') ?>/careers">
<meta property="og:type" content="website"><meta property="og:site_name" content="Swanya Pharmaceuticals Pvt Ltd">
<meta property="og:title" content="Careers at Swanya Pharmaceuticals, Baddi"><meta property="og:description" content="Careers at Swanya Pharmaceuticals, sterile liquid manufacturer in Baddi: openings in production, QA, QC and engineering, plus an online CV application form.">
<meta property="og:url" content="<?= v('SITE_URL') ?>/careers"><meta property="og:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-careers.jpg">
<meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Careers | Swanya"><meta name="twitter:image" content="<?= v('SITE_URL') ?>/assets/img/og/og-careers.jpg">
<link rel="stylesheet" href="/css/pages/contact.css">
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"<?= v('SITE_URL') ?>/"},{"@type":"ListItem","position":2,"name":"Careers","item":"<?= v('SITE_URL') ?>/careers"}]}</script>
<script type="application/ld+json"><?= v('JOBS_LD') ?></script>
</head>
<body>
<?php include PRIV . '/inc/header.php'; ?>
<main id="main">
<section class="phero" aria-labelledby="h1">
  <div class="phero__bg"><img src="/assets/img/real/swanya-qc-wet-lab-bench.jpg" width="1397" height="412" alt="" fetchpriority="high"></div>
  <div class="phero__mesh"></div>
  <div class="container">
    <nav aria-label="Breadcrumb"><ol class="breadcrumb"><li><a href="/">Home</a></li><li aria-current="page">Careers</li></ol></nav>
    <span class="eyebrow">Careers</span>
    <h1 id="h1">Build sterile medicines in Baddi</h1>
    <p class="lead">Swanya is a young, focused site where production, quality and engineering teams work within metres of each other. If you want to learn Form-Fill-Seal manufacturing and water-system operation from the inside, start here.</p>
  </div>
</section>

<section class="section" aria-labelledby="life-h">
  <div class="container">
    <div class="sec-head reveal"><div class="sec-head__l"><span class="eyebrow">Life at Swanya</span><h2 class="h-lg" id="life-h">Small site, serious work</h2></div></div>
    <div class="life reveal--stagger">
      <div class="card"><div class="card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 3v7l-5 9a1 1 0 0 0 .9 1.5h14.2a1 1 0 0 0 .9-1.5l-5-9V3M8 3h8"/></svg></div><div class="card__t">Learn the whole process</div><p class="card__d">Vertical building, short flows: a QC analyst sees the filling line; an engineer sees the WFI loop. Cross-training is normal.</p></div>
      <div class="card"><div class="card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3 4 6v6c0 5 3.5 8 8 9 4.5-1 8-4 8-9V6z"/></svg></div><div class="card__t">Quality-first culture</div><p class="card__d">Compliance is the licence to operate here. Documentation, hygiene and honest reporting are expected — and respected.</p></div>
      <div class="card"><div class="card__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s7-6.2 7-11.5A7 7 0 0 0 5 9.5C5 14.8 12 21 12 21Z"/><circle cx="12" cy="9.5" r="2.5"/></svg></div><div class="card__t">Baddi, Himachal Pradesh</div><p class="card__d">India's largest pharma cluster, an hour from Chandigarh — a career market as much as a workplace.</p></div>
    </div>
  </div>
</section>

<section class="section section--cool" id="openings" aria-labelledby="open-h">
  <div class="container">
    <div class="sec-head reveal"><div class="sec-head__l"><span class="eyebrow">Current openings</span><h2 class="h-lg" id="open-h">Open positions</h2><p class="lead">Openings are updated by the HR team. Roles without a match? Send a speculative application below.</p></div></div>
    <!-- TODO: confirm with client — real openings; data/jobs.json holds sample entries -->
    <div class="jobs reveal--stagger"><?= v('JOB_CARDS') ?></div>
  </div>
</section>

<section class="section" id="apply" aria-labelledby="apply-h">
  <div class="container contact__layout">
    <div class="contact__card reveal">
      <h2 id="apply-h">Apply</h2>
      <p>Attach your CV as PDF or Word (max 5 MB). Fields marked <span class="req">*</span> are required.</p>
      <form class="form" id="apply-form" action="/api/careers/apply" method="post" enctype="multipart/form-data" novalidate>
        <div class="form__row">
          <div class="field"><label for="a-name">Full name <span class="req">*</span></label><input id="a-name" name="name" type="text" required autocomplete="name" maxlength="100"><div class="err" aria-live="polite"></div></div>
          <div class="field"><label for="a-email">Email <span class="req">*</span></label><input id="a-email" name="email" type="email" required autocomplete="email" maxlength="160"><div class="err" aria-live="polite"></div></div>
        </div>
        <div class="form__row">
          <div class="field"><label for="a-phone">Phone <span class="req">*</span></label><input id="a-phone" name="phone" type="tel" required inputmode="tel" maxlength="20"><div class="err" aria-live="polite"></div></div>
          <div class="field"><label for="a-role">Position <span class="req">*</span></label><select id="a-role" name="position" required><option value="">Select…</option><?= v('JOB_OPTIONS') ?><option>Speculative application</option></select><div class="err" aria-live="polite"></div></div>
        </div>
        <div class="form__row">
          <div class="field"><label for="a-exp">Years of experience</label><input id="a-exp" name="experience" type="number" min="0" max="50" step="0.5"><div class="err"></div></div>
          <div class="field"><label for="a-loc">Current location</label><input id="a-loc" name="location" type="text" maxlength="100"><div class="err"></div></div>
        </div>
        <div class="field"><label for="a-msg">Cover note</label><textarea id="a-msg" name="message" maxlength="2000" placeholder="A few lines on your background and why Swanya"></textarea><div class="err"></div></div>
        <div class="field"><label for="a-cv">CV / résumé <span class="req">*</span></label>
          <div class="upload" id="upload"><label class="upload__lbl" for="a-cv"><b>Choose a file</b> or drag it here<div class="hint">PDF, DOC or DOCX · up to 5 MB</div><div class="upload__file" id="a-cv-name"></div></label><input id="a-cv" name="cv" type="file" required accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"></div>
          <div class="err" aria-live="polite"></div></div>
        <div class="field" style="flex-direction:row;display:flex;gap:10px;align-items:flex-start"><input id="a-consent" name="consent" type="checkbox" required style="width:auto;margin-top:4px"><label for="a-consent" style="font-weight:400;font-size:13.5px;color:var(--body)">I consent to Swanya Pharmaceuticals processing my application data for recruitment purposes. <span class="req">*</span></label></div>
        <div class="hp" aria-hidden="true"><label>Leave this field empty <input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
        <input type="hidden" name="ts" value="">
        <div class="form__status" role="status" aria-live="polite"></div>
        <button class="btn btn--primary" type="submit">Submit application <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></button>
      </form>
    </div>
    <aside class="reveal reveal--right">
      <div class="cinfo">
        <div class="cinfo__item"><div class="cinfo__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg></div><div><div class="cinfo__t">HR contact</div><div class="cinfo__d"><!-- TODO: confirm careers email with client --><a href="mailto:<?= v('EMAIL') ?>" data-track="email"><?= v('EMAIL') ?></a><br>Head, HR: Mahesh Kumar</div></div></div>
        <div class="cinfo__item"><div class="cinfo__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div><div><div class="cinfo__t">What happens next</div><div class="cinfo__d">Applications are reviewed by the hiring manager and HR. Shortlisted candidates are invited for a technical discussion at the Baddi site.</div></div></div>
        <div class="cinfo__item"><div class="cinfo__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3 4 6v6c0 5 3.5 8 8 9 4.5-1 8-4 8-9V6z"/></svg></div><div><div class="cinfo__t">Your data</div><div class="cinfo__d">CVs are stored securely and used only for recruitment — see the <a href="/privacy-policy" style="color:var(--primary)">privacy policy</a>.</div></div></div>
      </div>
    </aside>
  </div>
</section>
</main>
<?php include PRIV . '/inc/footer.php'; ?>
<script type="module">
import { initForm } from '/js/forms.js';
initForm(document.getElementById('apply-form'));
const cv = document.getElementById('a-cv'), name = document.getElementById('a-cv-name'), up = document.getElementById('upload');
cv.addEventListener('change', () => { name.textContent = cv.files[0]?.name || ''; });
['dragenter', 'dragover'].forEach((ev) => up.addEventListener(ev, (e) => { e.preventDefault(); up.classList.add('is-drag'); }));
['dragleave', 'drop'].forEach((ev) => up.addEventListener(ev, (e) => { e.preventDefault(); up.classList.remove('is-drag'); }));
up.addEventListener('drop', (e) => { if (e.dataTransfer.files[0]) { cv.files = e.dataTransfer.files; cv.dispatchEvent(new Event('change')); } });
document.querySelectorAll('[data-job]').forEach((b) => b.addEventListener('click', () => { document.getElementById('a-role').value = b.dataset.job; }));
</script>
</body>
</html>
