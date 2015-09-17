<?php
/**
 * The template for displaying Archive pages.
 * @package Corpobox
 */

get_header(); ?>


<?php if ( have_posts() ) : ?>

<header class="page-header">
	<?php corpobox_breadcrumb(); ?>
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							_e( 'Tag: ', 'corpobox' );
							single_tag_title();

						elseif ( is_author() ) :
							the_post();
							printf( __( 'Author: %s', 'corpobox' ), '<span class="vcard">' . get_the_author() . '</span>' );
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'corpobox' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'corpobox' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'corpobox' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'corpobox' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'corpobox');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'corpobox' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'corpobox' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'corpobox' );

						else :
							_e( 'Archives', 'corpobox' );

						endif;
					?>
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
			<?php /* Start the Loop */ ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>

	</div><!-- .grid -->
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
