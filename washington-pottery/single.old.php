<?php get_header(); ?>


<!-- single.php -->
<div class="fluid-container">

<?php
if (has_post_thumbnail()) {
  echo '<div class="featured-image">';
    the_post_thumbnail();
  echo '</div>';
  echo '</div>'; // End fluid-container
  echo '<div class="container main-content">';

 if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            echo '<div class="page-header">';
            echo '<h1>';
            the_title(); 
            echo '</h1>';
            echo '</div>';
            the_content(); 
 endwhile; else: 
            echo '<div class="page-header">';
            echo '<h1>Oh no! Something didn\'t load from our Database!</h1>';
            echo '</div>';
 endif;



} else {
?>
<style type="text/css"> 
  .page-header h1{ margin-top: 75px; }
</style>
<?php
echo '</div> <!-- End fluid-container -->';

} // End else

?>



<?php get_footer(); ?>
