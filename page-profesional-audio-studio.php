 <?php get_header(); ?>
  <!--========================================================
                              CONTENT
    =========================================================-->
  <section id="content" class="content">

    <div class="container">
      <hr class="hr-about">
      <div class="about">
        <h3>Profesional Audio Studio</h3>
        <p>Professional audio studio for voice over and dubbing Equipped with Pro Tools. This facility under the same roof is an advantage for producer to meet the deadline without compromising on the quality.</p>
        <br><br>
        <?php 
            $args=array(
              'post_type' => 'profesionalaudiovdio',
              'meta_key' => 'profesionalAudioVideo_priority',
              'posts_per_page' => 150,
              'orderby' => 'meta_value_num',
              'order' => 'ASC');
            $adfilm_query = new WP_Query($args);
            $count_posts = wp_count_posts( 'profesionalaudiovdio' )->publish;
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