<?php 

get_header(); 

while ( have_posts() ) {
    the_post(); ?>
    <div>
      <h2 ><?php the_title() ?></h2>
    </div>  
  
    
    <div>
        <?php the_content() ?>
    </div>

  </div> 
<?php }

get_footer();
?>