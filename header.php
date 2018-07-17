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

        <!-- site-header -->
        <header class="site-header">

            <div class="title">

                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <h1 class="menu-icon">&#8801;</h1>

            </div><!-- /title -->

            <nav class="site-nav">

                <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>

            </nav>

        </header><!-- /site-header -->

