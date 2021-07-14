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
      <p><a class="" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
    </div>

<?php }
echo paginate_links();
?>
</main>

  </div>
<?php get_footer();
?>