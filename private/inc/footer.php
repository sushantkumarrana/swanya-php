<footer class="footer" id="footer">
  <div class="footer__glow" aria-hidden="true"></div>
  <div class="footer__word" aria-hidden="true">Swanya</div>
  <div class="container">
    <div class="footer__grid">
      <div class="footer__brand">
        <img src="/assets/img/logo.jpg" alt="Swanya Pharmaceuticals Pvt Ltd" width="120" height="115" loading="lazy">
        <p>Swanya Pharmaceuticals Pvt Ltd is a sterile liquid pharmaceutical manufacturer in Baddi, Himachal Pradesh — producing Sterile Water for Injection, Normal Saline and Respules on Form-Fill-Seal lines for partners across India.</p>
        <div class="footer__social">
          <!-- TODO: confirm social profile URLs with client -->
          <a href="#" aria-label="LinkedIn" rel="noopener" data-track="social"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.36V9h3.41v1.56h.05c.47-.9 1.63-1.85 3.36-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29ZM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12ZM7.12 20.45H3.56V9h3.56v11.45Z"/></svg></a>
          <a href="#" aria-label="Facebook" rel="noopener" data-track="social"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M13.5 21v-7h2.4l.4-3h-2.8V9.1c0-.9.3-1.5 1.5-1.5h1.4V5c-.3 0-1.2-.1-2.2-.1-2.2 0-3.7 1.3-3.7 3.8V11H8v3h2.5v7h3Z"/></svg></a>
          <a href="#" aria-label="YouTube" rel="noopener" data-track="social"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M21.6 7.2a2.5 2.5 0 0 0-1.8-1.8C18.2 5 12 5 12 5s-6.2 0-7.8.4A2.5 2.5 0 0 0 2.4 7.2 26 26 0 0 0 2 12a26 26 0 0 0 .4 4.8 2.5 2.5 0 0 0 1.8 1.8c1.6.4 7.8.4 7.8.4s6.2 0 7.8-.4a2.5 2.5 0 0 0 1.8-1.8A26 26 0 0 0 22 12a26 26 0 0 0-.4-4.8ZM10 15V9l5.2 3L10 15Z"/></svg></a>
        </div>
      </div>

      <div>
        <div class="footer__h">Quick Links</div>
        <ul class="footer__links">
          <li><a href="/about">About Swanya</a></li>
          <li><a href="/manufacturing">Manufacturing Capabilities</a></li>
          <li><a href="/products">Sterile Liquid Products</a></li>
          <li><a href="/manufacturing#contract">Contract Manufacturing</a></li>
          <li><a href="/blogs">Industry Insights</a></li>
          <li><a href="/careers">Careers</a></li>
        </ul>
      </div>

      <div>
        <div class="footer__h">Resources</div>
        <ul class="footer__links">
          <li><a href="/company-profile" data-track="pdf">Company Profile (PDF)</a></li>
          <li><a href="/downloads">Product List &amp; Brochures</a></li>
          <li><a href="/downloads#compatibility">Compatibility Chart</a></li>
          <li><a href="/faq">FAQs</a></li>
          <li><a href="/contact">Request a Quote</a></li>
        </ul>
      </div>

      <div>
        <div class="footer__h">Contact</div>
        <ul class="footer__contact">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s7-6.2 7-11.5A7 7 0 0 0 5 9.5C5 14.8 12 21 12 21Z"/><circle cx="12" cy="9.5" r="2.5"/></svg>
            <address style="font-style:normal">Swanya Pharmaceuticals Pvt Ltd<br><!-- TODO: confirm exact plot/street address with client -->Baddi, Solan District,<br>Himachal Pradesh, India</address></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Z"/></svg>
            <a href="tel:<?= v('PHONE_TEL') ?>" data-track="phone"><?= v('PHONE') ?></a></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
            <a href="mailto:<?= v('EMAIL') ?>" data-track="email"><?= v('EMAIL') ?></a></li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
            <span><?= v('HOURS') ?></span></li>
        </ul>
      </div>
    </div>

    <div class="footer__bottom">
      <span>© <?= v('YEAR') ?> Swanya Pharmaceuticals Pvt Ltd. All rights reserved.</span>
      <div class="footer__legal">
        <a href="/privacy-policy">Privacy Policy</a>
        <a href="/terms-and-conditions">Terms &amp; Conditions</a>
        <a href="/sitemap.xml">Sitemap</a>
      </div>
    </div>
  </div>
</footer>

<a class="wa-float" href="<?= v('WA_LINK') ?>" target="_blank" rel="noopener" aria-label="Chat with us on WhatsApp" data-track="whatsapp">
  <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2Zm0 18.2a8.2 8.2 0 0 1-4.2-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2Zm4.5-6.1c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1l-.8 1c-.1.2-.3.2-.5.1a6.7 6.7 0 0 1-3.3-2.9c-.3-.4.2-.4.7-1.3.1-.2 0-.3 0-.4l-.8-1.8c-.2-.5-.4-.4-.6-.4h-.5a1 1 0 0 0-.7.3 3 3 0 0 0-.9 2.2 5.2 5.2 0 0 0 1.1 2.8 12 12 0 0 0 4.6 4c1.7.7 2.3.8 3.2.7.5-.1 1.5-.6 1.7-1.2.2-.6.2-1.1.2-1.2l-.5-.2Z"/></svg>
</a>
<?php include PRIV . '/inc/modals.php'; ?>
<?= v('ANALYTICS_BODY') ?>
<script type="module" src="/js/main.js"></script>
