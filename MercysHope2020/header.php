<!DOCTYPE html>
<html lang = <?php language_attributes(); ?>>
    <head>
        <meta charset = '<?php bloginfo("charset"); ?>'>
        <meta name = 'viewport' content = 'width = device-width, initial-scale = 1.0'>
        <title><?php bloginfo("name"); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      <div id="site-main" class="grid-container">
          <header class = grid-container>
            <a href = '<?php echo get_site_url(); ?>'>
              <img class='logo' src = '<?php echo get_template_directory_uri(); ?>/images/Logo.svg' alt = "Mercy's Hope">
            </a>
            <nav class="header-navigation">
              <button id="primary-navigation-button" class="menu-toggle">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
              </button>
                <div id= "primary-nav-container" class="hidden-mobile">
                    <?php
                    $menu_args = array(
                        "theme_location" => "primary"
                    );
                    wp_nav_menu($menu_args);
                    ?>
                </div>
            </nav>
          </header>