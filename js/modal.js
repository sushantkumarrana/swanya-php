/**
 * Site-wide modals (native <dialog>): enquiry + gated download.
 * Open with [data-modal="enquiry"] (+ data-product) or [data-modal="download"] (+ data-file, data-title).
 * Home page auto-popup: <body data-autopopup="30000">.
 */
import { initForm } from './forms.js';

export function initModals() {
  const enquiry = document.getElementById('modal-enquiry');
  const download = document.getElementById('modal-download');
  if (!enquiry || !download || !('showModal' in enquiry)) return;

  initForm(enquiry.querySelector('form.form'));
  initForm(download.querySelector('form.form'));

  const open = (dlg) => {
    if (dlg.open) return;
    dlg.showModal();
    dlg.querySelector('.form input:not([type="hidden"])')?.focus();
    sessionStorage.setItem('swanya-modal-seen', '1');
  };
  document.addEventListener('click', (e) => {
    const t = e.target.closest('[data-modal]');
    if (!t) return;
    e.preventDefault();
    if (t.dataset.modal === 'download') {
      download.querySelector('[name="file"]').value = t.dataset.file || t.getAttribute('href') || '';
      download.querySelector('[name="title"]').value = t.dataset.title || 'document';
      download.querySelector('[data-download-title]').textContent = t.dataset.title || 'document';
      open(download);
    } else {
      const sel = enquiry.querySelector('[name="product"]');
      if (t.dataset.product) sel.value = t.dataset.product;
      open(enquiry);
    }
  });
  // click on backdrop closes
  [enquiry, download].forEach((d) => d.addEventListener('click', (e) => { if (e.target === d) d.close(); }));

  // Timed popup (home): once per session, not while another dialog is open
  const delay = Number(document.body.dataset.autopopup);
  if (delay && !sessionStorage.getItem('swanya-modal-seen')) {
    setTimeout(() => { if (!document.querySelector('dialog[open]')) open(enquiry); }, delay);
  }
}
