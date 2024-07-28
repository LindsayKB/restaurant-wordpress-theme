<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package flat-bootstrap
 */

require_once("copper-blues-methods.php");
	
$locationName = getLocation();
?>
	</div><!-- #content -->

	<?php // Start the footer area ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h4>
						Contact
					</h4>
					<?php dynamic_sidebar( $locationName . '-contact' ); ?>
				</div>
				<div class="col-md-6">
					<h4>
						Hours
					</h4>
					<?php dynamic_sidebar( $locationName . '-hours' ); ?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>