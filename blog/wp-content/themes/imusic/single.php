<?php
/*
single.php
*/
get_header();

echo '<article class="post">';
echo '<div class="wrapper post_wrapper">';
if(have_posts()):
  while(have_posts()):the_post();
    echo '<h1 class="post_title">'.the_title('', '', false).'</h1>';
    the_content();
  endwhile;
endif;
echo '</div>';
echo '</article>';

get_footer();