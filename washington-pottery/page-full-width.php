<?php
  /*
    Template Name: Full Width Template
  */
?>


<?php get_header(); ?>
<!-- page-full-width.php -->


    <div class="container">
      <div class="row">
        
        <div class="col-xs-12">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="page-header">
              <h1><?php the_title(); ?></h1>
            </div>
            <?php the_content(); ?>
          <?php endwhile; else: ?>
            <div class="page-header">
              <h1>Oh no! Something didn't load from our Database!</h1>
            </div>
          <?php endif; ?>
        </div>
        



      
      </div>

<?php get_footer(); ?>
