<?php 

get_header(); ?>


    <div class="page-title-container">
      <h2 class="page-title">Our Blog</h2>
    </div>  
  
    
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