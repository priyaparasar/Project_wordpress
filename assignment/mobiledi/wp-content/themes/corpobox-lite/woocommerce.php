<?php
/**
 * The template for WooCommerce Shop
 * Template Name: WooCommerce
 *
 * @package Corpobox
 */

get_header(); ?>

<header class="page-header">
<div class="wooshop-title">
<?php
	$args = array(
		'delimiter' => ' &#8250; ',
	);
?>
	<?php woocommerce_breadcrumb( $args ); ?>
	<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
</div>

<?php
if ( is_plugin_active('woocommerce/woocommerce.php') && empty( $right ) ) {
?>
<ul class="header-cart">
	<?php corpobox_cart_link(); ?>
</ul>
<?php } ?>

</header>

	<div id="primary" class="content-area<?php if ( !is_active_sidebar( 'store' ) ) { ?> no-sidebar<?php } ?>">
		<main id="main-woocommerce" class="site-main" role="main">

			<?php woocommerce_content(); ?>

		</main><!-- #main-woocommerce -->
	</div><!-- #primary -->

	<?php if ( is_active_sidebar( 'store' ) ) { get_sidebar('store'); } ?>

<?php get_footer(); ?>
