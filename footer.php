<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package McCrery-Harra
 */

?>

  </div><!-- #content -->

	<footer class="footer" role="contentinfo">
	  <div class="footer-logo">

			<?php if(get_theme_mod('site_logo')) {
				echo '<img src="'. get_theme_mod('site_logo') . '" alt="'.get_bloginfo( 'name' ).'">';
			} else { ?>
			<img src="<?php bloginfo('template_url'); ?>/images/logo-black.png" alt="<?php bloginfo( 'name' ); ?>">
			<?php } ?>
		
	  </div>
	  <div class="footer-links">
	    <?php dynamic_sidebar( 'footer-1' ); ?>
	  	<?php dynamic_sidebar( 'footer-2' ); ?>
	  	<?php dynamic_sidebar( 'footer-3' ); ?>	 
	  	<?php dynamic_sidebar( 'footer-4' ); ?>	 	
	  </div>

	  <hr>

	  <p class="site-info">
      ©2016 MCCRERY AND HARRA FUNERAL HOME AND CREMATORY - ALL RIGHTS RESERVED<br>
      Design by <a href="http://2fish.com">
        <img src="<?php bloginfo('template_url'); ?>/images/2fish.png" alt="2fish"></a>
		</p><!-- .site-info -->
	</footer>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
