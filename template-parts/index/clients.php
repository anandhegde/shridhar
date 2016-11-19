<div id="clients" class="container">
  <div class="clients">
  <hr>
  <h3>Our Clients</h3>
      <?php
        $args=array(
          'post_type' => 'client',
          'meta_key' => 'client_priority',
          'posts_per_page' => 200,
          'orderby' => 'meta_value_num',
          'order' => 'ASC');
        $clients_query = new WP_Query($args);
        $count_posts = wp_count_posts( 'client' )->publish;
        $count = 1;
        for($i = 0; $i < $count_posts; $i++)
        {
          if( $i % 3 == 0 )
          {
            echo '<div class="row mb-10">';
          }
          $clients_query->the_post();
          //the_post_thumbnail();
          $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'single-post-thumbnail' );
      ?>
            <div class="grid_4 wow fadeInUp">
              <img class="clients_logo" src="<?php echo $image[0];?>" alt="">
              <h4><a href="<?php echo get_post_custom_values( 'client_url', get_the_ID())[0];?>"><?php echo the_title(); ?></a></h4>
              <p><?php echo get_post_custom_values( 'client_info', get_the_ID())[0]; ?></p>
            </div>
      <?php
          if( $i % 3 == 2 or $i == ($count_posts - 1))
          {
            echo '</div>';
          }
        }
      ?>
  </div>
</div>