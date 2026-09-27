<?php
/**
 * Content loaders + HTML fragment builders (port of lib/content.js).
 * Products / jobs / FAQs / testimonials from private/data/*.json, blog posts from private/content/blog/*.md.
 */
declare(strict_types=1);

function content_json(string $file): array {
  static $cache = [];
  return $cache[$file] ??= json_decode((string) file_get_contents(PRIV . '/data/' . $file), true);
}
function clip(string $s, int $n): string {
  return mb_strlen($s) > $n ? preg_replace('/\s+\S*$/u', '', mb_substr($s, 0, $n - 1)) . '…' : $s;
}
const ARROW = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>';

// ---- Products ---------------------------------------------------------------
function products(): array { return content_json('products.json')['products']; }
function get_product(string $slug): ?array {
  foreach (products() as $p) if ($p['slug'] === $slug) return $p;
  return null;
}

/** <picture> for a product/blog image; generated/* images get 3-width srcset. */
function picture(array $img, string $sizes = '(min-width:1024px) 33vw, 100vw', bool $lazy = true, string $cls = ''): string {
  $gen = str_contains($img['src'], '/generated/');
  $ws = [480, 960, 1600];
  $alt = e($img['alt'] ?? '');
  $load = $lazy ? ' loading="lazy" decoding="async"' : ' fetchpriority="high"';
  if ($gen) {
    $base = preg_replace('/-\d+$/', '', $img['src']);
    $webp = implode(', ', array_map(fn($w) => "$base-$w.webp {$w}w", $ws));
    $jpg = implode(', ', array_map(fn($w) => "$base-$w.jpg {$w}w", $ws));
    return "<picture><source type=\"image/webp\" srcset=\"$webp\" sizes=\"$sizes\"><img class=\"$cls\" src=\"$base-960.jpg\" srcset=\"$jpg\" sizes=\"$sizes\" width=\"{$img['w']}\" height=\"{$img['h']}\" alt=\"$alt\"$load></picture>";
  }
  return "<picture><source type=\"image/webp\" srcset=\"{$img['src']}.webp\"><img class=\"$cls\" src=\"{$img['src']}.{$img['ext']}\" width=\"{$img['w']}\" height=\"{$img['h']}\" alt=\"$alt\"$load></picture>";
}

function product_cards(): string {
  $out = '';
  foreach (products() as $p) {
    $cats = e(implode(' ', $p['category']));
    $badge = e(strtoupper($p['category'][0]));
    $out .= "\n<a class=\"pcard\" href=\"/products/{$p['slug']}\" data-cat=\"$cats\">
  <div class=\"pcard__media\">" . picture($p['images'][0]) . "<span class=\"pcard__badge\">$badge</span></div>
  <div class=\"pcard__body\"><div class=\"pcard__tag\">" . e($p['tagline']) . "</div><h3 class=\"pcard__t\">" . e($p['name']) . "</h3><p class=\"pcard__d\">" . e($p['summary']) . "</p>
  <div class=\"pcard__foot\"><span class=\"link-arrow\">View specifications " . ARROW . "</span></div></div>
</a>";
  }
  return $out;
}

function product_vars(array $p): array {
  $site = SITE_URL;
  $thumbs = '';
  foreach ($p['images'] as $i => $img) {
    $act = $i === 0 ? ' is-active' : '';
    $thumbs .= "<button class=\"gallery__thumb$act\" type=\"button\" data-index=\"$i\" aria-label=\"Show image " . ($i + 1) . "\">" . picture($img, '120px') . "</button>";
  }
  $specs = implode('', array_map(fn($s) => '<tr><td>' . e($s[0]) . '</td><td>' . e($s[1]) . '</td></tr>', $p['specs']));
  $variants = implode('', array_map(fn($v) => '<li class="variant"><b>' . e($v['size']) . '</b><span>' . e($v['pack']) . '</span></li>', $p['variants']));
  $desc = implode('', array_map(fn($d) => '<p>' . e($d) . '</p>', $p['description']));
  $related = '';
  foreach (array_slice(array_filter(products(), fn($x) => $x['slug'] !== $p['slug']), 0, 3) as $x) {
    $related .= '<a class="card" href="/products/' . $x['slug'] . '"><div class="card__t">' . e($x['name']) . '</div><p class="card__d">' . e($x['tagline']) . '</p></a>';
  }
  $image = $site . $p['images'][0]['src'] . '.' . $p['images'][0]['ext'];
  $ld = ['@context' => 'https://schema.org', '@graph' => [
    ['@type' => 'Product', 'name' => $p['name'], 'description' => $p['summary'], 'image' => $image, 'brand' => ['@type' => 'Brand', 'name' => 'Swanya Pharmaceuticals'], 'manufacturer' => ['@id' => "$site/#organization"], 'category' => implode(', ', array_map('strtoupper', $p['category'])), 'url' => "$site/products/{$p['slug']}"],
    ['@type' => 'BreadcrumbList', 'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => "$site/"],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'Products', 'item' => "$site/products"],
      ['@type' => 'ListItem', 'position' => 3, 'name' => $p['name'], 'item' => "$site/products/{$p['slug']}"]]],
  ]];
  return [
    'P_NAME' => e($p['name']), 'P_META_DESC' => e(clip($p['summary'], 158)), 'P_SLUG' => $p['slug'], 'P_TAGLINE' => e($p['tagline']), 'P_SUMMARY' => e($p['summary']), 'P_DESC' => $desc,
    'P_GALLERY_MAIN' => picture($p['images'][0], '(min-width:1024px) 50vw, 100vw', false, 'gallery__img'), 'P_GALLERY_THUMBS' => $thumbs,
    'P_SPECS' => $specs, 'P_VARIANTS' => $variants, 'P_RELATED' => $related, 'P_DATASHEET' => $p['datasheet'],
    'P_CATS' => implode(' · ', array_map('strtoupper', $p['category'])), 'P_IMAGE' => $image, 'P_IMAGES_JSON' => e(json_encode($p['images'])),
    'P_LD' => json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), 'P_KEYWORDS' => e($p['keywords'] ?? ''),
  ];
}

// ---- Blog -------------------------------------------------------------------
function parse_front_matter(string $raw): array {
  if (!preg_match('/^---\n(.*?)\n---\n?(.*)$/s', $raw, $m)) return [[], $raw];
  $meta = [];
  foreach (explode("\n", $m[1]) as $line) {
    $i = strpos($line, ':');
    if ($i === false) continue;
    $k = trim(substr($line, 0, $i));
    $v = trim(substr($line, $i + 1));
    if (str_starts_with($v, '[') && str_ends_with($v, ']')) $v = array_values(array_filter(array_map('trim', explode(',', substr($v, 1, -1)))));
    else $v = preg_replace('/^"(.*)"$/', '$1', $v);
    $meta[$k] = $v;
  }
  return [$meta, $m[2]];
}

function posts(): array {
  static $posts = null;
  if ($posts !== null) return $posts;
  $posts = [];
  foreach (glob(PRIV . '/content/blog/*.md') as $f) {
    [$meta, $body] = parse_front_matter((string) file_get_contents($f));
    $words = count(preg_split('/\s+/', $body));
    $posts[] = $meta + ['slug' => $meta['slug'] ?? basename($f, '.md'), 'body' => $body, 'readMins' => max(2, (int) round($words / 200))];
  }
  usort($posts, fn($a, $b) => strcmp($b['date'], $a['date']));
  return $posts;
}
function get_post(string $slug): ?array {
  foreach (posts() as $p) if ($p['slug'] === $slug) return $p;
  return null;
}
function fmt_date(string $d): string { return date('j M Y', strtotime($d)); }

function blog_cards(?array $list = null): string {
  $out = '';
  foreach ($list ?? posts() as $p) {
    $search = e(strtolower($p['title'] . ' ' . $p['excerpt'] . ' ' . implode(' ', $p['tags'] ?? [])));
    $out .= "\n<article class=\"acard\" data-cat=\"" . e($p['category']) . "\" data-search=\"$search\">
  <a class=\"acard__media media-zoom\" href=\"/blogs/{$p['slug']}\" tabindex=\"-1\" aria-hidden=\"true\">" . picture(['src' => $p['image'], 'ext' => $p['imageExt'] ?? 'jpg', 'w' => 960, 'h' => 540, 'alt' => '']) . "</a>
  <div class=\"acard__body\">
    <div class=\"acard__meta\">" . e($p['category']) . " · " . fmt_date($p['date']) . " · {$p['readMins']} min read</div>
    <h3 class=\"acard__t\"><a href=\"/blogs/{$p['slug']}\">" . e($p['title']) . "</a></h3>
    <p class=\"acard__d\">" . e($p['excerpt']) . "</p>
    <a class=\"link-arrow\" href=\"/blogs/{$p['slug']}\">Read article " . ARROW . "</a>
  </div>
</article>";
  }
  return $out;
}

function post_vars(array $p): array {
  require_once PRIV . '/vendor/Parsedown.php';
  $site = SITE_URL;
  $img = $site . $p['image'] . (str_contains($p['image'], '/generated/') ? '-1600' : '') . '.' . ($p['imageExt'] ?? 'jpg');
  $ld = ['@context' => 'https://schema.org', '@graph' => [
    ['@type' => 'BlogPosting', 'headline' => $p['title'], 'description' => $p['excerpt'], 'image' => $img, 'author' => ['@type' => 'Organization', 'name' => $p['author'] ?? 'Swanya Pharmaceuticals'], 'publisher' => ['@id' => "$site/#organization"], 'datePublished' => $p['date'], 'dateModified' => $p['updated'] ?? $p['date'], 'mainEntityOfPage' => "$site/blogs/{$p['slug']}"],
    ['@type' => 'BreadcrumbList', 'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => "$site/"],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blogs', 'item' => "$site/blogs"],
      ['@type' => 'ListItem', 'position' => 3, 'name' => $p['title'], 'item' => "$site/blogs/{$p['slug']}"]]],
  ]];
  $related = array_slice(array_filter(posts(), fn($x) => $x['slug'] !== $p['slug']), 0, 3);
  $pd = new Parsedown();
  $pd->setSafeMode(false);
  return [
    'B_TITLE' => e($p['title']), 'B_META_TITLE' => e($p['metaTitle'] ?? clip($p['title'], 52) . ' | Swanya'), 'B_SLUG' => $p['slug'],
    'B_EXCERPT' => e(clip($p['excerpt'], 158)), 'B_CATEGORY' => e($p['category']), 'B_AUTHOR' => e($p['author'] ?? 'Swanya Pharmaceuticals'),
    'B_DATE' => fmt_date($p['date']), 'B_DATE_ISO' => $p['date'], 'B_UPDATED' => fmt_date($p['updated'] ?? $p['date']), 'B_READ' => (string) $p['readMins'],
    'B_HERO' => picture(['src' => $p['image'], 'ext' => $p['imageExt'] ?? 'jpg', 'w' => 1600, 'h' => 900, 'alt' => $p['imageAlt'] ?? $p['title']], '(min-width:1024px) 900px, 100vw', false, 'post__img'),
    'B_BODY' => $pd->text($p['body']), 'B_IMAGE' => $img, 'B_LD' => json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), 'B_RELATED' => blog_cards($related),
    'B_TAGS' => implode(' ', array_map(fn($t) => '<span class="badge">' . e($t) . '</span>', $p['tags'] ?? [])),
  ];
}
function blog_cats(): string {
  $cats = array_values(array_unique(array_map(fn($p) => $p['category'], posts())));
  return implode('', array_map(fn($c) => '<button type="button" data-filter="' . e($c) . '">' . e($c) . '</button>', $cats));
}

// ---- Testimonials -------------------------------------------------------------
function testimonial_carousel(): string {
  $cards = '';
  foreach (content_json('testimonials.json') as $t) {
    $cards .= '<blockquote class="tcard"><p>' . e($t['quote']) . '</p><footer><div class="tcard__av" aria-hidden="true">' . e($t['initials']) . '</div><div><b>' . e($t['name']) . '</b><small>' . e($t['role']) . '</small></div></footer></blockquote>';
  }
  return '<div class="tcarousel" data-carousel><div class="tcarousel__track" tabindex="0" aria-label="Testimonials">' . $cards . '</div>
<div class="tcarousel__nav"><button class="tcarousel__btn" type="button" data-dir="-1" aria-label="Previous testimonials"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 6-6 6 6 6"/></svg></button><button class="tcarousel__btn" type="button" data-dir="1" aria-label="Next testimonials"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 6 6 6-6 6"/></svg></button></div></div>';
}

// ---- Jobs / FAQ ---------------------------------------------------------------
function jobs(): array { return content_json('jobs.json'); }
function job_cards(): string {
  $list = jobs();
  if (!$list) return '<p class="todo">No current openings. Send a speculative application using the form below.</p>';
  $out = '';
  foreach ($list as $j) {
    $li = fn($a) => implode('', array_map(fn($r) => '<li>' . e($r) . '</li>', $a));
    $out .= "\n<article class=\"job\" id=\"" . e($j['slug']) . "\">
  <div class=\"job__head\"><h3 class=\"job__t\">" . e($j['title']) . "</h3><span class=\"badge\">" . e($j['type']) . "</span></div>
  <div class=\"job__meta\"><span>" . e($j['department']) . "</span><span>" . e($j['location']) . "</span><span>" . e($j['experience']) . "</span></div>
  <p>" . e($j['summary']) . "</p>
  <details class=\"job__more\"><summary>Responsibilities &amp; requirements</summary>
    <h4>Responsibilities</h4><ul>" . $li($j['responsibilities']) . "</ul>
    <h4>Requirements</h4><ul>" . $li($j['requirements']) . "</ul></details>
  <a class=\"btn btn--primary btn--sm\" href=\"#apply\" data-job=\"" . e($j['title']) . "\">Apply for this role</a>
</article>";
  }
  return $out;
}
function jobs_ld(): string {
  $site = SITE_URL;
  return json_encode(array_map(fn($j) => [
    '@context' => 'https://schema.org', '@type' => 'JobPosting', 'title' => $j['title'],
    'description' => $j['summary'] . ' Responsibilities: ' . implode('; ', $j['responsibilities']) . '. Requirements: ' . implode('; ', $j['requirements']) . '.',
    'datePosted' => $j['datePosted'], 'validThrough' => $j['validThrough'], 'employmentType' => str_replace('-', '_', strtoupper($j['type'])),
    'hiringOrganization' => ['@type' => 'Organization', 'name' => 'Swanya Pharmaceuticals Pvt Ltd', 'sameAs' => "$site/"],
    'jobLocation' => ['@type' => 'Place', 'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Baddi', 'addressRegion' => 'Himachal Pradesh', 'addressCountry' => 'IN']],
  ], jobs()), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}
function job_options(): string { return implode('', array_map(fn($j) => '<option>' . e($j['title']) . '</option>', jobs())); }

function faqs(): array { return content_json('faqs.json'); }
function faq_groups(): string {
  $n = 0; $out = '';
  foreach (faqs() as $g) {
    $id = preg_replace('/[^a-z]+/', '-', strtolower($g['category']));
    $out .= "\n<section class=\"faq__group\" id=\"$id\" aria-labelledby=\"fq-$n\">\n  <h2 class=\"h-md\" id=\"fq-" . $n++ . "\">" . e($g['category']) . "</h2>";
    foreach ($g['items'] as $it) {
      $aid = 'acc-' . $n++;
      $out .= "\n  <div class=\"acc\"><h3><button class=\"acc__btn\" type=\"button\" aria-expanded=\"false\" aria-controls=\"$aid\">" . e($it['q']) . "<svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\"><path d=\"M12 5v14M5 12h14\"/></svg></button></h3>
  <div class=\"acc__panel\" id=\"$aid\"><div><div class=\"acc__body\">" . e($it['a']) . "</div></div></div></div>";
    }
    $out .= "\n</section>";
  }
  return $out;
}
function faq_ld(): string {
  $main = [];
  foreach (faqs() as $g) foreach ($g['items'] as $it) $main[] = ['@type' => 'Question', 'name' => $it['q'], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $it['a']]];
  return json_encode(['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $main], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

function product_list_rows(): string {
  $out = '';
  foreach (products() as $p) {
    $fill = '';
    foreach ($p['specs'] as $s) if (preg_match('/fill volume/i', $s[0])) { $fill = $s[1]; break; }
    $out .= '<tr><td><a href="/products/' . $p['slug'] . '">' . e($p['name']) . '</a></td><td>' . e($fill) . '</td><td>' . implode(', ', array_map('strtoupper', $p['category'])) . '</td><td><a class="link-arrow" href="' . $p['datasheet'] . '" data-modal="download" data-file="' . $p['datasheet'] . '" data-title="' . e($p['name']) . ' datasheet">Datasheet</a></td></tr>';
  }
  return $out;
}
