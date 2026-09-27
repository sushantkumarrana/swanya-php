/** Screen loader — visual only. Dismisses on `load` or after 1.2s, whichever first. */
export function initLoader() {
  const el = document.getElementById('loader');
  if (!el) return;
  let done = false;
  const finish = () => {
    if (done) return;
    done = true;
    el.classList.add('is-leaving');
    el.addEventListener('transitionend', () => el.classList.add('is-done'), { once: true });
    setTimeout(() => el.classList.add('is-done'), 800); // transitionend failsafe
  };
  window.addEventListener('load', () => setTimeout(finish, 350), { once: true });
  setTimeout(finish, 1200);
}
