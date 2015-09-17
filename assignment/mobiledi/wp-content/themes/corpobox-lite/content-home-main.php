<?php
/**
 * @package Corpobox
 */
$options = get_option('corpobox_theme_settings');
?>

<!-- Homepage Tagline -->
<section id="tagline">

<div id="home-tagline" style="background: <?php echo esc_attr( get_theme_mod( 'home_tagline_bgcolor', '#e8e09d' ) ); ?> url(<?php echo esc_attr( get_theme_mod( 'home_tagline_bgimg', get_template_directory_uri().'/img/tagline.jpg' ) ); ?>); background-position: 50%; background-size:cover;">

<?php $placement = get_theme_mod( 'home_tagline', '<h1>Home Tagline</h1>' ); if (!empty($placement)) : ?>
<div class="tagline-txt">
	<?php echo do_shortcode( wp_kses_post( get_theme_mod( 'home_tagline', '<h1>Home Tagline</h1>' ) ) ); ?>
</div>
<?php endif; ?>

</div><!--#home-tagline-->

</section>

<section id="home-content">
<div class="entry-content">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<h1 class="page-title"><?php the_title(); ?></h1>
<?php the_content(); ?>

	<?php edit_post_link( __( 'Edit', 'corpobox' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
</div><!-- .entry-content -->
</section>


<?php if ( is_active_sidebar( 'home-page-section' ) ) { ?>
<section id="home-page-section">
<div class="entry-content">
<div class="grid<?php $sidebars_widgets = wp_get_sidebars_widgets(); echo count($sidebars_widgets['home-page-section']); ?> clearfix">
<?php dynamic_sidebar( 'home-page-section' ); ?>
</div>
</div><!-- .entry-content -->
</section>
<hr />
<?php } ?>


 <!-- Sticky Post-->

    <?php
        global $post;
        $args = array(
            'post__in'  => get_option( 'sticky_posts' )
        );
        $sticky_posts = get_posts($args);
    ?>
<?php if( get_option( 'sticky_posts' ) ) { ?>
<?php
global $count; //sticky posts number for left-right align
?>
    <section id="home-sticky">
<div class="home-section">
        <?php
        foreach($sticky_posts as $post) : setup_postdata($post);
        ?>
<?php $count ++; // left-right align
?>
	<div class="entry-content">

	<div class="half"<?php if ( $count == 2 ) : echo 'style="float: right;"'; else : echo 'style="margin-left: 0;"'; endif; ?>>
		<div class="post-thumb" style="background: #FFF url(<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'corpobox-medium' ); echo $thumbnail[0]; ?>) no-repeat; background-position: 50%; background-size: 100%;">
		</div>
	</div><!--/col-->

        <div class="half"<?php if ( $count == 2 ) : echo 'style="margin-left: 0;"'; else : echo 'style="float: right;"'; endif; ?>>

           	<h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

	<?php the_excerpt(); ?>


        </div><!--/col-->
	</div><!-- .entry-content -->

<?php if ( $count == 2 ) : $count = 0; endif; ?>

<div class="clearfix"></div>        
        <?php
	endforeach;
	wp_reset_postdata();
	?>
</div><!-- .home-section -->
    </section><!-- /sticky -->

<?php } ?>
