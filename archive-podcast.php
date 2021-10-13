<?php 

get_header(); 
?>
<div class="page-title-container">
    <h2 class="page-title">Podcasts</h2>
</div>  
<p class="broker-check-bubble">Check the background of your financial professional on FINRA's <a style="color: black" href="https://brokercheck.finra.org/" target="_blank" rel="noreferrer noopener">BrokerCheck</a><p> 

<main class="content">
    <div class="podcasts-container">
<?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $podcastPosts = new WP_Query(array(
            'posts_per_page' => 10,
            'post_type' => 'podcast',
            'meta_key' => 'broadcast_date',
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
            'paged' => $paged,
        ));
        while ($podcastPosts->have_posts()) {
            $podcastPosts->the_post(); ?>
            <div class="podcast">
                  <h3 class="podcast-title"><a href="<?php echo get_the_permalink() ?>"><?php the_title();?></a></h3>
                  <div><?php the_content(); ?></div>    
                  <span class="podcast-date"><?php 
                    $eventDate = new DateTime(get_field('broadcast_date'));
                    echo $eventDate->format('F j, Y');?>
                </span>              
              </div>
            <?php } 
           ?>
           <div class="pagination-container"><?php echo paginate_links(); ?></div>
    </div>
</main>
    
<?php 
wp_reset_postdata();
get_footer();
?>