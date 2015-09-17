<?php 

  // Template Name: Blog Right Sidebar
  get_header(); ?>
<div class="page-seperator"></div>
<div class="container">
  <div class="row">
    <div class="qua_page_heading">
      <?php the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <div class="qua-separator"></div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row qua_blog_wrapper">
    <?php get_sidebar(); ?>
    <div class="col-md-8">
        <?php   
                $args = array( 'post_type' => 'post');		
				$post_data = new WP_Query( $args );
				if ( $post_data->have_posts() ) : while($post_data->have_posts()): $post_data->the_post();
                global $more;
                $more = 0; 
        ?>
      <div class="qua_blog_section" id="post-<?php the_ID(); ?>" >
        <div class="qua_blog_post_img">
          <?php $defalt_arg =array('class' => "img-responsive"); ?>
          <?php if(has_post_thumbnail()): ?>
          <a  href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('', $defalt_arg); ?>
          </a>
          <?php endif; ?>	
        </div>
        <div class="qua_post_date">
          <span class="date"><?php echo get_the_date('j'); ?></span>
          <h6><?php echo the_time('M'); ?></h6>
        </div>
        <div class="qua_post_title_wrapper">
          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <div class="qua_post_detail">
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><i class="fa fa-user"></i><?php echo get_the_author(); ?></a>
            <a href="<?php the_permalink(); ?>"><i class="fa fa-comments"></i><?php comments_number( 'No Comments', 'one comments', '% comments' ); ?></a>
            <?php if(get_the_tag_list() != '') { ?>
            <div class="qua_tags">
              <i class="fa fa-tags"></i><?php the_tags('',' , ', '<br />'); ?>							
            </div>
            <?php }?>
            <?php if(get_the_category_list() != '') { ?>
            <div class="qua_post_cats">
              <i class="fa fa-group"></i>&nbsp;&nbsp;<?php the_category(' ', ' '); ?>
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="clear"></div>
        <div class="qua_blog_post_content">
          <?php the_content( __( 'Read More' , 'quality' ) ); ?>
		<?php wp_link_pages( ); ?>
	   </div>
      </div>
      <?php endwhile;  ?>
      <?php if ($post_data->max_num_pages > 1) { ?>
      <div class="qua_blog_pagination">
        <div class="qua_blog_pagi">					
          <?php previous_posts_link( 'Older Posts' ); next_posts_link( 'Newer Posts', $post_data->max_num_pages ); ?>
        </div>
        <?php if(wp_link_pages()) { wp_link_pages();  }  ?>
      </div> <?php } wp_reset_postdata(); endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>