 <?php get_header(); ?>
  <!--========================================================
                              CONTENT
    =========================================================-->
  <section id="content" class="content">

    <div class="container">
      <hr class="hr-about">
      <div class="about">
        <h3>Ad Films & Promo's</h3>
        <p>CRUCIBLE caters to your marketing needs creating Ads that your targetaudience can't miss. With a full range of integratedAdvertising services, we research on target audience.From development of concept to storyboarding,visualizing, media planning, outdoor and indoorshooting and post production CRUCIBLE provides consistent, measurable results.</p>
        <br><br>
        <?php 
            $args=array(
              'post_type' => 'adFilm',
              'meta_key' => 'adFilm_priority',
              'posts_per_page' => 150,
              'orderby' => 'meta_value_num',
              'order' => 'ASC');
            $adfilm_query = new WP_Query($args);
            $count_posts = wp_count_posts( 'adfilm' )->publish;
            $count = 1;
            for($i = 0; $i < $count_posts; $i++)
            {
              $adfilm_query->the_post();
              if($count == 1)
              {
                echo '<div class="row">';
              }
              echo '<div class="grid_6 wow fadeInLeft">';
              echo '<a class="fancybox" href="'.get_post_meta(get_the_ID(),'adFilm_url',true).'">'.get_the_post_thumbnail().'</a>';
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
<?php get_footer();?>