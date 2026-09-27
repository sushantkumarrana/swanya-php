/**
 * Entry point (native ES modules, no bundler). Each concern lives in its own
 * file so a bundler can be dropped in later without touching markup.
 */
import { initLoader } from './loader.js';
import { initNav } from './nav.js';
import { initReveal } from './reveal.js';
import { initCounters } from './counters.js';
import { initModals } from './modal.js';

const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;

/** Parallax-lite: translate `[data-parallax="0.2"]` elements by scroll × factor. rAF-throttled. */
function initParallax() {
  const els = [...document.querySelectorAll('[data-parallax]')];
  if (!els.length || reduce) return;
  let ticking = false;
  const update = () => {
    const y = window.scrollY;
    for (const el of els) {
      const f = parseFloat(el.dataset.parallax) || 0.2;
      el.style.transform = `translate3d(0, ${(y * f).toFixed(1)}px, 0)`;
    }
    ticking = false;
  };
  window.addEventListener('scroll', () => { if (!ticking) { requestAnimationFrame(update); ticking = true; } }, { passive: true });
  update();
}

/** Light fade-out on internal navigation. */
function initPageTransitions() {
  if (reduce) return;
  document.addEventListener('click', (e) => {
    const a = e.target.closest('a[href]');
    if (!a || a.target === '_blank' || a.hasAttribute('download') || a.hasAttribute('data-modal') || e.metaKey || e.ctrlKey || e.shiftKey) return;
    const url = new URL(a.href, location.href);
    if (url.origin !== location.origin || url.pathname === location.pathname) return; // same page / hash / external
    e.preventDefault();
    document.body.classList.add('is-leaving');
    setTimeout(() => { location.href = url.href; }, 200);
  });
  // bfcache: restore opacity when navigating back
  window.addEventListener('pageshow', () => document.body.classList.remove('is-leaving'));
}

/** Sticky reading progress bar (`.progress` present on long pages). */
function initProgress() {
  const bar = document.querySelector('.progress');
  if (!bar) return;
  let ticking = false;
  const update = () => {
    const max = document.documentElement.scrollHeight - innerHeight;
    bar.style.transform = `scaleX(${max > 0 ? Math.min(1, scrollY / max) : 0})`;
    ticking = false;
  };
  window.addEventListener('scroll', () => { if (!ticking) { requestAnimationFrame(update); ticking = true; } }, { passive: true });
  update();
}

/** Testimonial carousel: scroll-snap track + prev/next + gentle autoplay. */
function initCarousels() {
  document.querySelectorAll('[data-carousel]').forEach((c) => {
    const track = c.querySelector('.tcarousel__track');
    const step = () => track.firstElementChild.getBoundingClientRect().width + 18;
    const go = (dir) => {
      const max = track.scrollWidth - track.clientWidth;
      const next = dir > 0 && track.scrollLeft >= max - 4 ? 0 : track.scrollLeft + dir * step();
      track.scrollTo({ left: next, behavior: reduce ? 'auto' : 'smooth' });
    };
    c.querySelectorAll('[data-dir]').forEach((b) => b.addEventListener('click', () => go(+b.dataset.dir)));
    if (reduce) return;
    let timer = setInterval(() => go(1), 6000);
    c.addEventListener('pointerenter', () => clearInterval(timer));
    c.addEventListener('pointerleave', () => { timer = setInterval(() => go(1), 6000); });
  });
}

/** GA4 / GTM events: WhatsApp, phone, email, PDF clicks. */
function initTracking() {
  document.addEventListener('click', (e) => {
    const a = e.target.closest('[data-track]');
    if (!a) return;
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ event: `click_${a.dataset.track}`, link_url: a.href || '', link_text: (a.textContent || '').trim().slice(0, 80) });
  });
}

initLoader();
initNav();
initReveal();
initCounters();
initParallax();
initPageTransitions();
initProgress();
initTracking();
initModals();
initCarousels();
