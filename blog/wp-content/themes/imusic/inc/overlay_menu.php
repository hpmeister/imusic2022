<?php
/*
overlay_menu.php
*/
echo '<div class="close_btn">';
echo '  <a onclick="javascript:menu_close()" id="close"><img src="/assets/close.svg" alt="close button"></a>';
echo '</div>';
echo '<h3 class="title">latest posts</h3>';
echo '<ul class="">';

$args = array( 'posts_per_page' => 5, 'order'=> 'DESC', 'orderby' => 'date' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post );
  echo '<li><a href="'.get_permalink().'">'.the_title('', '', false).'</a></li>';
endforeach; 
wp_reset_postdata();

echo '</ul>';

echo '<h3 class="title">categories</h3>';
echo '<ul class="">';

wp_list_categories('hide_empty=1&title_li=');

echo '</ul>';
echo '<h3 class="title">social media</h3>';
echo '<ul class="flex_hori socialmedia justify_left">';
echo '  <li class=""><a href="https://twitter.com/imusic_works"><img src="/assets/twitter.svg" alt="Twitter"></a></li>';
echo '  <li class=""><a href="https://instagram.com/imusic_works"><img src="/assets/instagram.svg" alt="Instagram"></a></li>';
echo '  <li class=""><a href="https://www.youtube.com/channel/UCU1BzwD98_rDbSNrxcS5wMw"><img src="/assets/youtube.svg" alt="Youtube"></a></li>';
echo '</ul>';