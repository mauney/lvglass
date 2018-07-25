<?php

get_header();

?>

<div class="page-links">

    <?php

    $link_containers = array
        (
        array("Portfolio", "hands"),
        array("John and Kate", "cube"),
        array("Studio", "sphere"),
        array("Collections", "bag"),
        array("Contact Us", "tulips")
        );

    foreach($link_containers as $link_details) {
    ?>
        <div class="link-container">
            <a href="<?php echo get_page_link( get_page_by_title( $link_details[0] )->ID ); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/<?php echo $link_details[1] ?>.jpg">
                <h3><?php echo $link_details[0] ?></h3>
            </a>
        </div>

    <?php
    }

    ?>
</div><!-- /page-links -->

<?php

get_footer();

?>