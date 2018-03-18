<?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>

   <article class="uk-article tm-article ceo-corner" data-permalink="<?php the_permalink(); ?>">


      <?php
        if (has_post_thumbnail()) :
         the_post_thumbnail( 'full', array('class' => 'post-thumbnail') );
        endif;
      ?>
      <div class="author-meta">
        <div class="author-avatar">
          <?php
          echo get_avatar( get_the_author_meta( 'ID' ), 55 );
          ?>
        </div>
        <span class="author-name">
          <?php
          echo get_the_author();
          ?>
        </span>
        <br>
        <?php
        if ( get_the_author_meta('description') ) : // If a user has filled out their decscription show a bio on their entries
          the_author_meta('description');
        endif;
        ?>
      </div>
       <h1><?php the_title(); ?></h1>

       <p class="uk-article-meta">
          <?php
            $date = '<time datetime="'.get_the_date('Y-m-d').'">'.get_the_date().'</time>';
          ?>
          <span><?php echo $date; ?></span>   |   <span class="comment-number"><?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?></span>  |
       </p>

       <?php the_content(''); ?>

       <?php wp_link_pages(); ?>

       <?php the_tags('<p>'.__('Tags: ', 'warp'), ', ', '</p>'); ?>

       <?php edit_post_link(__('Edit this post.', 'warp'), '<p><i class="uk-icon-pencil"></i> ','</p>'); ?>


       <?php if (get_the_author_meta('description')) : ?>
       <div class="uk-panel uk-hidden">

           <div class="uk-align-medium-left">

               <?php echo get_avatar(get_the_author_meta('user_email')); ?>

           </div>

           <h2 class="uk-h3 uk-margin-top-remove"><?php the_author(); ?></h2>

           <div class="uk-margin"><?php the_author_meta('description'); ?></div>

       </div>
       <?php endif; ?>

       <?php comments_template(); ?>

       <?php
           $prev = get_previous_post();
           $next = get_next_post();
       ?>

       <?php if ($this['config']->get('post_nav', 0) && ($prev || $next)) : ?>
       <ul class="uk-pagination">
           <?php if ($next) : ?>
           <li class="uk-pagination-next">
               <a href="<?php echo get_permalink($next->ID) ?>" title="<?php echo __('Next', 'warp'); ?>">
                   <?php echo __('Next', 'warp'); ?>
                   <i class="uk-icon-arrow-right"></i>
               </a>
           </li>
           <?php endif; ?>
           <?php if ($prev) : ?>
           <li class="uk-pagination-previous">
               <a href="<?php echo get_permalink($prev->ID) ?>" title="<?php echo __('Prev', 'warp'); ?>">
                   <i class="uk-icon-arrow-left"></i>
                   <?php echo __('Prev', 'warp'); ?>
               </a>
           </li>
           <?php endif; ?>
       </ul>
       <?php endif; ?>

   </article>

   <?php endwhile; ?>
<?php endif; ?>
