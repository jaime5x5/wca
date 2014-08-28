      <footer style="background: url('<?php bloginfo( 'template_directory' ); ?>/images/footer.jpg') 50% 50% no-repeat; background-position:fixed;" data-type="background" data-speed="3">
        <div class="fluid-container footer-nav-position">
          <div class="footer-nav">
            <div class="row">
              <div class="col-xs-12">
                <div class="social-nav"> 
                  <a href="https://www.facebook.com/pages/Washington-Clay-Arts-Association/188418761188098"><img src="<?php bloginfo( 'template_directory' ); ?>/images/facebook.png" alt="Facebook - Social Media Icon"></a>
                  <a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/google.png" alt="Google Plus - Social Media Icon"></a>
                  <a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/pintrest.png" alt="Pintrest - Social Media Icon"></a>
                </div>
              </div>
            </div>
              
              <div class="row footer-bg">
                <div class="col-xs-12">
                  <div class="footer-nav-container">
                    <?php
                      $args = array (
                            'menu' => 'header-menu',
                            'menu_class' => 'custom-footer-nav',
                            'container' => 'false'
                        );
                      wp_nav_menu( $args );
                    ?>
                  </div><!--/.navbar-collapse -->
                </div>
              </div>
            </div>
          </div>
      </footer>
<?php if ($_GET['scroll']){?>
<?php $wga_scroll_fix = $_GET['scroll']; ?>
	<script type="text/javascript">
		jQuery(window).load(function () {
			var body_class = $('body').hasClass('logged-in');
			var nav_bar_height = $('.navbar-fixed-top').outerHeight();
			var admin_bar_height = $('#wpadminbar').outerHeight();
			//window.history.pushState('Object', 'Title', 'http://washingtonclayarts.org/');
			setTimeout(function(){
				if (body_class){
					TweenMax.to(window, 3, {scrollTo:{y:jQuery(<?php echo '"#'. $wga_scroll_fix .'"'; ?>).offset().top - nav_bar_height - admin_bar_height + 2}});
				} else {
					TweenMax.to(window, 3, {scrollTo:{y:jQuery(<?php echo '"#'. $wga_scroll_fix .'"'; ?>).offset().top - nav_bar_height - admin_bar_height + 1}});
				}
				
			}, 20),
			window.history.pushState('Object', 'Title', 'http://washingtonclayarts.org/');
		});
	</script>
	
<?php } ?>
<?php wp_footer(); ?>

  </body>
</html>