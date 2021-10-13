<?php 

get_header(); 

while ( have_posts() ) {
    the_post(); ?>
    <div class="page-title-container">
      <h2 class="page-title"><?php the_title() ?></h2>
    </div>
    <p class="broker-check-bubble">Check the background of your financial professional on FINRA's <a style="color: black" href="https://brokercheck.finra.org/">BrokerCheck</a><p> 
    <main class="content">
        <?php the_content() ?>
</main>

  </div> 
<?php }

get_footer();
?>