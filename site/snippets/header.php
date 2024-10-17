<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This header snippet is reused in all templates.
  It fetches information from the `site.txt` content file
  and contains the site navigation.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<!DOCTYPE html>
<html lang="de-CH">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

  <?php
  /*
    In the title tag we show the title of our
    site and the title of the current page
  */
  ?>
  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?php
  /*
    Stylesheets can be included using the `css()` helper.
    Kirby also provides the `js()` helper to include script file.
    More Kirby helpers: https://getkirby.com/docs/reference/templates/helpers
  */
  ?>
  <?= css([
    'assets/css/index.css',
    'assets/css/snippets/header.css',
    'assets/css/cursor.css',
    '@auto'
  ]) ?>

   <?= js([
    'assets/js/jquery-3.6.0.slim.min.js',
    'assets/js/rellax.min.js'
  ]) ?>

  <?php
  /*
    The `url()` helper is a great way to create reliable
    absolute URLs in Kirby that always start with the
    base URL of your site.
  */
  ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chewy&family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
  // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
  window.onscroll = function() {scrollFunction()};

  function toggleNavigation() {
    var x = document.getElementById("navbar-menu");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
</script>
<script>
  jQuery(document).ready( function() {

   var rellax = new Rellax('.rellax');
  })
</script>
</head>
<body id="app">
  <div id="navbar">
    <div class="navbar__logo">
      <a href="<?= $pages->find('home')->url() ?>" id="logo" class="logo">
        <?= svg('assets/images/LogoMitBG.svg') ?>
      </a>
    </div>
    <div class="navbar-top" id="navbar-top">
      <a class="<?= $pages->find('home')->isOpen() ? 'active' : '' ?>" href="/">Startseite</a>
      <a class="<?= $pages->find('frauezmorge')->isOpen() ? 'active' : '' ?>" href="/frauezmorge">Frauezmorge</a>
      <a class="<?= $pages->find('team')->isOpen() ? 'active' : '' ?>" href="/team">Über uns</a>
    </div>
    <a class="navbar-icon" href="javascript:void(0);" class="icon" onclick="toggleNavigation()">
      <i class="fa fa-bars"></i>
    </a>
    <div class="navbar-menu" id="navbar-menu">
      <a href="/">Startseite</a>
      <a href="/frauezmorge">Frauezmorge</a>
      <a href="/team">Über uns</a>
    </div>
  </div>
  <div id="site-content" class="content">
