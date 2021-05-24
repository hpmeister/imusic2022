<?php
/* index.php */

echo '<h3 class="title">latest posts</h3>';
echo '<ul class="">';
if(have_posts()):
  while(have_posts()):the_post();
    echo '<li><a href="';
    the_permalink();
    echo '">'.the_title('', '', false).'</a></li>'.PHP_EOL;
  endwhile;
endif;
echo '</ul>';

echo '<h3 class="title">categories</h3>';
echo '<ul class="">';

global $post;
$cats = get_categories();
// var_dump( $cats );
foreach ($cats as $cat) {
  echo '<li><a href="'.get_bloginfo('url').'/'.$cat->slug.'">'.$cat->name.'</a></li>';
}
echo '</ul>';