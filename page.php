<?php 

get_header(); 

while ( have_posts() ) {
    the_post(); ?>
    <div>
      <h1 ><?php the_title() ?></h1>
    </div>  
  
    
    <div>
        <?php the_content() ?>
    </div>

  </div> 
<?php }

get_footer();
?>