<?php
require_once __DIR__ . '/private/inc/bootstrap.php';
header('Content-Type: text/plain; charset=utf-8');
echo "User-agent: *\nAllow: /\nDisallow: /api/\nDisallow: /thank-you\nDisallow: /thank-you-download\n\nSitemap: " . SITE_URL . "/sitemap.xml\n";
