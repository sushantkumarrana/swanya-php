<?php
require_once __DIR__ . '/private/inc/bootstrap.php';
header('Content-Type: application/xml; charset=utf-8');
$site = SITE_URL;
$urls = [];
foreach (['', 'about', 'manufacturing', 'products', 'blogs', 'contact', 'careers', 'faq', 'downloads', 'company-profile', 'privacy-policy', 'terms-and-conditions'] as $p) {
  $urls[] = ["$site/$p", date('Y-m-d', filemtime(__DIR__ . '/' . ($p ?: 'index') . '.php'))];
}
foreach (products() as $p) $urls[] = ["$site/products/{$p['slug']}", date('Y-m-d', filemtime(PRIV . '/data/products.json'))];
foreach (posts() as $b) $urls[] = ["$site/blogs/{$b['slug']}", $b['updated'] ?? $b['date']];
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
foreach ($urls as [$loc, $mod]) echo "  <url><loc>" . e($loc) . "</loc><lastmod>$mod</lastmod></url>\n";
echo "</urlset>\n";
