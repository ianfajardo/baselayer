<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


  <?php 
  
the_title( '<h1 class="entry-title"><a href="' .  get_permalink()  . '" rel=bookmark">', '</a></h1>' );
  ?>
  <div class="entry-content">
    <?php 
      the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );
    ?>
  </div>


</article>