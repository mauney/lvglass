<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post page">

        <h2><?php the_title() ?></h2>

        <?php
        if ($post->post_parent) { /* Loop only if a sub-page of portfolio */
            $category_query = new WP_Query( array( 'category_name' => get_the_title() ) );
            if ( $category_query->have_posts() ) {
                while ( $category_query->have_posts() ) {
                    $category_query->the_post(); ?>
                    <div class="featured-image">
                        <?php  
                        if ( ! has_post_thumbnail() ) {
                            the_title('<h3>', '</h3>');
                        } ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('mobile'); ?></a>
                    </div> <?php
                }
                
                wp_reset_postdata();
            }
        }
            
        ?>

        <?php the_content() ?>

        <?php if ( has_children() OR $post->post_parent > 0 ) { ?>

            <h3 class="parent-link">
                <a href="<?php echo get_the_permalink( get_top_ancestor_id() ); ?>">
                <?php echo 'Return to ' . get_the_title( get_top_ancestor_id() ); ?></a>
            </h3>

        <?php } ?>

    </article>

<?php endwhile;

else :
    echo '<p>No content found.</p>';

endif;

get_footer();

?>
