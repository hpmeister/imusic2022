<?php
/* 
archive.php
*/

get_header();

global $post;
$categories = get_the_category( $post->ID );
// var_dump( $categories );

?>
<article id="archive">
  <div class="wrapper post_wrapper">
    <h1 class="post_title">category: <?php echo $categories[0]->name; ?></h1>
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
    ?>
    <div class="post">
      <h2 class="title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
    </div>
  <?php		
	}
  ?>
    <aside class="pagination">
      <div class="nav-previous align_right"><?php next_posts_link( 'old posts &raquo;' ); ?></div>
      <div class="nav-next align_left"><?php previous_posts_link( '&laquo; new posts' ); ?></div>
    </aside>
<?php
}
?>
  </div>
</article>
<?php
get_footer();