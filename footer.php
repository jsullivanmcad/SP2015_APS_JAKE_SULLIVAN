<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package minimal-ecomm
 */
?>	
				</div><!-- #content -->		

			</div><!-- .main-page-->

		</div><!-- .main-content-area-->

			
<div class="footer-area full">
	<div class="main-page">
			<footer id="colophon" class="site-footer inner" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'minimal-ecomm' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'minimal-ecomm' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', 'minimal-ecomm' ), 'minimal-ecomm',  ); ?>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
	</div> <!-- .main-page-->		
</div><!-- .footer-area -->		


<?php wp_footer(); ?>

</body>
</html>
