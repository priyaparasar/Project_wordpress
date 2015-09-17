<?php
/**
 * @package Corpobox
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">

	<?php if ( has_post_thumbnail() && !has_post_format() ) : ?>
		<?php the_post_thumbnail( 'corpobox-medium' ); ?>
	<?php endif; //has_post_thumbnail ?>

	<?php if ( has_excerpt() ) : ?>
		<?php the_excerpt(); ?>
	<?php endif; //has_excerpt() ?>	

</header><!-- .entry-header -->

	<div class="entry-content">

	<h1 class="page-title"><?php the_title(); ?></h1>

		<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'corpobox' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta<?php if ( !is_active_sidebar( 'sidebar-1' ) ) { ?> no-sidebar<?php } ?>">

		<div class="posted">
			<?php corpobox_posted_on(); ?>
		</div>
		<div class="extrameta">
			<?php corpobox_posted_extra(); ?>
		</div>

		<?php edit_post_link( __( 'Edit', 'corpobox' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-meta -->

</article><!-- #post-## -->
