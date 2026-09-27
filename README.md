# Swanya Pharmaceuticals — PHP edition

Same front-end (HTML/CSS/vanilla JS) as the Node build, with the server side ported to plain PHP 8 for shared hosting (cPanel / Apache). No framework, no Composer.

## Upload layout

```
public_html/        ← document root (upload contents here)
  *.php             pages (index, about, manufacturing, products, product, blogs, blog, contact, careers, faq, downloads, company-profile, privacy-policy, terms-and-conditions, thank-you, thank-you-download, 404, 500)
  api/              contact.php, enquiry.php, download.php, careers.php (JSON endpoints)
  css/ js/ assets/  static files (identical to Node build)
  sitemap.php robots.php .htaccess
private/            ← one level ABOVE document root (not web-accessible)
  config.php        copy of config.example.php with real values
  inc/              bootstrap.php, content.php, form.php, head/header/footer/modals partials
  data/             site.json, products.json, faqs.json, jobs.json, testimonials.json
  content/blog/     *.md posts
  vendor/           Parsedown.php (Markdown)
  submissions/      *.jsonl form records (auto-created)
  uploads/cv/       career CVs (auto-created)
  tmp/              rate-limit counters
```

If the host does not allow a sibling folder above `public_html`, put `private/` inside `public_html/` — its `.htaccess` (`Require all denied`) blocks web access — and change the two `require_once … '/../private/…'` paths in `public_html/*.php` and `api/*.php` accordingly (`sed -i "s#/../private/#/private/#"`).

## Setup
1. `cp private/config.example.php private/config.php`, set `SITE_URL`, mail addresses, GTM ID.
2. Ensure PHP ≥ 8.1, `mod_rewrite`, and that `mail()` works on the host (or swap `send_mail()` in `inc/form.php` for PHPMailer/SMTP).
3. Make `private/submissions`, `private/uploads`, `private/tmp` writable by PHP.
4. Once SSL/DNS are live, uncomment the HTTPS/www block in `.htaccess`.

## Local test
```bash
php -S localhost:8080 -t public_html dev-router.php
```
`dev-router.php` emulates the `.htaccess` rewrites for PHP's built-in server only.

## Regenerating from the Node source
Pages are generated from the HTML/partials in the main repo: `python3 scripts/build-php.py` (run from the repo root). Edit content in `private/data` / `private/content`, not the generated markup, unless you are dropping the Node edition entirely.
