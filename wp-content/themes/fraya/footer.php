<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Fraya
 * @since Fraya 1.0
 */
?>

</div><!-- end site-content -->

<footer>
	

	<div class="site-info">
			<?php
				/**
				 * Fires before the Fraya footer text for footer customization.
				 *
				 * @since Fraya 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?></a>
	</div><!-- .site-info -->




</footer><!-- end footer -->

<?php wp_footer(); ?>

</body>
</html>
