<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post page">

        <?php if ( has_children() OR $post->post_parent > 0 ) { ?>

            <h2 class="parent-link">
                <a href="<?php echo get_the_permalink( get_top_ancestor_id() ); ?>">
                <?php echo get_the_title( get_top_ancestor_id() ); ?></a>
            </h2>

        <?php } ?>

        <h2><?php the_title() ?></h2>

        <?php
            $category_query = new WP_Query( array( 'category_name' => 'Rock' ) );
            if ( $category_query->have_posts() ) {
                while ( $category_query->have_posts() ) {
                    $category_query->the_post(); ?>
                    <div class="post-thumbnail">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('mobile'); ?></a>
                    </div> <?php
                }
                
                wp_reset_postdata();
            }
        ?>

        <?php the_content() ?>
    </article>

<?php endwhile;

else :
    echo '<p>No content found.</p>';

endif;

get_footer();

?>
