<?php 

get_header(); 
?>
<div class="page-title-container">
    <h2 class="page-title">Podcasts</h2>
</div>  


<main class="content">
<?php 
        $podcastPosts = new WP_Query(array(
            'posts_per_page' => 10,
            'post_type' => 'podcast'
        ));
        while ($podcastPosts->have_posts()) {
            $podcastPosts->the_post(); ?>
            <div class="podcast-summary">
                <a class="" href="<?php the_permalink(); ?>">
                  <span class=""><?php the_time('M')?></span>
                  <span class=""><?php the_time('d')?></span>
                </a>
                <div class="">
                  <h5 class=""><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
                  <p><?php echo wp_trim_words(get_the_content(), 18) ?><a href="<?php the_permalink(); ?>" class="nu gray">Listen</a></p>
                </div>
              </div>
            <?php } wp_reset_postdata();
           ?>
</main>

<?php 

get_footer();
?>