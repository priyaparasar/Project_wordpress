<?php
/**
 * The Sidebar containing the WooProject widget areas.
 *
 * @package Corpobox
 */
?>
	<div id="secondary" class="widget-area" role="complementary">

		<?php if ( ! dynamic_sidebar( 'projects' ) ) : ?>
		<?php endif; // end sidebar widget area ?>

	</div><!-- #secondary -->
