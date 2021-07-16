<?php 

get_header(); 
?>
<div class="page-title-container">
    <h2 class="page-title">Podcasts</h2>
</div>  


<main class="content">
    <div class="podcasts-container">
<?php 
        $podcastPosts = new WP_Query(array(
            'posts_per_page' => 10,
            'post_type' => 'podcast'
        ));
        while ($podcastPosts->have_posts()) {
            $podcastPosts->the_post(); ?>
            <div class="single-podcast">
                  <h3 class=""><?php the_title();?></h3>
                  <div><?php the_content(); ?></div>    
                  <span class="podcast-date"><?php 
                    $eventDate = new DateTime(get_field('broadcast_date'));
                    echo $eventDate->format('F j, Y');?>
                </span>              
              </div>
            <?php } wp_reset_postdata();
           ?>
           <div class="pagination-container"><?php echo paginate_links(); ?></div>
    </div>
</main>
    
<?php 

get_footer();
?>