<!-- meta template -->
<!-- changes go in settings, not template -->

<!-- crawl -->
<meta name="robots" content="<?php echo $website_page->robots; ?>">
<link rel="canonical" href="<?php echo $current_url; ?>">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- description -->
  <title><?php echo $website_page->title; ?></title>
  <meta name="keywords" content="<?php echo $website_page->keywords; ?>">
  <meta name="description" content="<?php echo $website_page->description; ?>">

<!-- Favicon -->
  <!-- Sponsered by https://realfavicongenerator.net/ -->
  <!-- favicon.ico in /assets/favicons + root level -->
  <!-- changes in manifest.json + browserconfig.xml ! -->
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $website_url; ?>assets/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $website_url; ?>assets/favicons/favicon-16x16.png">
  <link rel="mask-icon" href="<?php echo $website_url; ?>assets/favicons/safari-pinned-tab.svg" color="#008c48">
  <link rel="shortcut icon" href="<?php echo $website_url; ?>assets/favicons/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $website_url; ?>assets/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $website_url; ?>assets/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $website_url; ?>assets/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $website_url; ?>assets/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $website_url; ?>assets/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $website_url; ?>assets/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $website_url; ?>assets/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $website_url; ?>assets/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $website_url; ?>assets/favicons/apple-touch-icon-180x180.png">
  <meta name="msapplication-config" content="<?php echo $website_url; ?>assets/favicons/browserconfig.xml">
  <meta name="msapplication-TileColor" content="<?php echo $brand_color; ?>">
  <meta name="msapplication-TileImage" content="<?php echo $website_url; ?>assets/favicons/mstile-144x144.png">

