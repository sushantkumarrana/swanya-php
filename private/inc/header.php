<a class="skip-link" href="#main">Skip to content</a>

<!-- Screen loader: purely visual, content renders underneath immediately -->
<div class="loader" id="loader" aria-hidden="true">
  <svg class="loader__drop" viewBox="0 0 96 128" fill="none" aria-hidden="true">
    <defs>
      <clipPath id="ldClip"><path d="M48 6C48 6 10 54 10 84a38 38 0 0 0 76 0C86 54 48 6 48 6Z"/></clipPath>
      <linearGradient id="ldWater" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#37B8EA"/><stop offset="1" stop-color="#0B78C2"/></linearGradient>
    </defs>
    <path d="M48 6C48 6 10 54 10 84a38 38 0 0 0 76 0C86 54 48 6 48 6Z" stroke="rgba(143,214,242,.6)" stroke-width="2"/>
    <g clip-path="url(#ldClip)"><rect class="loader__water" x="0" y="0" width="96" height="128" fill="url(#ldWater)"/></g>
    <path class="loader__swan" d="M36 96c0-14 6-24 16-26 6-1 10 2 12 6l6 6-8 1c-4 0-6 3-6 7v8" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
  <div class="loader__bar"><i></i></div>
</div>

<header class="header <?= v('HEADER_CLASS') ?>" id="header">
  <div class="container header__inner">
    <a class="brand" href="/" aria-label="Swanya Pharmaceuticals — home">
      <img class="brand__logo" src="/assets/img/logo.jpg" alt="Swanya Pharmaceuticals Pvt Ltd logo" width="90" height="86">
      <span class="brand__text">
        <span class="brand__name">Swanya Pharmaceuticals</span>
        <span class="brand__sub">Sterile liquids · Baddi, HP</span>
      </span>
    </a>

    <nav class="nav" aria-label="Primary">
      <div class="nav__item"><a class="nav__link" href="/" data-nav="/">Home</a></div>
      <div class="nav__item"><a class="nav__link" href="/about" data-nav="/about">About Us</a></div>
      <div class="nav__item"><a class="nav__link" href="/manufacturing" data-nav="/manufacturing">Manufacturing</a></div>
      <div class="nav__item"><a class="nav__link" href="/products" data-nav="/products">Products</a></div>
      <div class="nav__item"><a class="nav__link" href="/blogs" data-nav="/blogs">Blogs</a></div>
      <div class="nav__item">
        <a class="nav__link" href="/downloads" data-nav="/downloads" aria-haspopup="true">Resources
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m6 9 6 6 6-6"/></svg>
        </a>
        <div class="dropdown">
          <a class="dropdown__link" href="/company-profile">
            <span class="dropdown__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><path d="M14 3v6h6M8 13h8M8 17h8"/></svg></span>
            <span><span class="dropdown__t">Company Profile</span><span class="dropdown__d">Download the corporate PDF</span></span>
          </a>
          <a class="dropdown__link" href="/downloads">
            <span class="dropdown__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3v12m0 0 4-4m-4 4-4-4M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"/></svg></span>
            <span><span class="dropdown__t">Downloads</span><span class="dropdown__d">Product list, compatibility chart, brochures</span></span>
          </a>
          <a class="dropdown__link" href="/careers">
            <span class="dropdown__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M3 12h18"/></svg></span>
            <span><span class="dropdown__t">Careers</span><span class="dropdown__d">Current openings &amp; apply</span></span>
          </a>
          <a class="dropdown__link" href="/faq">
            <span class="dropdown__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M9.5 9.5a2.5 2.5 0 0 1 5 0c0 1.5-2.5 2-2.5 3.5M12 17h.01"/></svg></span>
            <span><span class="dropdown__t">FAQs</span><span class="dropdown__d">Manufacturing, quality, ordering</span></span>
          </a>
        </div>
      </div>
      <div class="nav__item"><a class="nav__link" href="/contact" data-nav="/contact">Contact Us</a></div>
    </nav>

    <div class="header__cta">
      <a class="btn btn--primary btn--sm" href="/contact#enquiry">Request a Quote
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
      </a>
      <button class="burger" id="burger" aria-label="Open menu" aria-controls="drawer" aria-expanded="false"><span></span><span></span><span></span></button>
    </div>
  </div>
</header>

<!-- Mobile drawer -->
<div class="drawer" id="drawer" role="dialog" aria-modal="true" aria-label="Site menu">
  <div class="drawer__scrim" data-drawer-close></div>
  <div class="drawer__panel">
    <div class="drawer__head">
      <img src="/assets/img/logo.jpg" alt="" width="60" height="57" style="height:52px;width:auto">
      <button class="drawer__close" data-drawer-close aria-label="Close menu"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="20" height="20"><path d="M6 6l12 12M18 6 6 18"/></svg></button>
    </div>
    <a class="drawer__link" href="/" data-nav="/">Home</a>
    <a class="drawer__link" href="/about" data-nav="/about">About Us</a>
    <a class="drawer__link" href="/manufacturing" data-nav="/manufacturing">Manufacturing</a>
    <a class="drawer__link" href="/products" data-nav="/products">Products</a>
    <a class="drawer__link" href="/blogs" data-nav="/blogs">Blogs</a>
    <a class="drawer__link" href="/contact" data-nav="/contact">Contact Us</a>
    <div class="drawer__sub">Resources</div>
    <a class="drawer__sublink" href="/company-profile">Company Profile</a>
    <a class="drawer__sublink" href="/downloads">Downloads</a>
    <a class="drawer__sublink" href="/careers">Careers</a>
    <a class="drawer__sublink" href="/faq">FAQs</a>
    <div class="drawer__cta">
      <a class="btn btn--primary" href="/contact#enquiry">Request a Quote</a>
      <a class="btn btn--wa" href="<?= v('WA_LINK') ?>" target="_blank" rel="noopener" data-track="whatsapp">WhatsApp Us</a>
    </div>
  </div>
</div>
