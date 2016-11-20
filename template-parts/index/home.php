<div id="home" class="camera_block">
  <div class="camera_wrap">
    <?php 
        $args=array(
          'post_type' => 'homePageImage',
          'meta_key' => 'homePageImage_priority',
          'posts_per_page' => 150,
          'orderby' => 'meta_value_num',
          'order' => 'ASC');
        $corporatefilm_query = new WP_Query($args);
        $count_posts = wp_count_posts( 'homepageimage' )->publish;
        $count = 1;
        for($i = 0; $i < $count_posts; $i++)
        {
          $corporatefilm_query->the_post();
          //the_post_thumbnail();
          $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'single-post-thumbnail' ); 
          echo '<div data-src="'.$image[0].'">';
          echo '</div><!--camera-item-->';
        }
      ?>
  </div><!--camera_wrap-->
</div><!--camera_block-->