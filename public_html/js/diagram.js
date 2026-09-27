/**
 * Animated water-system diagrams (Purified Water, WFI) as hand-built SVG.
 * `buildSVG(spec, opts)` is a pure string builder — used in the browser and by
 * scripts/build-diagrams.js to emit static SVG files. Everything else here is
 * browser-only (tooltips, viewport pause, responsive re-layout).
 */

const ICONS = {
  tank: 'M4 7h16v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zM4 11h16',
  bubbles: 'M7 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm-3 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM17 8a1 1 0 1 0 0-2',
  uv: 'M3 12c2-3 4-3 6 0s4 3 6 0 4-3 6 0M12 3v3M6 5l2 2M18 5l-2 2',
  layers: 'M4 6h16M4 10h16M4 14h16M4 18h16',
  softener: 'M6 4h12v16H6zM9 4v16M15 4v16',
  membrane: 'M5 5h14v14H5zM8 5v14M12 5v14M16 5v14',
  edi: 'M5 5h14v14H5zM9 5v14M15 5v14M3 12h2M19 12h2',
  steam: 'M8 4c-2 3 2 5 0 8M12 4c-2 3 2 5 0 8M16 4c-2 3 2 5 0 8M5 16h14v4H5z',
  still: 'M6 3h4v10H6zM14 3h4v10h-4zM4 13h16v8H4z',
  filter: 'M4 5h16l-6 8v6l-4-2v-4z',
  loop: 'M4 12a8 8 0 0 1 14-5.3M20 12a8 8 0 0 1-14 5.3M18 3v4h-4M6 21v-4h4',
  lab: 'M9 3v7l-5 9a1 1 0 0 0 .9 1.5h14.2a1 1 0 0 0 .9-1.5l-5-9V3M8 3h8',
  water: 'M12 3s6 7 6 11a6 6 0 0 1-12 0c0-4 6-11 6-11z',
};

export const PURIFIED = {
  id: 'purified',
  title: 'Purified Water System',
  desc: 'Nine-stage purified water treatment: feed water passes through ozone treatment, UV, multigrade filtration, softening, reverse osmosis, electrodeionisation and a final UV stage before storage as Purified Water.',
  legend: true,
  cols: 3,
  snake: true,
  nodes: [
    { id: 'feed', label: 'Feed water', type: 'tank', icon: 'tank', tip: 'Raw water received into storage before treatment begins.' },
    { id: 'ozone', label: 'Ozone treatment', type: 'equip', icon: 'bubbles', tip: 'Ozone dosing oxidises organics and disinfects the feed water.' },
    { id: 'uv1', label: 'UV', type: 'equip', icon: 'uv', tip: 'UV lamp destroys residual ozone and reduces microbial load.' },
    { id: 'mgf', label: 'Multigrade filter', type: 'equip', icon: 'layers', tip: 'Multi-media bed removes suspended solids and turbidity.' },
    { id: 'soft', label: 'Softener', type: 'equip', icon: 'softener', tip: 'Ion-exchange resin removes hardness (Ca²⁺/Mg²⁺) to protect the RO membranes.' },
    { id: 'ro', label: 'RO', type: 'equip', icon: 'membrane', tip: 'Reverse osmosis membranes reject dissolved salts, organics and endotoxins.' },
    { id: 'edi', label: 'EDI', type: 'equip', icon: 'edi', tip: 'Electrodeionisation polishes conductivity continuously, without chemical regeneration.' },
    { id: 'uv2', label: 'UV', type: 'equip', icon: 'uv', tip: 'Final UV stage keeps the distribution loop microbially controlled.' },
    { id: 'pw', label: 'Purified water', type: 'tank', icon: 'tank', tip: 'Purified Water stored and circulated to points of use (60 m³/day capacity).' },
  ],
  pumps: [0, 4, 7],
};

export const WFI = {
  id: 'wfi',
  title: 'Water For Injection (WFI) System',
  desc: 'Purified water, pure steam and raw steam feed the multi-column distillation still and condenser; WFI is stored at 80 °C and above with a vent filter, circulated through the WFI loop, and sampled for conductivity, pH, pyrogen and microbial limit tests.',
  legend: true,
  cols: 4,
  nodes: [
    { id: 'pw', label: 'Purified Water', type: 'tank', icon: 'water', col: 0, row: 0, tip: 'Purified Water (from the PW system) is the feed to the WFI still.' },
    { id: 'ps', label: 'Pure Steam', type: 'input', icon: 'steam', col: 0, row: 1, tip: 'Pure steam supplies the first distillation column.' },
    { id: 'rs', label: 'Raw Steam', type: 'input', icon: 'steam', col: 0, row: 2, tip: 'Plant (raw) steam provides heating energy to the still.' },
    { id: 'still', label: 'Multi-column Still', sub: 'Condenser', type: 'equip', icon: 'still', col: 1, row: 0, rowSpan: 3, tip: 'Multiple-effect distillation columns; vapour is condensed to yield pyrogen-free WFI.' },
    { id: 'vent', label: 'Vent Filter', type: 'equip', icon: 'filter', col: 2, row: 0, tip: 'Hydrophobic 0.2 µm vent filter protects the storage tank from airborne contamination.' },
    { id: 'store', label: 'WFI Storage', sub: 'Maintained at 80 °C and above', type: 'tank', icon: 'tank', col: 2, row: 1, tip: 'WFI is held hot (≥ 80 °C) under continuous circulation to prevent microbial growth.' },
    { id: 'loop', label: 'WFI Loop Circulation', type: 'equip', icon: 'loop', col: 3, row: 1, tip: 'Hot WFI is circulated continuously to every point of use and returned to storage.' },
    { id: 'samp', label: 'WFI Sampling', list: ['Conductivity', 'pH', 'Pyrogen Test', 'Microbial Limit Test'], type: 'lab', icon: 'lab', col: 3, row: 2, tip: 'Routine QC sampling of the loop: conductivity, pH, pyrogen (BET) and microbial limit tests.' },
  ],
  edges: [
    ['pw', 'still'], ['ps', 'still'], ['rs', 'still'],
    ['still', 'store'], ['vent', 'store', { arrow: false }],
    ['store', 'loop', { dy: -12 }], ['loop', 'store', { dy: 12 }],
    ['loop', 'samp'],
  ],
  pumps: [3, 5],
};

// ---------------------------------------------------------------------------

function layout(spec, cols, compact) {
  const W = compact ? 168 : 196;
  const H = compact ? 64 : 84;
  const GX = compact ? 52 : 72;
  const GY = compact ? 44 : 60;
  const nodes = spec.nodes.map((n, i) => {
    let col = n.col, row = n.row;
    if (cols === 1) { col = 0; row = i; }
    else if (col == null) {
      row = Math.floor(i / cols);
      col = row % 2 === 0 ? i % cols : cols - 1 - (i % cols);
      if (!spec.snake) col = i % cols;
    }
    const rowSpan = n.rowSpan || 1;
    const h = n.list ? H + 16 * n.list.length + 8 : n.rowSpan ? H * rowSpan + GY * (rowSpan - 1) : n.sub ? H + 14 : H;
    return { ...n, col, row, x: col * (W + GX), y: row * (H + GY), w: W, h };
  });
  const width = Math.max(...nodes.map((n) => n.x + n.w));
  const height = Math.max(...nodes.map((n) => n.y + n.h));
  return { nodes, width, height, W, H, GX, GY };
}

/** Orthogonal route between two node rects. Returns { d, mid } (mid = pump marker position). */
function route(a, b, dy = 0) {
  const ac = { x: a.x + a.w / 2, y: a.y + a.h / 2 };
  const bc = { x: b.x + b.w / 2, y: b.y + b.h / 2 };
  const seg = (x1, y1, x2, y2) => ({ d: `M${x1},${y1} L${x2},${y2}`, mid: { x: (x1 + x2) / 2, y: (y1 + y2) / 2 } });
  if (a.col === b.col) {
    // vertical
    return a.y < b.y ? seg(ac.x, a.y + a.h, bc.x, b.y) : seg(ac.x, a.y, bc.x, b.y + b.h);
  }
  const dir = a.x < b.x ? 1 : -1;
  const x1 = dir > 0 ? a.x + a.w : a.x;
  const x2 = dir > 0 ? b.x : b.x + b.w;
  // horizontal at from-node centre y (+offset) when it lands inside the target node
  const yA = ac.y + dy;
  if (yA >= b.y && yA <= b.y + b.h) return seg(x1, yA, x2, yA);
  // elbow: out, across the gap, then vertical into b
  const xm = x1 + dir * (Math.abs(x2 - x1) / 2);
  return { d: `M${x1},${yA} L${xm},${yA} L${xm},${bc.y} L${x2},${bc.y}`, mid: { x: xm, y: (yA + bc.y) / 2 } };
}

/** Build the full SVG markup string. */
export function buildSVG(spec, { cols = spec.cols, compact = false, animate = true } = {}) {
  const L = layout(spec, cols, compact);
  const pad = 14;
  const vw = L.width + pad * 2, vh = L.height + pad * 2 + (spec.legend && !compact ? 40 : 0);
  const byId = Object.fromEntries(L.nodes.map((n) => [n.id, n]));
  const edges = spec.edges
    ? spec.edges.map(([f, t, o = {}]) => ({ a: byId[f], b: byId[t], ...o }))
    : L.nodes.slice(0, -1).map((n, i) => ({ a: n, b: L.nodes[i + 1] }));
  // Single-column mobile layout: force every edge vertical
  if (cols === 1) edges.forEach((e) => { e.dy = 0; });

  const uid = `${spec.id}${compact ? 'c' : ''}${cols}`;
  let out = `<svg class="diagram__svg" viewBox="0 0 ${vw} ${vh}" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="${uid}-t ${uid}-d">
<title id="${uid}-t">${spec.title}</title><desc id="${uid}-d">${spec.desc}</desc>
<defs>
  <marker id="${uid}-arr" viewBox="0 0 10 10" refX="9" refY="5" markerWidth="7" markerHeight="7" orient="auto-start-reverse"><path d="M0 0L10 5 0 10z" fill="#8FB3CC"/></marker>
  <linearGradient id="${uid}-tank" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#fbf5ea"/><stop offset="1" stop-color="#f2e6d0"/></linearGradient>
  <linearGradient id="${uid}-equip" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#eef7fd"/><stop offset="1" stop-color="#dbeefb"/></linearGradient>
  <radialGradient id="${uid}-drop"><stop offset="0" stop-color="#8FD6F2"/><stop offset="1" stop-color="#0B78C2"/></radialGradient>
</defs>
<g transform="translate(${pad},${pad})">
<g class="diagram__edges">`;

  edges.forEach((e, i) => {
    const { d, mid } = route(e.a, e.b, e.dy || 0);
    const arrow = e.arrow === false ? '' : ` marker-end="url(#${uid}-arr)"`;
    out += `<path id="${uid}-e${i}" class="diagram__edge" d="${d}"${arrow}/>`;
    if ((spec.pumps || []).includes(i) && cols > 1) {
      const rot = e.a.col === e.b.col ? 90 : e.a.x < e.b.x ? 0 : 180;
      out += `<g class="diagram__pump" transform="translate(${mid.x},${mid.y})"><circle r="9"/><path d="M-3 -4 L4 0 L-3 4z" transform="rotate(${rot})"/></g>`;
    }
    if (animate) {
      const n = 2;
      for (let k = 0; k < n; k++) {
        const begin = (i * 0.45 + k * 1.4).toFixed(2);
        out += `<circle class="diagram__drop" r="${compact ? 3.2 : 4}" fill="url(#${uid}-drop)" opacity="0"><set attributeName="opacity" to="1" begin="${begin}s"/><animateMotion dur="2.8s" begin="${begin}s" repeatCount="indefinite" rotate="0"><mpath href="#${uid}-e${i}"/></animateMotion></circle>`;
      }
    }
  });
  out += `</g><g class="diagram__nodes">`;

  for (const n of L.nodes) {
    const ic = ICONS[n.icon] || ICONS.tank;
    const fill = n.type === 'tank' ? `url(#${uid}-tank)` : `url(#${uid}-equip)`;
    const fs = compact ? 11.5 : 13.5;
    const iconY = n.list ? 14 : n.h / 2 - (compact ? 22 : 28);
    const labelY = n.list ? 44 : n.sub ? n.h / 2 + 12 : n.h / 2 + (compact ? 16 : 22);
    out += `<g class="diagram__node diagram__node--${n.type}" data-tip="${esc(n.tip)}" tabindex="0" role="img" aria-label="${esc(n.label)}${n.sub ? ' — ' + esc(n.sub) : ''}: ${esc(n.tip)}" transform="translate(${n.x},${n.y})">
<rect width="${n.w}" height="${n.h}" rx="12" fill="${fill}"/>
<svg x="${n.w / 2 - 12}" y="${iconY}" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" class="diagram__icon"><path d="${ic}"/></svg>
<text x="${n.w / 2}" y="${labelY}" text-anchor="middle" class="diagram__label" font-size="${fs}">${esc(n.label)}</text>`;
    if (n.sub) out += `<text x="${n.w / 2}" y="${labelY + 15}" text-anchor="middle" class="diagram__sub" font-size="10.5">${esc(n.sub)}</text>`;
    if (n.list) n.list.forEach((li, k) => { out += `<text x="${n.w / 2}" y="${labelY + 22 + k * 16}" text-anchor="middle" class="diagram__sub" font-size="11">• ${esc(li)}</text>`; });
    out += `</g>`;
  }
  out += `</g>`;

  if (spec.legend && !compact) {
    const ly = L.height + 30;
    out += `<g class="diagram__legend" transform="translate(0,${ly})" font-size="12">
<rect width="16" height="12" rx="3" fill="url(#${uid}-tank)" class="diagram__lg-tank"/><text x="22" y="10">Storage tank</text>
<rect x="130" width="16" height="12" rx="3" fill="url(#${uid}-equip)" class="diagram__lg-equip"/><text x="152" y="10">Treatment equipment</text>
<g transform="translate(310,6)"><circle r="7" class="diagram__lg-pump"/><path d="M-2.5 -3 L3.5 0 L-2.5 3z" fill="currentColor"/></g><text x="324" y="10">Pump</text>
</g>`;
  }
  out += `</g></svg>`;
  return out;
}

function esc(s = '') {
  return String(s).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/"/g, '&quot;');
}

// ---------------------------------------------------------------------------
// Browser wiring: <div class="diagram" data-diagram="purified|wfi" data-compact>
// ---------------------------------------------------------------------------
const SPECS = { purified: PURIFIED, wfi: WFI };

export function initDiagrams() {
  const hosts = document.querySelectorAll('[data-diagram]');
  if (!hosts.length) return;
  const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;

  hosts.forEach((host) => {
    const spec = SPECS[host.dataset.diagram];
    if (!spec) return;
    const compact = host.hasAttribute('data-compact');
    const tip = document.createElement('div');
    tip.className = 'diagram__tip glass';
    tip.setAttribute('role', 'tooltip');
    tip.hidden = true;

    let lastCols = null;
    const draw = () => {
      const cols = host.clientWidth < (compact ? 440 : 600) ? 1 : spec.cols;
      if (cols === lastCols) return;
      lastCols = cols;
      host.classList.toggle('is-stack', cols === 1);
      host.querySelector('svg')?.remove();
      host.insertAdjacentHTML('afterbegin', buildSVG(spec, { cols, compact, animate: !reduce }));
      host.appendChild(tip);
      wireTips(host, tip);
    };
    draw();
    let t;
    addEventListener('resize', () => { clearTimeout(t); t = setTimeout(draw, 150); }, { passive: true });

    // Pause SMIL when off-screen
    if (!reduce && 'IntersectionObserver' in window) {
      new IntersectionObserver((entries) => {
        const svg = host.querySelector('svg');
        if (!svg || !svg.pauseAnimations) return;
        entries[0].isIntersecting ? svg.unpauseAnimations() : svg.pauseAnimations();
      }, { threshold: 0.05 }).observe(host);
    }
    host.classList.add('is-ready');
  });
}

function wireTips(host, tip) {
  const show = (node) => {
    tip.textContent = node.dataset.tip;
    tip.hidden = false;
    const hr = host.getBoundingClientRect(), nr = node.getBoundingClientRect();
    let x = nr.left - hr.left + nr.width / 2, y = nr.top - hr.top - 10;
    tip.style.left = `${x}px`;
    tip.style.top = `${y}px`;
    // keep inside host
    requestAnimationFrame(() => {
      const tr = tip.getBoundingClientRect();
      const over = tr.right - hr.right, under = hr.left - tr.left;
      if (over > 0) tip.style.left = `${x - over - 8}px`;
      if (under > 0) tip.style.left = `${x + under + 8}px`;
      if (tr.top < hr.top) { tip.style.top = `${nr.bottom - hr.top + 10}px`; tip.classList.add('is-below'); } else tip.classList.remove('is-below');
    });
  };
  const hide = () => { tip.hidden = true; };
  host.querySelectorAll('.diagram__node').forEach((n) => {
    n.addEventListener('mouseenter', () => show(n));
    n.addEventListener('focus', () => show(n));
    n.addEventListener('mouseleave', hide);
    n.addEventListener('blur', hide);
    n.addEventListener('click', () => (tip.hidden ? show(n) : hide()));
  });
}
