<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post page">

        <h2 class="hide-big"><?php the_title() ?></h2>

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
