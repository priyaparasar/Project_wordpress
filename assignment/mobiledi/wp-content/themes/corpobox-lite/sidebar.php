<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Corpobox
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>


<?php if ( is_page() ) { ?>

<?php
if ( has_nav_menu( 'primary' ) && false === get_theme_mod( 'corpobox_submenu_pages' ) ) { // display children page

    $submenu = corpobox_get_submenu( array(
        'container' => 'nav',
        'container_id' => '',
        'container_class' => '',
        'submenu_id' => 'sidemenu',
        'submenu_class' => '',
        'theme_location' => 'primary',
        'echo' => false,
    ));

    echo '<div>' . $submenu . '</div>';
} // has_nav_menu
?>


		<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>


		<?php endif; // end sidebar widget area ?>

<?php }else{ // is_page() ?>

		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

		<?php endif; // end sidebar widget area ?>
<?php } ?>
	</div><!-- #secondary -->
