<?php
include_once('build.php'); //App Host Path = $build or $host
include_once('DatabaseConfig.php'); //App Database Connection
include_once('functions.php'); //App Classes
?>
<!-- Designed by Sachiel Kemmer - Freelance Developer -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="SachielKemmer">
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:image:src" content="<?= $build; ?>assets/images/index-meta.jpg">
<meta property="og:image" content="<?= $build; ?>assets/images/index-meta.jpg">
<meta name="twitter:title" content="Home">
<link rel="shortcut icon" href="<?= $build; ?>assets/images/logo.png" type="image/x-icon">

<link rel="stylesheet" href="<?= $build; ?>assets/web/assets/mobirise-icons2/mobirise2.css">
<link rel="stylesheet" href="<?= $build; ?>assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= $build; ?>assets/bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="<?= $build; ?>assets/bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="<?= $build; ?>assets/animatecss/animate.css">
<link rel="stylesheet" href="<?= $build; ?>assets/dropdown/css/style.css">
<link rel="stylesheet" href="<?= $build; ?>assets/socicon/css/styles.css">
<link rel="stylesheet" href="<?= $build; ?>assets/theme/css/style.css">
<link rel="stylesheet" href="<?= $build; ?>assets/recaptcha.css">
<link rel="preload" href="https://fonts.googleapis.com/css?family=Bellota+Text:300,300i,400,400i,700,700i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
<style>
  @font-face {
    font-family: 'Bellota Text';
    font-display: swap;
    /* src: url('</?= $build; ?>assets/web/assets/google-fonts/BellotaText-Bold.ttf?f2bix4'); */
    src:
      /* url('</?= $build; ?>assets/web/assets/google-fonts/BellotaText-BoldItalic.ttf?f2bix4#iefix') format('truetype'), */
      /* url('</?= $build; ?>assets/web/assets/google-fonts/BellotaText-Italic.ttf?f2bix4') format('truetype'), */
      url('<?= $build; ?>assets/web/assets/google-fonts/BellotaText-Light.ttf?f2bix4') format('truetype');
    /* url('</?= $build; ?>assets/web/assets/google-fonts/BellotaText-LightItalic.ttf?f2bix4') format('truetype'), */
    /* url('</?= $build; ?>assets/web/assets/google-fonts/BellotaText-Regular.ttf?f2bix4') format('truetype'); */
    font-weight: normal;
    font-style: normal;
  }
</style>
<noscript>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bellota+Text:300,300i,400,400i,700,700i&display=swap">
</noscript>
<link rel="preload" as="style" href="<?= $build; ?>assets/mobirise/css/mbr-additional.css">
<link rel="stylesheet" href="<?= $build; ?>assets/mobirise/css/mbr-additional.css" type="text/css">

<script src="<?= $build; ?>assets/web/assets/lazyload/lazyload.js"></script>