<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

    <div class="container">
    <div class="wrapper">

        <!-- site-header -->
        <header class="site-header">

            <div class="title">

                <?php if ( is_front_page() ): ?>
                    <h1>John Littleton <span class="thin">and</span> Kate Vogel</h1>
                <?php else: ?>
                    <h1><a href="<?php echo home_url(); ?>">John Littleton <span class="thin">and</span> Kate Vogel</a></h1>
                <?php endif ?>

                <p id="menu-icon">Menu</p>

            </div><!-- /title -->

            <nav id="menu-top" class="site-nav">

                <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>

            </nav>

        </header><!-- /site-header -->

