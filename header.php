<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class()?>>
        <header>
            <div>
                <h1>
                    <a href="<?php echo site_url() ?>" style="text-decoration: none; color: #165d00">
                        Secure Money Masters
                    </a>
                </h1>
                <nav>
                </nav>              
            </div>
            <div class="hero">
                <div class="hero-image" style="background-image: url(<?php echo get_theme_file_uri('/images/cropped-SMM-Banner-2.png') ?>)">
                </div>
            </div>
        </header>
   