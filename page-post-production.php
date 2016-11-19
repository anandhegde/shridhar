 <?php get_header(); ?>
  <!--========================================================
                              CONTENT
    =========================================================-->
  <section id="content" class="content">

    <div class="container">
      <hr class="hr-about">
      <div class="about">
        <h3>Film and Video Editing Suites</h3>
        <p>We pride ourselves on employing a team that understands the traditional broadcast and digital space and maintaining a production infrastructure that is innovative, cost efficient and delivers the highest quality product To this end we currently house: · Final Cut Pro HD Suites · Avid Media Composer with MOJO · DPS Velocity.</p>
        <br><br>
        <?php 
            $args=array(
              'post_type' => 'postproduction',
              'meta_key' => 'postProduction_priority',
              'posts_per_page' => 150,
              'orderby' => 'meta_value_num',
              'order' => 'ASC');
            $adfilm_query = new WP_Query($args);
            $count_posts = wp_count_posts( 'postproduction' )->publish;
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