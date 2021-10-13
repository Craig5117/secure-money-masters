<?php 

get_header(); ?>


    <div class="page-title-container">
      <h2 class="page-title">Our Blog</h2>
    </div>  
    <p class="broker-check-bubble">Check the background of your financial professional on FINRA's <a style="color: black" href="https://brokercheck.finra.org/" target="_blank" rel="noreferrer noopener">BrokerCheck</a><p> 
    
    <main class="content">
    
   <?php while ( have_posts() ) {
    the_post(); ?>
    <div>
    <h3>
      <?php the_title(); ?>
    </h3>
    <div class="post-image-container"><?php if ( has_post_thumbnail() ) { 
        the_post_thumbnail( 'full' ); } ?>
    </div>
     <div class="post-content">
       <?php the_content(); ?>
    </div>
    </div>
<?php } ?>
</main>

  </div>
<?php get_footer();
?>