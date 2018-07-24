<?php

get_header();

?>

<div class="home-page-links">

    <div class="home-link-container">
        <a href="<?php echo get_page_link( get_page_by_title( 'portfolio' )->ID ); ?>">
            <img src="<?php echo get_stylesheet_directory_uri()?>/images/hands.jpg">
            <h3>Portfolio</h3>
        </a>
    </div>

    <div class="home-link-container">
        <a href="<?php echo get_page_link( get_page_by_title( 'John and Kate' )->ID ); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cube.jpg">
            <h3>John and Kate</h3>
        </a>
    </div>

    <div class="home-link-container">
        <a href="<?php echo get_page_link( get_page_by_title( 'studio' )->ID ); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sphere.jpg">
            <h3>Studio</h3>
        </a>
    </div>

    <div class="home-link-container">
        <a href="<?php echo get_page_link( get_page_by_title( 'collections' )->ID ); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bag.jpg">
            <h3>Collections</h3>
        </a>
    </div>

    <div class="home-link-container">
        <a href="<?php echo get_page_link( get_page_by_title( 'contact' )->ID ); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tulips.jpg">
            <h3>Contatct Us</h3>
        </a>
    </div>

</div><!-- /home-page-links -->

<?php

get_footer();

?>