<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <?php
    $title = $page->title();
  ?>

  <?php if ($title == "Home"): ?>
    <title><?= $site->title() ?></title>
    <meta name="description" content="<?= $site->meta_description()->excerpt(200); ?>">
  <?php else: ?>
    <title><?= $title ?> | <?= $site->title() ?></title>
    <meta name="description" content="<?= $page->main_content()->excerpt(200); ?>">
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
