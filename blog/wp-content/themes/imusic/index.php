<?php
/* index.php */
if(have_posts()):
  echo '<ul>'.PHP_EOL;
  while(have_posts()):the_post();
    echo '<li><a href="';
    the_permalink();
    echo '">'.the_title('', '', false).'</a></li>'.PHP_EOL;
  endwhile;
  echo '</ul>'.PHP_EOL;
endif;