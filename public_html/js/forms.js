/**
 * Client-side validation + fetch submit for every site form.
 * The server re-validates everything; this only improves UX.
 */
export function initForm(form) {
  if (!form) return;
  const status = form.querySelector('.form__status');
  const ts = form.querySelector('[name="ts"]');
  if (ts) ts.value = String(Date.now());

  const setErr = (input, msg) => {
    const field = input.closest('.field');
    if (!field) return;
    field.classList.toggle('is-invalid', !!msg);
    const err = field.querySelector('.err');
    if (err) err.textContent = msg || '';
    input.setAttribute('aria-invalid', msg ? 'true' : 'false');
  };
  const check = (input) => {
    const v = input.value.trim();
    if (input.required && (input.type === 'checkbox' ? !input.checked : !v)) return 'This field is required.';
    if (input.type === 'email' && v && !/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(v)) return 'Enter a valid email address.';
    if (input.type === 'tel' && v && !/^[+\d][\d\s().-]{6,19}$/.test(v)) return 'Enter a valid phone number.';
    if (input.minLength > 0 && v && v.length < input.minLength) return `Please enter at least ${input.minLength} characters.`;
    if (input.type === 'file' && input.files[0]) {
      const f = input.files[0];
      if (f.size > 5 * 1024 * 1024) return 'File must be 5 MB or smaller.';
      if (!/\.(pdf|docx?)$/i.test(f.name)) return 'Upload a PDF or Word document.';
    }
    return '';
  };
  form.querySelectorAll('input, select, textarea').forEach((el) => {
    el.addEventListener('blur', () => setErr(el, check(el)));
    el.addEventListener('input', () => { if (el.closest('.field')?.classList.contains('is-invalid')) setErr(el, check(el)); });
  });

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    let firstBad = null;
    form.querySelectorAll('input, select, textarea').forEach((el) => {
      if (el.closest('.hp')) return;
      const msg = check(el);
      setErr(el, msg);
      if (msg && !firstBad) firstBad = el;
    });
    if (firstBad) { firstBad.focus(); return; }

    const btn = form.querySelector('[type="submit"]');
    btn.disabled = true;
    status.className = 'form__status';
    status.textContent = 'Sending…';
    try {
      const isMultipart = form.enctype === 'multipart/form-data';
      const res = await fetch(form.action, {
        method: 'POST',
        headers: isMultipart ? {} : { 'Content-Type': 'application/json', Accept: 'application/json' },
        body: isMultipart ? new FormData(form) : JSON.stringify(Object.fromEntries(new FormData(form))),
      });
      const data = await res.json().catch(() => ({}));
      if (!res.ok || !data.ok) throw new Error(data.error || 'Something went wrong. Please try again or email us directly.');
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({ event: 'form_submit', form_id: form.id });
      location.href = data.redirect || '/thank-you';
    } catch (err) {
      status.className = 'form__status fail';
      status.textContent = err.message;
      btn.disabled = false;
    }
  });
}
