<?php get_header(); ?>

<div id="main-content" class="main-content">
  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
      <?php
        if (have_posts() ) :
          // Start the Loop.
          while ( have_posts() ) : the_post();

            get_template_part('content');

          endwhile;

        else :

          get_template_part( 'content', 'none' );

        endif;
        next_posts_link( 'Older posts',0 ); 
        previous_posts_link( 'Newer posts' );
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>