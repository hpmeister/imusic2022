<?php
?>
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
      <h1 class="logo"><?=get_bloginfo('name');?></h1>
      <a class="btn_toggle_menu" id="btn_menu" onclick="toggle_menu()"><img src="/assets/menu.svg" alt="menu"></a>
    </header>
    <main class="main_contents">
      <article id="members">
        <div class="wrapper">
          <div class="flex_hori">
            <div class="member flex_vert">
              <p class="img_block"><img src="http://placehold.jp/220x220.png" alt="member1"></p>
              <h2 class="name">imusic</h2>
              <p class="descri">Guitarist</p>
              <p class="equip">Fender ST314, Fender STM, VOX MV50Rock, JimDunlop CryBaby, Boss DD-500, Digitech Genesis3</p>
            </div>
            <div class="member flex_vert">
              <p class=""><img src="http://placehold.jp/220x220.png" alt="member1"></p>
              <h2 class="name">imusic</h2>
              <p class="descri">Bassist</p>
              <p class="equip">Eden WTDI</p>
            </div>
            <div class="member flex_vert">
              <p class=""><img src="http://placehold.jp/220x220.png" alt="member1"></p>
              <h2 class="name">imusic</h2>
              <p class="descri">Midi Programer</p>
              <p class="equip">AbltonLive9, AbletonPush2, Korg microKEY, Apple iMac, NativeInstruments KomplateAudio6</p>
            </div>
          </div>
        </div>
      </article>
      <article id="souncloud">
        <div class="wrapper soundcloud_frame">
          <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/28827747&color=%23b9b3b2&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
        </div>
      </article>
    </main>
    <footer class="">
      <p class="small_text">copyright 2022 imusic All Rights Reserved.</p>
    </footer>
  </div>
  <nav id="toggle_menu" style="display: none;"><?php get_template_part('inc/overlay_menu');?></nav>
  <script src="/assets/main.js"></script>
</body>
</html>