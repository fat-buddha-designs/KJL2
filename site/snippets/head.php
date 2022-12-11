<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="ahrefs-site-verification" content="ba2f38c836ed118a0c19b2bd126e8027a89836961a930b580d07efa37119430c" />
  <title><?= $page->pagetitle() ?> | <?= $site->companyname() ?></title>
  <meta name="description" content="<?= $page->description()->html() ?>" />
  <meta name="keywords" content="<?= $page->keywords()->html() ?>" />
  <meta name="author" content="<?= $site->companyname() ?>" />
  <meta property="og:title" content="<?= $page->pagetitle() ?> | <?= $site->companyname() ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo html($site->url()) ?>" />
  <meta property="og:site_name" content="<?= $site->companyname() ?>" />
  <meta property="og:description" content="<?= $page->description()->html() ?>" />
  <?php if($image = $page->pageimage()->toFile()): ?>
<meta property="og:image" content="<?= $image->url() ?>" />
  <?php endif ?>
<meta name="twitter:card" content="large_summary" />
  <meta name="twitter:site" content="<?php echo html($site->twitterurl()) ?>" />
  <meta name="twitter:creator" content="<?php echo html($site->twittercreator()) ?>" />
  <meta name="twitter:title" content="<?= $page->pagetitle() ?> | <?= $site->companyname() ?>" />
  <meta name="twitter:description" content="<?= $page->description()->html() ?>" />
  <?php if($image = $page->pageimage()->toFile()): ?>
<meta property="twitter:image" content="<?= $image->url() ?>" />
  <?php endif ?>
  <script type="text/javascript" src="https://platform.twitter.com/widgets.js" async />
  <?php snippet('json-ld') ?>

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="preload" href="/assets/fonts/pt-serif-v9-latin-regular.woff2" as="font" type="font/woff2" crossorigin />
  <link rel="preload" href="/assets/fonts/pt-serif-v9-latin-regular.woff" as="font" type="font/woff" crossorigin />
  <link rel="preload" href="/assets/fonts/pontano-sans-v5-latin-regular.woff2" as="font" type="font/woff2" crossorigin />
  <link rel="preload" href="/assets/fonts/pontano-sans-v5-latin-regular.woff" as="font" type="font/woff" crossorigin />
  <?= vite()->client() ?>
  <?= vite()->css() ?>

  <!-- Favicon -->
  <link rel="icon" href="./favicon.ico" type="image/x-icon" />
  <link rel="icon" href="favicon.svg" type="image/svg+xml" />
  <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
  <link rel="manifest" href="/site.webmanifest" />
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="theme-color" content="#ffffff" />
  <meta name="robots" content="<?php echo html($page->robotsindex()) ?>, <?php echo html($page->robotsfollow()) ?>" />
  <link rel="shortlink" href="<?php echo html($site->url()) ?>" />
  <link rel="canonical" href="<?php echo html($page->url()) ?>" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /></script>
  <script>
    var first = "<?php echo html($site->firstemail()) ?>";
    var last = "<?php echo html($site->secondemail()) ?>";
  </script>
</head>
<body id="page-top" role="application">
    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
