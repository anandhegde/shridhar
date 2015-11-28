<?php get_header(); ?>
<!--========================================================
                              CONTENT
    =========================================================-->
  <section id="content" class="content">

    <div class="container">
      <hr class="hr-about">
      <div class="about">
        <h3>Tele Films & Series</h3>
        <p>Crucible has produced its own Television series Tele films and live shows for Doordarshan regional and also National theonly terrestrial channel of India. In addition tothis we have contributed to the production orpost-production of literally thousands of programs for other producers, primarily fortelevision.</p>
        <br><br>
        <?php 
            $args=array(
              'post_type' => 'telefilm',
              'meta_key' => 'tele_Film_priority',
              'posts_per_page' => 150,
              'orderby' => 'meta_value_num',
              'order' => 'ASC');
            $telefilm_query = new WP_Query($args);
            $count_posts = wp_count_posts( 'telefilm' )->publish;
            $count = 1;
            for($i = 0; $i < $count_posts; $i++)
            {
              $telefilm_query->the_post();
              if($count == 1)
              {
                echo '<div class="row">';
              }
              echo '<div class="grid_6 wow fadeInLeft">';
              echo '<a class="fancybox" href="'.get_post_meta(get_the_ID(),'teleFilm_url',true).'">'.the_post_thumbnail().'</a>';
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