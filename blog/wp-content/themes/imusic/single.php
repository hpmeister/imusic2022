<?php
/*
single.php
*/
get_header();

echo '<article class="post">';
echo '<div class="wrapper post_wrapper">';
echo '<div class="cat_name">';
echo the_category(' ');
echo '</div>';
if(have_posts()):
  while(have_posts()):the_post();
    echo '<h1 class="post_title">'.the_title('', '', false).'</h1>';
    echo '<div class="date">';
    the_date();
    echo '</div>';
    the_content();
  endwhile;
endif;
echo '</div>';
echo '</article>';

get_footer();