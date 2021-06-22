<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class()?>>
        <header>
            <div class="header-container">
                <h1>
                    <a href="<?php echo site_url() ?>" style="text-decoration: none; color: #165d00">
                        Secure Money Masters
                    </a>
                </h1>
                <nav>
                    <div class="nav-options-container">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'headerMenuLocation',
                            'menu_class' => 'header-menu'
                            )); 
                        ?>
                    </div>
                </nav>              
            </div>
        </header>
   