<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <title>ThemePerso</title>
        <base href="/html/wordpress/wp-content/themes/Themeperso/">
         <?php wp_head(); ?>
    </head>


    <body>

        <!-- container global -->
        <div class="Container-fluid">

            <!-- debut barre de navigation -->
            <nav class="navbar navbar-expand-lg navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand col-5" href="#">Buys</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-to-collapse">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
                <div id="nav-to-collapse" class="collapse navbar-collapse">
                <?php /* Primary navigation */
                wp_nav_menu( array(
                  'menu' => 'top_menu',
                  'depth' => 1,
                  'container' => false,
                  'menu_class' => 'nav',
                  //Process nav menu using our custom nav walker
                  'walker' => new wp_bootstrap_navwalker())
                );
                ?>
                </div>
            </nav>
            <!-- fin barre de navigation -->
