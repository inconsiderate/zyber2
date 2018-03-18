<?php

/**
* Template Name: ZyBlog
* @package   Avion
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

get_header();?>

<div id="system">
    	<?php
	    $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish')); ?>

	   <?php if ( $wpb_all_query->have_posts() ) : ?>

	<div class="hero-content">

		<!-- the loop -->
		<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
	    <?php if (has_post_thumbnail()) : ?>

	        <?php
	        $width = get_option('thumbnail_size_w'); //get the width of the thumbnail setting
	        $height = get_option('thumbnail_size_h'); //get the height of the thumbnail setting
	        ?>

	       <div class="tm-article-featured-image"><?php the_post_thumbnail(array($width, $height), array('class' => '')); ?></div>

	     <?php endif; ?>

	<h1 class="uk-article-title"><a href=<?php echo get_permalink( $post->ID );?> ><?php the_title(); ?></a></h1>
	<p class="uk-article-meta">
	<!-- <?php echo get_avatar( get_the_author_meta( 'ID' ) , 32 ); ?> -->
	 <?php the_author(); ?> on <?php the_date(); ?>  </p>

	<?php do_action( 'addthis_widget', get_permalink(), get_the_title(), 'small_toolbox' );?>
	<?php
	    //$date = '<time datetime="'.get_the_date('Y-m-d').'">'.get_the_date().'</time>';
	//printf(__(' %s on %s. Posted in %s', 'warp'), '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'" title="'.get_the_author().'">'.get_the_author().'</a>', $date, get_the_category_list(', '));
	?>
<p><?php the_excerpt();?></p>
<ul class="uk-subnav uk-subnav-line">
<li><a class="more-link" href=<?php the_permalink();?>><?php _e('Continue reading');?></a> </li>
<li><a class="more-link" href=<?php the_permalink();?>><?php _e('No Comment');?> </a> </li>
</ul>



	   <!-- <div class="hero-content"<?php the_content(); ?></div> -->
		<?php endwhile; ?>
		<!-- end of the loop -->

	</div>

		<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

                       <?php get_footer();?>
