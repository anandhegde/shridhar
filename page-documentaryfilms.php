<?php get_header(); ?>
  <!--========================================================
                              CONTENT
    =========================================================-->
  <section id="content" class="content">

    <div class="container">
      <hr class="hr-about">
      <div class="about">
        <h3>Documentary Films</h3>
        <p>Crucible’s dedicated team will take care of all aspects of documentary production. We have the equipment and expertise to undertake productions from scripting to final mix. To our credit,we have produced a number of documentaryfilms on Life causing diseases(AIDS,Cancer,TB,etc.),Public awareness programs, Biography of literature personalities,Western Ghats of India, and Endangered tribal communities of south India.</p>
        <br><br>
        <?php 
            $args=array(
              'post_type' => 'DocumentaryFilm',
              'meta_key' => 'documentary_Film_priority',
              'posts_per_page' => 150,
              'orderby' => 'meta_value_num',
              'order' => 'ASC');
            $corporatefilm_query = new WP_Query($args);
            $count_posts = wp_count_posts( 'documentaryfilm' )->publish;
            $count = 1;
            for($i = 0; $i < $count_posts; $i++)
            {
              $corporatefilm_query->the_post();
              if($count == 1)
              {
                echo '<div class="row">';
              }
              echo '<div class="grid_6 wow fadeInLeft">';
              echo '<a class="fancybox" href="'.get_post_meta(get_the_ID(),'documentaryFilm_url',true).'">'.the_post_thumbnail().'</a>';
              echo '<h5>'.get_the_title().'</h5>';
              echo '<p>'.the_content().'</p>';
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

<?php get_footer(); ?>