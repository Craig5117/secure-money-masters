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
                <div class="top-bar">
                    <h1>
                        <a href="<?php echo site_url() ?>">
                            SecureMoneyMasters
                        </a>
                    </h1>
                    <button onclick="toggleNav()" aria-label="Menu Toggle">                    
                        <svg class="menu-icon" viewBox="0 0 25.400019 25.4">
                            <rect class="menu-icon-bar" style="fill-rule:evenodd;stroke-width:0.0546003" id="rect144"
                                width="18.836819"
                                height="1.9205832"
                                x="3.2815907"
                                y="5.0127468"
                                ry="0.61458665" />
                            <rect class="menu-icon-bar" style="fill-rule:evenodd;stroke-width:0.0546003" id="rect144-9"
                                width="18.836819"
                                height="1.9205832"
                                x="3.2815907"
                                y="10.835579"
                                ry="0.61458665" />
                            <rect class="menu-icon-bar" style="fill-rule:evenodd;stroke-width:0.0546003" id="rect144-8"
                                width="18.836819"
                                height="1.9205832"
                                x="3.2815907"
                                y="16.658411"
                                ry="0.61458665" />
                        </svg>
                    </button>
                </div>
                <nav>
                    <div class="header-menu-container">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'headerMenuLocation',
                            'menu_class' => 'header-menu'
                            )); 
                        ?>
                    </div>
                </nav>              
            </div>
        </header>
   