<?php
require_once __DIR__ . '/private/inc/bootstrap.php';
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
<?php include PRIV . '/inc/head.php'; ?>
<title>Page Not Found — Swanya Pharmaceuticals</title>
<meta name="description" content="The page you requested could not be found on the Swanya Pharmaceuticals website. Browse our sterile liquid products, manufacturing capabilities or contact us.">
<meta name="robots" content="noindex">
</head>
<body>
<?php include PRIV . '/inc/header.php'; ?>
<main id="main">
  <section class="phero" aria-labelledby="h1">
    <div class="phero__mesh"></div>
    <div class="container">
      <span class="eyebrow">Error 404</span>
      <h1 id="h1">This page has evaporated.</h1>
      <p class="lead">The link may be outdated or the page has moved. Try one of the routes below, or search our products.</p>
      <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:32px">
        <a class="btn btn--white" href="/">Back to Home</a>
        <a class="btn btn--light" href="/products">Browse Products</a>
        <a class="btn btn--light" href="/contact">Contact Us</a>
      </div>
    </div>
  </section>
</main>
<?php include PRIV . '/inc/footer.php'; ?>
</body>
</html>
