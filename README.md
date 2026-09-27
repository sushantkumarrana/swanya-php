# Swanya Pharmaceuticals — PHP edition

Same front-end (HTML/CSS/vanilla JS) as the Node build, with the server side ported to plain PHP 8 for shared hosting (cPanel / Apache). No framework, no Composer.

## Layout

`site/` is the document root. Hostinger's GitHub deployment copies the contents
of its configured root directory into `public_html`, and that picker only offers
subdirectories — hence the folder. `site/package.json` exists because the
pipeline runs the package manager there; the site has no dependencies.

```
site/
*.php               pages (index, about, manufacturing, products, product, blogs, blog, contact, careers, faq, downloads, company-profile, privacy-policy, terms-and-conditions, thank-you, thank-you-download, 404, 500)
api/                contact.php, enquiry.php, download.php, careers.php (JSON endpoints)
css/ js/ assets/    static files
sitemap.php robots.php .htaccess
private/            config, data, content, partials — its .htaccess (`Require all denied`) blocks web access
  config.php        live values (no secrets; keep it that way, the repo is public)
  inc/              bootstrap.php, content.php, form.php, head/header/footer/modals partials
  data/             site.json, products.json, faqs.json, jobs.json, testimonials.json
  content/blog/     *.md posts
  vendor/           Parsedown.php (Markdown)
  submissions/      *.jsonl form records (git-ignored, auto-created)
  uploads/cv/       career CVs (git-ignored, auto-created)
  tmp/              rate-limit counters (git-ignored)
```

`private/` sits inside `site/` because Hostinger's deployment only
writes there. Apache denies it; `dev-router.php` does the same locally.

## Setup
1. `private/config.php` is committed with the live values. Never put a secret in it — this repo is public.
2. Ensure PHP ≥ 8.1, `mod_rewrite`, and that `mail()` works on the host (or swap `send_mail()` in `inc/form.php` for PHPMailer/SMTP).
3. Make `private/submissions`, `private/uploads`, `private/tmp` writable by PHP.

## Local test
```bash
php -S localhost:8080 -t site dev-router.php
```
`dev-router.php` emulates the `.htaccess` rewrites for PHP's built-in server only.

## Deploying

Push to `main`. Hostinger's GitHub deployment for swanyapharma.com picks it up.

## Regenerating from the Node source
Pages are generated from the HTML/partials in the main repo: `python3 scripts/build-php.py` (run from the repo root). Edit content in `private/data` / `private/content`, not the generated markup, unless you are dropping the Node edition entirely.
