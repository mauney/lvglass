<?php

get_header();

?>

<div class="alt-page-links">

    <?php

    $link_containers = array
        (
        array("New Work", "new_work"),
        array("Rocks", "rocks"),
        array("Gems", "gems"),
        array("Nature Studies", "nature_studies"),
        array("Spirals", "spirals"),
        array("What Do You Hold?", "what_do_you_hold"),
        array("What's Between Us?", "whats_between_us"),
        array("Early Work", "early_work"),
        array("Tables", "tables")
        );

    foreach($link_containers as $link_details) {
    ?>
        <div class="alt-link-container">
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