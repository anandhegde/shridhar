 <?php get_header(); ?>
  <!--========================================================
                              CONTENT
    =========================================================-->
  <section id="content" class="content">

    <div class="container">
      <hr class="hr-about">
      <div class="about">
        <h3>Corporate Films & Presentations</h3>
        <p>CRUCIBLE has extensive experience producing videos for a wide range of corporate applications. Apart from producing broadcast-ready commercial spots, we also develop high-impact training videos, internal marketing videos, tradeshow videos and more. We will take your message and produce a quality piece that delivers it to staff and external customers in an informative and engaging way.</p>

        <p>There are elements in corporate videos that can make the difference in either capturing your audience’s attention, or causing them to “tune out” regardless of the importance of your message. Audio and video quality is important, as are smooth transitions, balanced graphics and pleasing on-screen talent. Staff training videos, video news releases, B-roll and other corporate videos all benefit from hiring a firm that consistently produces broadcast quality material like CRUCIBLE INNOVATIONS.</p>
        <br><br>
        <?php 
            $args=array(
              'post_type' => 'corporatefilm',
              'meta_key' => 'corporateFilm_priority',
              'posts_per_page' => 150,
              'orderby' => 'meta_value_num',
              'order' => 'ASC');
            $corporatefilm_query = new WP_Query($args);
            $count_posts = wp_count_posts( 'corporatefilm' )->publish;
            $count = 1;
            for($i = 0; $i < $count_posts; $i++)
            {
              $corporatefilm_query->the_post();
              if($count == 1)
              {
                echo '<div class="row">';
              }
              echo '<div class="grid_6 wow fadeInLeft">';
              echo '<a class="fancybox" href="'.get_post_meta(get_the_ID(),'corporateFilm_url',true).'">'.the_post_thumbnail().'</a>';
              echo '<h5>'.get_the_title().'</h5>';
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