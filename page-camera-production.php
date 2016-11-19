 <?php get_header(); ?>
  <!--========================================================
                              CONTENT
    =========================================================-->
  <section id="content" class="content">

    <div class="container">
      <hr class="hr-about">
      <div class="about">
        <h3>Camera & Production facility</h3>
        <p>Our Camera facilities will ensure your production ismade to world-class standards, allowing our clients to make their own choice in the offered services. We can also organize High Definition (HD)equipments for shoots and post production as well.</p>
        <br><br>
        <?php 
            $args=array(
              'post_type' => 'cameraproduction',
              'meta_key' => 'cameraProduction_priority',
              'posts_per_page' => 150,
              'orderby' => 'meta_value_num',
              'order' => 'ASC');
            $adfilm_query = new WP_Query($args);
            $count_posts = wp_count_posts( 'cameraproduction' )->publish;
            $count = 1;
            for($i = 0; $i < $count_posts; $i++)
            {
              $adfilm_query->the_post();
              if($count == 1)
              {
                echo '<div class="row">';
              }
              echo '<div class="grid_6 wow fadeInLeft">';
              echo get_the_post_thumbnail();
              echo '</div>';
              if($count == 2)
              {
                echo "</div><br><br>";
                $count = 1;
              }
              else
              {
                $count++;
              }
            }
            if($count == 2)
            {
              echo "</div>";
            }
          ?>
      </div>
    </div>
  </section>  
<?php get_footer();?>