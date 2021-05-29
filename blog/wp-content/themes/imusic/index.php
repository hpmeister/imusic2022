<?php
/* 
index.php
 */
get_header();?>

      <article id="members">
        <div class="wrapper">
          <div class="flex_hori">
            <div class="member flex_vert">
              <p class="img_block"><img src="http://placehold.jp/220x220.png" width="220" alt="imusic"></p>
              <h2 class="name">imusic</h2>
              <p class="descri">Guitar</p>
              <p class="equip">Fender ST314, Fender STM, VOX MV50Rock, JimDunlop CryBaby, Boss DD-500, Digitech Genesis3</p>
            </div>
            <div class="member flex_vert">
              <p class="img_block"><img src="http://placehold.jp/220x220.png" width="220" alt="imusic"></p>
              <h2 class="name">imusic</h2>
              <p class="descri">Bass, Vocal</p>
              <p class="equip">Eden WTDI, Behringer XM8500</p>
            </div>
            <div class="member flex_vert">
              <p class="img_block"><img src="http://placehold.jp/220x220.png" width="220" alt="imusic"></p>
              <h2 class="name">imusic</h2>
              <p class="descri">Midi Program</p>
              <p class="equip">Ablton Live9, Ableton Push2, Korg microKEY, Apple iMac, NativeInstruments KomplateAudio6</p>
            </div>
          </div>
        </div>
      </article>
      <aside id="souncloud">
        <div class="wrapper soundcloud_frame">
          <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/28827747&color=%23b9b3b2&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
        </div>
      </aside>
      <aside id="twitter_timeline">
        <div class="wrapper twitter_wrapper">
        <a class="twitter-timeline"
          data-width="540"
          data-height="370"
          data-chrome=" nofooter "
          href="https://twitter.com/imusic_works?ref_src=twsrc%5Etfw">Tweets by imusic_works</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        
        </div>
      </aside>

<?php get_footer();