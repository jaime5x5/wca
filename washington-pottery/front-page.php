<?php $options = get_option('plugin_options'); ?>
<?php get_header(); ?>
    <!-- Landing Section Section -->
    <section class="landing" id="home">
      <div class="fluid-container">
        <div id="custom-slideshow">
          <img class="active" src="<?php echo $options['slide1']; ?>" alt="Slideshow Image"> 
          <img src="<?php echo $options['slide2']; ?>" alt="Slideshow Image">
          <img src="<?php echo $options['slide3']; ?>" alt="Slideshow Image">
          <img src="<?php echo $options['slide4']; ?>" alt="Slideshow Image">
          <img src="<?php echo $options['slide5']; ?>" alt="Slideshow Image">
          <img src="<?php echo $options['slide6']; ?>" alt="Slideshow Image">
          <img src="<?php echo $options['slide7']; ?>" alt="Slideshow Image">
          <img src="<?php echo $options['slide8']; ?>" alt="Slideshow Image">
          <img src="<?php echo $options['slide9']; ?>" alt="Slideshow Image">
          <img src="<?php echo $options['slide10']; ?>" alt="Slideshow Image">
        </div>
        <div class="caption-container">
			<h3 class="active-caption"><?php echo $options['slidecap1']; ?></h3>
            <h3><?php echo $options['slidecap2']; ?></h3>
            <h3><?php echo $options['slidecap3']; ?></h3>
            <h3><?php echo $options['slidecap4']; ?></h3>
            <h3><?php echo $options['slidecap5']; ?></h3>
            <h3><?php echo $options['slidecap6']; ?></h3>
            <h3><?php echo $options['slidecap7']; ?></h3>
            <h3><?php echo $options['slidecap8']; ?></h3>
            <h3><?php echo $options['slidecap9']; ?></h3>
            <h3><?php echo $options['slidecap10']; ?></h3>
        </div>
        <img class="slideshow-fix" src="<?php echo $options['slide5']; ?>" alt="Slideshow Image">
      </div>
      <h1 class="hide">&nbsp;</h1>
    </section>
    <!-- Content for landing Section should only contain the landing page logo. -->
    <div class="container">
      <div class="landing_logo">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  <!-- Misison Statment Section -->
  <section id="mission" class="mission" style="background: url('<?php bloginfo( 'template_directory' ); ?>/images/mission.jpg'); background-position:fixed;" data-type="background" data-speed="3">
        <div class="fluid-container valign-fix-container">
          <div class="container">
            <h3><?php echo $options['mission_statement']; ?></h3>
          </div>
        </div>
  </section>

<?php wp_reset_query(); ?>
  <!-- About Section --> 
  <section class="about" id="about">
    <div class="fluid-container">
      <div class="row news-feed-hotfix">
          <div class="col-xs-4 news-feed-background">
            <div class="col-xs-10 col-xs-offset-1 news-feed">
              <h2>News Feed</h2>
                <?php
                $args = array( 'posts_per_page' => 3 );
                $lastposts = get_posts( $args );
                foreach ( $lastposts as $post ) :
                  setup_postdata( $post ); ?>
                  <p class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                  <?php echo '<p>'.excerpt(15).'</p>'; ?>
                <?php endforeach; 
                wp_reset_postdata(); ?>
            </div>
          </div>
          <div class="col-xs-5 col-xs-offset-1 about-section">
            <h2>About Us</h2>
            <P>As a member of the Washington Clay Arts Association you are able to expand your personal and career development in ceramic art. We are an all-volunteer club which hosts two annual Socials, one major annual exhibition with cash awards, group sales, pit firings, potlucks, studio visits, and artist presentations. We connect a 400 (and counting) database of WCA Members, and Friends of the WCA. </p>
            <p>Our list serve sends out clay news by email as it comes in, keeping ceramic artists current on statewide events in the larger clay arts community. You may send in your own posts to have them distributed. Equipment sales, openings, calls-to-art, workshop listings offered at community studios- we get the news to where it needs to go.</p>
            <p class="mb20">Our creativity comes from inspiring one another. We have great long-standing traditions, and constantly reinvent ourselves to respond to current needs. The WCA board approves all member proposals when there is a defined benefit to the ceramics community.</p>
          </div>
      </div>
    </div>
  </section>
  
  <!--<section class="events-heading" style="background: url('<?php bloginfo( 'template_directory' ); ?>/images/events.jpg') 100% 300px no-repeat fixed;" data-type="events-heading" data-speed="40">-->
  <section class="events-heading" id="events-heading">
  	<div class="vide-container" data-vide-bg="wp-content/themes/washington-pottery/video/clay-video" data-vide-options="position: 50% 50%">
    </div>
    <h2>Get Inspired!</h2>
  </section>
  <section class="events" id="events" >
    <div class="fluid-container">
      <div class="events-header"></div>
    </div>
    <?php get_sidebar( 'front_page' ); ?>
  </section>
  

  <section class="contact" id="contact">
    <div class="fluid-container">
      <div class="row">  
        <div class="col-xs-5 col-xs-offset-5 contact-section">
          <h2>Contact Info</h2>
          <p>If you would like to access the WCA List serve (free) please send an email (using the email address with which you wish to receive the Clay Arts News) to <a href="mailto:wcaa.news@gmail.com">wcaa.news@gmail.com</a></p>
          <p>To contact the board members with any other questions or comments, you may also reach us at: <a href="mailto:wcasubmissions@gmail.com">wcasubmissions@gmail.com</a></p>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
