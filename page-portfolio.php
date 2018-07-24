<?php

get_header();

?>

<div class="home-page-links">

    <?php

    $link_containers = array
        (
        array("Gems", "spheres"),
        array("Nature Studies", "spheres"),
        array("Rocks", "spheres"),
        array("Spirals", "spheres"),
        array("What Do You Hold?", "spheres"),
        array("What's Between Us?", "spheres"),
        array("Early Work", "spheres"),
        array("New Work", "spheres"),
        array("Tables", "spheres")
        );

    foreach($link_containers as $link_details) {
    ?>
        <div class="home-link-container">
            <a href="<?php echo get_page_link( get_page_by_title( $link_details[0] )->ID ); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/<?php echo $link_details[1] ?>.jpg">
                <h3><?php echo $link_details[0] ?></h3>
            </a>
        </div>

    <?php
    }

    ?>
</div><!-- /home-page-links -->

<?php

get_footer();

?>