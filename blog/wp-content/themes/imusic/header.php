<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@imusic_works">
  <meta property="og:url" content="http://imusic-works.net<?=$_SERVER['REQUEST_URI']?>">
<?php
if(is_home()) { $type = 'website'; }
else { $type = 'article'; }
?>
  <meta property="og:type" content="<?=$type?>">
  <meta property="og:title" content="
<?php
wp_title( '|', true, 'right' );
bloginfo( 'name' );?>
">
<?php
if(is_home()) { $desc = get_bloginfo( 'description' ); }
if(is_category()) { $desc = strip_tags( category_description() ); }
if(is_single()) { $desc = strip_tags( get_the_excerpt() ); }
?>
  <meta property="og:description" content="<?=$desc?>">
  <meta property="og:image" content="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/favicon@0.5x.png">
  <title>
    <?php wp_title('|', true, 'right');
    bloginfo( 'name');?>
  </title>
  <link rel="canonical" href="http://imusic-works.net<?= $_SERVER['REQUEST_URI'] ?>">
  <link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="<?= bloginfo( 'stylesheet_uri' ); ?>">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-KG9VPKP8TS"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push( arguments ); }
    gtag('js', new Date());

    gtag('config', 'G-KG9VPKP8TS');
  </script>
  <?php wp_head(); ?>
</head>
<body>
  <div class="thecontent">
    <header class="">
      <?php if (is_home()) { echo '<h1 class="logo">'.PHP_EOL; } else { echo '<p class="logo">'.PHP_EOL; } ?>
        <a href="/"><?=get_bloginfo( 'name');?></a>
      <?php if (is_home()) { echo '</h1>'; } else { echo '</p>'; } ?>
      
      <a href="javascript:void();" class="btn_toggle_menu" id="btn_menu" onclick="toggle_menu()"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/menu.svg" alt="menu" width="48" height="48"></a>
    </header>
    <main class="main_contents">
