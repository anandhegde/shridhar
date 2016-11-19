 <?php get_header(); ?>
  <!--========================================================
                              CONTENT
    =========================================================-->
  <section id="content" class="content">

    <div class="container">
      <hr class="hr-about">
      <div class="about">
        <h3>Motion Graphics & Vfx Studio</h3>
        <p>We provide a full range of state of the artmulti layer Digital Compositing, Motion tracking,Visual special effects and 3d &2d Title Design and animation facilities.We also under take High resolution rendering,HD and D1 to film transfers and scanningand laser film recording. </p>
        <br><br>
        <?php 
            $args=array(
              'post_type' => 'motiongraphic',
              'meta_key' => 'motionGraphicVfx_priority',
              'posts_per_page' => 150,
              'orderby' => 'meta_value_num',
              'order' => 'ASC');
            $adfilm_query = new WP_Query($args);
            $count_posts = wp_count_posts( 'motiongraphic' )->publish;
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