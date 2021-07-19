<?php 

get_header();
?>
<div class="page-title-container">
    <h2 class="page-title">Podcasts</h2>
</div>  


<main class="content">
    <div class="podcasts-container">
<?php
while ( have_posts() ) {
    the_post(); ?>
    <div class="podcast">
        <h3 class="podcast-title"><?php the_title();?></h3>
        <div><?php the_content(); ?></div>    
        <span class="podcast-date"><?php 
          $eventDate = new DateTime(get_field('broadcast_date'));
          echo $eventDate->format('F j, Y');?>
      </span>              
    </div>
<?php }
?>
 </div>
 </main>

<?php
get_footer();
?>