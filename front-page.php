<?php get_header(); 
    while ( have_posts() ) {
        the_post(); ?>
    <div class="hero">
        <img alt="Secure Money Masters Logo" class="hero-image" src="<?php echo get_theme_file_uri('/images/smm-banner-green-subtitle-reworked-light.webp') ?>"/>
    </div>
    <main class="content">
        <?php
            the_content(); ?>
    </main>
<?php }
     get_footer(); ?>