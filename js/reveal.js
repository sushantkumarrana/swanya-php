/** Scroll reveal — one IntersectionObserver, unobserve after reveal. */
export function initReveal() {
  const items = document.querySelectorAll('.reveal, .reveal--stagger');
  if (!items.length || !('IntersectionObserver' in window)) {
    items.forEach((el) => el.classList.add('is-in'));
    return;
  }
  const io = new IntersectionObserver((entries) => {
    for (const e of entries) {
      if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); }
    }
  }, { rootMargin: '0px 0px -10% 0px', threshold: 0.05 });
  items.forEach((el) => io.observe(el));
}
