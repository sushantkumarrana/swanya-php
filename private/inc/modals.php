<!-- Enquiry modal (native <dialog>) -->
<dialog class="modal" id="modal-enquiry" aria-labelledby="me-h">
  <form class="modal__box" method="dialog"><button class="modal__close" type="submit" aria-label="Close"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6l12 12M18 6 6 18"/></svg></button></form>
  <div class="modal__body">
    <span class="eyebrow">Product enquiry</span>
    <h2 class="h-md" id="me-h">Tell us what you need</h2>
    <p class="modal__sub">Volumes, markets and timelines — we reply within one business day.</p>
    <form class="form" id="enquiry-form" action="/api/enquiry" method="post" novalidate>
      <div class="form__row">
        <div class="field"><label for="e-name">Full name <span class="req">*</span></label><input id="e-name" name="name" type="text" required autocomplete="name" maxlength="100"><div class="err" aria-live="polite"></div></div>
        <div class="field"><label for="e-company">Company</label><input id="e-company" name="company" type="text" autocomplete="organization" maxlength="120"><div class="err"></div></div>
      </div>
      <div class="form__row">
        <div class="field"><label for="e-email">Work email <span class="req">*</span></label><input id="e-email" name="email" type="email" required autocomplete="email" maxlength="160"><div class="err" aria-live="polite"></div></div>
        <div class="field"><label for="e-phone">Phone / WhatsApp <span class="req">*</span></label><input id="e-phone" name="phone" type="tel" required inputmode="tel" maxlength="20" placeholder="+91"><div class="err" aria-live="polite"></div></div>
      </div>
      <div class="form__row">
        <div class="field"><label for="e-product">Product <span class="req">*</span></label>
          <select id="e-product" name="product" required>
            <option value="">Select…</option>
            <option value="sterile-water-for-injection">Sterile Water for Injection</option>
            <option value="normal-saline-solution">Normal Saline Solution</option>
            <option value="respules">Respules</option>
            <option value="ffs-ampoules">FFS Ampoules</option>
          </select><div class="err" aria-live="polite"></div></div>
        <div class="field"><label for="e-qty">Approx. quantity</label><input id="e-qty" name="quantity" type="text" maxlength="100" placeholder="e.g. 50,000 vials / month"><div class="err"></div></div>
      </div>
      <div class="field"><label for="e-msg">Message</label><textarea id="e-msg" name="message" maxlength="3000" style="min-height:96px"></textarea><div class="err"></div></div>
      <div class="hp" aria-hidden="true"><label>Leave this field empty <input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
      <input type="hidden" name="ts" value="">
      <div class="form__status" role="status" aria-live="polite"></div>
      <button class="btn btn--primary" type="submit">Send enquiry <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></button>
    </form>
  </div>
</dialog>

<!-- Gated download modal -->
<dialog class="modal" id="modal-download" aria-labelledby="md-h">
  <form class="modal__box" method="dialog"><button class="modal__close" type="submit" aria-label="Close"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 6l12 12M18 6 6 18"/></svg></button></form>
  <div class="modal__body">
    <span class="eyebrow">Download</span>
    <h2 class="h-md" id="md-h">Get the <span data-download-title>document</span></h2>
    <p class="modal__sub">Enter your details and the PDF will start downloading automatically.</p>
    <form class="form" id="download-form" action="/api/download" method="post" novalidate>
      <div class="form__row">
        <div class="field"><label for="d-name">Full name <span class="req">*</span></label><input id="d-name" name="name" type="text" required autocomplete="name" maxlength="100"><div class="err" aria-live="polite"></div></div>
        <div class="field"><label for="d-company">Company</label><input id="d-company" name="company" type="text" autocomplete="organization" maxlength="120"><div class="err"></div></div>
      </div>
      <div class="form__row">
        <div class="field"><label for="d-email">Work email <span class="req">*</span></label><input id="d-email" name="email" type="email" required autocomplete="email" maxlength="160"><div class="err" aria-live="polite"></div></div>
        <div class="field"><label for="d-phone">Phone / WhatsApp <span class="req">*</span></label><input id="d-phone" name="phone" type="tel" required inputmode="tel" maxlength="20" placeholder="+91"><div class="err" aria-live="polite"></div></div>
      </div>
      <input type="hidden" name="file" value="">
      <input type="hidden" name="title" value="">
      <div class="hp" aria-hidden="true"><label>Leave this field empty <input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
      <input type="hidden" name="ts" value="">
      <div class="form__status" role="status" aria-live="polite"></div>
      <button class="btn btn--primary" type="submit">Download PDF <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 3v12m0 0 4-4m-4 4-4-4M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"/></svg></button>
    </form>
  </div>
</dialog>
