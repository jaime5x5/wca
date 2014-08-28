<?php get_header(); ?>


<!-- archive.php -->
    <div class="container navbar-fix">
      <div class="row">
        
        <div class="col-md-9">


          <div class="page-header">
            <h1><?php wp_title( '' ); ?></h1>
          </div>

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <article class="post">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p><em>
                By <?php the_author(); ?> 
                 on <?php echo the_time( 'l, F jS, Y' ); ?>
                 in <?php the_category( ', ' ); ?>,
                 <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
              </em></p>
              
              <?php the_excerpt(); ?>
              <hr>
            </article>
          
          <?php endwhile; else: ?>
          
            <div class="page-header">
              <h1>Oh no! Something didn't load from our Database!</h1>
            </div>
          
          <?php endif; ?>
        
        </div><!-- end col-md-9 -->
        



        <?php get_sidebar( 'blog' ); ?>
      
      </div><!-- end row --> 
      <!-- container ends in footer.php -->

<?php get_footer(); ?>
