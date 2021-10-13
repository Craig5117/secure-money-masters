<?php get_header(); 
    while ( have_posts() ) {
        the_post(); ?>
    <div class="hero">    
        <img alt="Secure Money Masters Logo" class="hero-image" src="<?php echo get_theme_file_uri('/images/smm-banner-dark-green-gold-background-2.webp') ?>"/>
    </div>
    <p class="broker-check-bubble">Check the background of your financial professional on FINRA's <a style="color: black" href="https://brokercheck.finra.org/" target="_blank" rel="noreferrer noopener">BrokerCheck</a><p>
    <main class="content">
        <?php
            the_content(); ?>
    </main>
<?php }
     get_footer(); ?>