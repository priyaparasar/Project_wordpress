<?php
/**
 * The template for WooProject page.
 * Template Name: WooProject
 *
 * @package Corpobox
 */

get_header(); ?>

<header class="page-header">
<?php
	$args = array(
		'delimiter' => ' &#8250; ',
	);
?>
<?php
if ( is_plugin_active('woocommerce/woocommerce.php') ) {
	woocommerce_breadcrumb( $args );
}else{
	corpobox_breadcrumb();
}
?>

	<h1 class="page-title"><?php the_title(); ?></h1>
</header>

	<div id="primary" class="content-area<?php if ( !is_active_sidebar( 'projects' ) ) { ?> no-sidebar<?php } ?>">
		<main id="main" class="site-main" role="main">

				<?php projects_content(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php if ( is_active_sidebar( 'projects' ) ) { get_sidebar('projects'); } ?>

<?php get_footer(); ?>
