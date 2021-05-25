<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>imusic</title>
  <link rel="stylesheet" href="/assets/main.css">
</head>
<body>
  <div class="thecontent">
    <header>
<?php if (is_home()) { echo '<h1 class="logo">'; } else { echo '<p class="logo">'; } ?>
      <a href="/"><?=get_bloginfo('name');?></a>
<?php if (is_home()) { echo '</h1>'; } else { echo '</p>'; } ?>
      
      <a class="btn_toggle_menu" id="btn_menu" onclick="toggle_menu()"><img src="/assets/menu.svg" alt="menu"></a>
    </header>
    <main class="main_contents">
