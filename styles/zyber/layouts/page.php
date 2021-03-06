<?php

if ( is_front_page() ) {
    $this_page = new ContentGenerator( array('template' => 'home.html'));
    $model = array( 'acf' => get_fields() );
    $this_page->render($model);
} else {
    $this_page = new ContentGenerator( array('template' => 'page.html'));
    $model = array( 'acf' => get_fields() );
    $this_page->render($model);

    ?>

    <?php
      if (get_field('show_default_wordpress_contentTrue') == true){
        ?>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

            <article class="uk-article tm-article">

                <?php if (has_post_thumbnail()) : ?>
                    <?php
                    $width = get_option('thumbnail_size_w'); //get the width of the thumbnail setting
                    $height = get_option('thumbnail_size_h'); //get the height of the thumbnail setting
                    ?>
                    <?php the_post_thumbnail(array($width, $height), array('class' => '')); ?>
                <?php endif; ?>

                <?php if ($this['config']->get('page_title', true)) : ?>
                <h1 class="uk-article-title"><?php the_title(); ?></h1>
                <?php endif; ?>

                <?php the_content(''); ?>

                <?php edit_post_link(__('Edit this post.', 'warp'), '<p><i class="uk-icon-pencil"></i> ','</p>'); ?>

            </article>

            <?php endwhile; ?>
        <?php endif; ?>

        <?php comments_template(); ?>

      <?php } ?>


<?php
}

?>
