<?php
/* 
archive.php
*/

get_header();

global $post;
$categories = get_the_category($post->ID);
// var_dump( $categories );

?>
<article id="archive">
  <div class="wrapper post_wrapper">
    <h1 class="post_title">category: <?=$categories[0]->name;?></h1>
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
    ?>
    <div class="post">
      <h2 class="title"><a href="<?=get_permalink();?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
    </div>
    <?php
		
	}
}
?>
  </div>
</article>
<?php
get_footer();