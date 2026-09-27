<?php
/**
 * Bootstrap: paths, config, site-wide template variables, helpers.
 * Every page starts with: require_once __DIR__ . '/../private/inc/bootstrap.php';
 */
declare(strict_types=1);

define('PRIV', dirname(__DIR__));                 // /private
define('PUB', dirname(PRIV));    // document root

$cfg = PRIV . '/config.php';
require file_exists($cfg) ? $cfg : PRIV . '/config.example.php';
require PRIV . '/inc/content.php';

/** PHP 7.4 polyfills (hosts still ship 7.4). */
if (!function_exists('str_contains')) { function str_contains(string $h, string $n): bool { return $n === '' || strpos($h, $n) !== false; } }
if (!function_exists('str_starts_with')) { function str_starts_with(string $h, string $n): bool { return strncmp($h, $n, strlen($n)) === 0; } }
if (!function_exists('str_ends_with')) { function str_ends_with(string $h, string $n): bool { return $n === '' || substr($h, -strlen($n)) === $n; } }

/** HTML-escape. */
function e(?string $s): string { return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8'); }

$SITE = json_decode((string) file_get_contents(PRIV . '/data/site.json'), true);

/** Template variables, referenced in pages as <?= v('NAME') ?>. Pages may add/override before including partials. */
$V = [
  'SITE_URL'       => SITE_URL,
  'PHONE'          => $SITE['phone'],
  'PHONE_TEL'      => $SITE['phoneTel'],
  'EMAIL'          => $SITE['email'],
  'HOURS'          => $SITE['hours'],
  'WA_LINK'        => 'https://wa.me/' . $SITE['whatsapp'] . '?text=' . rawurlencode('Hello Swanya Pharmaceuticals, I would like to enquire about '),
  'HEADER_CLASS'   => 'header--dark',
  'YEAR'           => date('Y'),
  'ANALYTICS_HEAD' => (GSC_VERIFICATION ? '<meta name="google-site-verification" content="' . e(GSC_VERIFICATION) . '">' . "\n" : '')
    . (GTM_ID ? "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','" . e(GTM_ID) . "');</script>\n" : ''),
  'ANALYTICS_BODY' => GTM_ID ? '<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=' . e(GTM_ID) . '" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>' . "\n" : '',
];

function v(string $key): string { global $V; return (string) ($V[$key] ?? ''); }

/** Security headers (mirrors helmet config). */
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' https://www.googletagmanager.com https://www.google.com https://www.gstatic.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: https:; frame-src https://www.google.com https://maps.google.com; connect-src 'self' https://www.google-analytics.com https://region1.google-analytics.com; object-src 'none'");
