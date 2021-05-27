<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@imusic_works">
  <meta property="og:url" content="http://imusic-works.net<?= $_SERVER['REQUEST_URI']?>">
  <meta property="og:title" content="
<?php
wp_title('|', true, 'right');
bloginfo('name');?>
">
<?php
if(is_home()) { $desc = get_bloginfo('description'); }
if(is_category()) { $desc = strip_tags(category_description()); }
if(is_single()) { $desc = strip_tags(get_the_excerpt()); }
?>
  <meta property="og:description" content="<?=$desc?>">
  <meta property="og:image" content="http://2022.imusic-works.net/assets/favicon@0.5x.png">
  <title>
    <?php wp_title('|', true, 'right');
    bloginfo('name');?>
  </title>
  <link rel="canonical" href="http://imusic-works.net<?= $_SERVER['REQUEST_URI'] ?>">
  <link rel="stylesheet" href="/assets/main.css">
  <link rel="shortcut icon" href="/assets/favicon.svg" type="image/svg+xml">
</head>
<body>
  <div class="thecontent">
    <header class="">
      <?php if (is_home()) { echo '<h1 class="logo">'.PHP_EOL; } else { echo '<p class="logo">'.PHP_EOL; } ?>
        <a href="/"><?=get_bloginfo('name');?></a>
      <?php if (is_home()) { echo '</h1>'; } else { echo '</p>'; } ?>
      
      <a class="btn_toggle_menu" id="btn_menu" onclick="toggle_menu()"><img src="/assets/menu.svg" alt="menu" width="48" height="48"></a>
    </header>
    <main class="main_contents">
