<?php 

get_header(); ?>


    <div class="page-title-container">
      <h2 class="page-title">Our Blog</h2>
    </div>  
  
    
    <main class="content">
    
    <?php 

   

while (have_posts()) {
  the_post(); ?>
    <div class="post-item">
      <h3 class=""><a class="post-link" href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
      <div class="post-image-thumb-container"><?php if ( has_post_thumbnail() ) { 
        the_post_thumbnail( array( 300, 200 ) ); } ?>
    </div>
      <div class="metabox">
        <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time($format = 'F j, Y' ) ?> in <?php echo get_the_category_list(', ') ?></p>
      </div>
      <div class="generic-content">
        <?php if (has_excerpt()) {
                    echo get_the_excerpt();
                  } else {
                    echo wp_trim_words(get_the_content(), 18);
                  }?>
      </div>
      <span class="read-btn"><a href="<?php the_permalink(); ?>">Read More &raquo;</a></span>
    </div>

<?php }

?>
</main>
<div class="pagination-container"><?php echo paginate_links(); ?></div>
<?php get_footer();
?>



 