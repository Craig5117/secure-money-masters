<?php 

get_header(); 

while ( have_posts() ) {
    the_post(); ?>
    <div class="page-title-container">
      <h2 class="page-title"><?php the_title() ?></h2>
    </div>  
  
    
    <main class="content">
        <?php the_content() ?>
</main>

  </div> 
<?php }

get_footer();
?>