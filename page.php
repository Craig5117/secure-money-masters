<?php 

get_header(); 

while ( have_posts() ) {
    the_post(); ?>
    <div class="page-title-container">
      <h2 ><?php the_title() ?></h2>
    </div>  
  
    
    <div class="content">
        <?php the_content() ?>
    </div>

  </div> 
<?php }

get_footer();
?>