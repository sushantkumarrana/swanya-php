/** Animate numbers in `[data-count]` when they enter view. Markup keeps the final value as text. */
export function initCounters() {
  const els = document.querySelectorAll('[data-count]');
  if (!els.length) return;
  const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;
  const fmt = (n, dec) => n.toLocaleString('en-IN', { minimumFractionDigits: dec, maximumFractionDigits: dec });

  const run = (el) => {
    const target = parseFloat(el.dataset.count);
    const dec = (el.dataset.count.split('.')[1] || '').length;
    if (reduce) { el.textContent = fmt(target, dec); return; }
    const dur = 1400, t0 = performance.now();
    const step = (t) => {
      const p = Math.min(1, (t - t0) / dur);
      const eased = 1 - Math.pow(1 - p, 3);
      el.textContent = fmt(target * eased, dec);
      if (p < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  };

  const io = new IntersectionObserver((entries) => {
    for (const e of entries) if (e.isIntersecting) { run(e.target); io.unobserve(e.target); }
  }, { threshold: 0.4 });
  els.forEach((el) => io.observe(el));
}
