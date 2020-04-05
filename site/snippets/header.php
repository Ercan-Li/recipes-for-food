<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="white">
  <meta name="apple-mobile-web-app-title" content="<?= $site->title(); ?>">

  <link rel="apple-touch-icon" href="/assets/icons/apple-icon-01.png">
  <link rel="icon" href="/assets/icons/favicon-01.png" >
  <meta property="og:image" content="/assets/icons/og-image-01.png">
  <meta name="twitter:card" content="summary_large_image">


  <?php
    $title = $page->title();
  ?>

  <?php if ($title == "Home"): ?>
    <title><?= $site->title() ?></title>
    <meta property="og:title" content="<?= $site->title() ?>">
    <meta name="description" content="<?= $site->meta_description()->excerpt(200); ?>">
    <meta property="og:description" content="<?= $site->meta_description()->excerpt(200); ?>">
  <?php else: ?>
    <title><?= $title; ?> | <?= $site->title(); ?></title>
    <meta property="og:title" content="<?= $title; ?> | <?= $site->title(); ?>">
    <meta name="description" content="<?= $page->main_content()->excerpt(200); ?>">
    <meta property="og:description" content="<?= $page->main_content()->excerpt(200); ?>">
  <?php endif; ?>

  <?= css(['assets/css/fonts/stylesheet.css', 'assets/css/main.css', '@auto']);?>
  <?= js(['assets/js/main.js', '@auto']); ?>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '<?= $site->ga(); ?>', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body class="layout-wrapper">
