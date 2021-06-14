<?php
/* 
footer.php
*/
?>

    </main>
    <footer class="">
      <p class="small_text">&copy; 2022 <?php echo get_bloginfo( 'name' ); ?> All Rights Reserved.</p>
    </footer>
  </div>
  <nav id="toggle_menu" style="display: none;"><?php get_template_part( 'inc/overlay_menu' );?></nav>
  <?php wp_footer(); ?>
</body>
</html>