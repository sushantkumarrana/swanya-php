<?php
// Local dev only: `php -S localhost:8080 -t site dev-router.php` — emulates the .htaccess rewrites.
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$root = __DIR__ . '/site';
if (str_starts_with($path, '/private/')) { http_response_code(403); echo 'Forbidden'; return true; }  // .htaccess does this on Apache
if ($path !== '/' && is_file($root . $path)) return false;                       // static asset
$map = [
  '#^/products/([a-z0-9-]+)$#' => ['product.php', 'slug'],
  '#^/blogs/([a-z0-9-]+)$#' => ['blog.php', 'slug'],
];
foreach ($map as $re => [$file, $param]) if (preg_match($re, $path, $m)) { $_GET[$param] = $m[1]; require "$root/$file"; return true; }
$direct = ['/api/careers/apply' => 'api/careers.php', '/api/contact' => 'api/contact.php', '/api/enquiry' => 'api/enquiry.php', '/api/download' => 'api/download.php', '/sitemap.xml' => 'sitemap.php', '/robots.txt' => 'robots.php', '/' => 'index.php'];
if (isset($direct[$path])) { require "$root/{$direct[$path]}"; return true; }
if (preg_match('#^/([a-z0-9-]+)$#', $path, $m) && is_file("$root/$m[1].php")) { require "$root/$m[1].php"; return true; }
http_response_code(404); require "$root/404.php"; return true;
