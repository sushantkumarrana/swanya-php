<?php
// Temporary deployment check — DELETE after go-live. Open /diag.php
header('Content-Type: text/plain');
ini_set('display_errors', '1'); error_reporting(E_ALL);
echo "PHP: " . PHP_VERSION . " (need >= 7.4; 8.x recommended)\n";
echo "SAPI: " . PHP_SAPI . "\n";
echo "mod_rewrite: " . (function_exists('apache_get_modules') ? (in_array('mod_rewrite', apache_get_modules()) ? 'yes' : 'NO') : 'unknown (FPM/CGI — usually yes)') . "\n";
echo "DOCUMENT_ROOT: " . ($_SERVER['DOCUMENT_ROOT'] ?? '?') . "\n";
echo "__DIR__: " . __DIR__ . "\n";
foreach (['/../private/inc/bootstrap.php', '/../private/config.php', '/../private/data/products.json', '/../private/vendor/Parsedown.php', '/.htaccess', '/about.php', '/product.php'] as $f) {
  echo str_pad($f, 40) . (file_exists(__DIR__ . $f) ? 'OK' : 'MISSING') . "\n";
}
foreach (['/../private/submissions', '/../private/uploads', '/../private/tmp'] as $d) echo str_pad($d, 40) . (is_writable(__DIR__ . $d) ? 'writable' : 'NOT writable') . "\n";
echo "mbstring: " . (extension_loaded('mbstring') ? 'yes' : 'NO — required') . "\n";
echo "fileinfo: " . (extension_loaded('fileinfo') ? 'yes' : 'NO — needed for CV upload') . "\n\n";
echo "--- Rendering about.php through bootstrap:\n";
try { require_once __DIR__ . '/../private/inc/bootstrap.php'; echo "bootstrap OK; products: " . count(products()) . "; posts: " . count(posts()) . "\n"; echo "picture(): " . strlen(product_cards()) . " bytes\n"; }
catch (Throwable $e) { echo "ERROR: " . get_class($e) . ': ' . $e->getMessage() . ' @ ' . $e->getFile() . ':' . $e->getLine() . "\n"; }
