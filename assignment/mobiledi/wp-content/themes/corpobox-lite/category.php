<?php
/**
 * The template for displaying Category pages.
 * @package Corpobox
 */

get_header(); ?>

<header class="page-header">
	<?php corpobox_breadcrumb(); ?>
				<h1 class="page-title">
					<?php single_cat_title(); ?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
</header><!-- .page-header -->


<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<div class="grid2 clearfix">
<?php } ?>
<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) { ?>
	<div id="primary" class="content-area" style="float: none; width: 100%;">
		<main id="main" class="site-main" role="main">
	<div class="grid3 clearfix">
<?php } ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>

	<?php endwhile; ?>

<?php else : ?>
		<?php get_template_part( 'no-results', 'index' ); ?>

<?php endif;  // have_posts() ?>

	</div> <!-- .grid -->
		</main><!-- #main -->

<?php
	if ( class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'infinite-scroll' ) ) {
		// silence is gold
	} else {
		corpobox_paging_nav();
	}
?>
	</div><!-- #primary -->


<?php if ( is_active_sidebar( 'sidebar-1' ) ) { get_sidebar(); } ?>
<?php get_footer(); ?>
