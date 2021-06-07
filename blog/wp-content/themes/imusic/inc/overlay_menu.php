<?php
/*
overlay_menu.php
*/
echo '<div class="close_btn">';
echo '  <a href="javascript:void(0);" onclick="javascript:menu_close()" id="close"><img src="'.get_bloginfo('stylesheet_directory').'/assets/close.svg" alt="close button"></a>';
echo '</div>';
echo '<h2 class="title">latest posts</h2>';
echo '<ul class="">';

$args = array( 'posts_per_page' => 5, 'order'=> 'DESC', 'orderby' => 'date' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post );
  echo '<li><a href="'.get_permalink().'">'.the_title('', '', false).'</a></li>';
endforeach; 
wp_reset_postdata();

echo '</ul>';

echo '<h2 class="title">categories</h2>';
echo '<ul class="">';

wp_list_categories('hide_empty=1&title_li=');

echo '</ul>';
echo '<h2 class="title">social media</h2>';
echo '<ul class="flex_hori socialmedia justify_left">';
echo '  <li class=""><a href="https://twitter.com/imusic_works"><img src="'.get_bloginfo('stylesheet_directory').'/assets/twitter.svg" alt="Twitter"></a></li>';
echo '  <li class=""><a href="https://instagram.com/imusic_works"><img src="'.get_bloginfo('stylesheet_directory').'/assets/instagram.svg" alt="Instagram"></a></li>';
echo '  <li class=""><a href="https://www.youtube.com/channel/UCU1BzwD98_rDbSNrxcS5wMw"><img src="'.get_bloginfo('stylesheet_directory').'/assets/youtube.svg" alt="Youtube"></a></li>';
echo '</ul>';