<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package crucible
 */

get_header(); ?>

    <!--========================================================
                              CONTENT
    =========================================================-->

  <section id="content" class="content">
    <div class="camera_block">
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
                echo '<div class="camera_caption fadeIn">';
                  echo '<div class="camera_caption_title">';
                   echo '<h2>image size is 1950 x 736.Give a proper caption for the image</h2>';
                  echo '</div>';
                echo '</div>';
              echo '</div><!--camera-item-->';
            }
          ?>
      </div><!--camera_wrap-->
    </div><!--camera_block-->

   <div class="container">
    <hr/>
    <div class="video-content folio-video-content">
    <h3>Our Works</h3>
      <div class="row">
        <div class="grid_6">
          <a class="fancybox fancybox.video" href="player.vimeo.com/video/37582125?wmode=transparent"><img class="video-bg" src="images/page01-01.jpg" alt="Video"><img class="cursor" src="images/video-hover.png" alt=""></a>
          <h4>Corporate Films & Presentations</h4>
          <h5></h5>
          <p>CRUCIBLE offers turnkey audio visual services accommodating all facets of video production in corporate applications. CRUCIBLE produces video presentations that will illustrate your ideas to clients. We will work with you, side-by-side, ensuring you with finished video presentation that will meet your satisfaction. Crucible giving a robust brand to take shape, creating a unique corporate identity.</p>
          <a class="main-btn" href="<?php  echo get_home_url();?>/corporatefilms"><span>read more</span></a>
        </div>
        <div class="grid_6">
          <a class="fancybox fancybox.video" href="player.vimeo.com/video/37582125?wmode=transparent"><img class="video-bg" src="images/page01-02.jpg" alt="Video"><img class="cursor" src="images/video-hover.png" alt=""></a>
          <h4>Ad Films & Promo's</h4>
          <h4 style="visibility:hidden">Ad Films</h4>
          <h5></h5>
          <p>CRUCIBLE caters to your marketing needs creating Ads that your targetaudience can't miss. With a full range of integratedAdvertising services, we research on target audience.From development of concept to storyboarding,visualizing, media planning, outdoor and indoorshooting and post production CRUCIBLE provides consistent, measurable results </p>
          <a class="main-btn" href="<?php  echo get_home_url();?>/adfilmsnpromos"><span>read more</span></a>
        </div>
      </div><!--row-->
      <div class="row">
        <div class="grid_6">
          <a class="fancybox fancybox.video" href="player.vimeo.com/video/37582125?wmode=transparent"><img class="video-bg" src="images/page03-02.jpg" alt="Video"><img class="cursor" src="images/video-hover.png" alt=""></a>
          <h4>Documentary Films</h4>
          <h5></h5>
          <p>Crucible’s dedicated team will take care of all aspects of documentary production. We have the equipment and expertise to undertake productions from scripting to final mix. To our credit,we have produced a number of documentaryfilms on Life causing diseases(AIDS,Cancer,TB,etc.),Public awareness programs, Biography of literature personalities,Western Ghats of India, and Endangered tribal communities of south India. </p>
          <a class="main-btn" href="<?php  echo get_home_url();?>/documentaryfilms"><span>read more</span></a>
        </div>
        <div class="grid_6">
          <a class="fancybox fancybox.video" href="player.vimeo.com/video/37582125?wmode=transparent"><img class="video-bg" src="images/page03-03.jpg" alt="Video"><img class="cursor" src="images/video-hover.png" alt=""></a>
          <h4>Tele Films & Series</h4>
          <h5></h5>
          <p>Crucible has produced its own Television series Tele films and live shows for Doordarshan regional and also National theonly terrestrial channel of India. In addition tothis we have contributed to the production orpost-production of literally thousands of programs for other producers, primarily fortelevision. </p>
          <p style="visibility:hidden">dummy paragraph</p>
          <a class="main-btn" href="<?php  echo get_home_url();?>/telefilmsnseries"><span>read more</span></a>
        </div>
      </div>
    </div><!--latest-works-->
  </div><!--container-->

  <div class="parallax parallax1" data-parallax-speed="-0.2">
      <div class="container">
        <div class="content-box">
          <div class="row">
            <h2>Who We Are</h2>
            <p class="text-justify">At Crucible innovations, we believe in creativity that works, and in ideas that connect you with your potential customers. We contribute our services to help you face the challenges of connecting to your customers by entertaining them within the context of the larger goal of persuading, deepening customer relationship, of selling your product and building a brand.</p>
            <a class="main-btn search-icon" href="index-1.html">More about us</a>
          </div><!--row-->
        </div><!--who-we-are-->
      </div><!--container-->
  </div>

  <div class="container">
    <div class="content-block-1">
      <h3>Our Services</h3>
      <div class="row">
        <div class="grid_6 wow fadeInUp">
          <div class="services_icon"><i class="fa fa-camera"></i></div>
          <h4 class="text-center">Camera & Production</h4>
          <p class="text-justify">Crucible production arm provides complete line production, coordination and management facilities to film crews across India. To film in an unknown environment is always stressful but our pre production planning ensures that there are no hassles on the shoot. This increases the productivity and lowers the cost as well. Our coordinators have experience in making a rapport with the subjects, pinning down a location with proper releases and conduct research to dig out interesting facets adding value to the film.</p>
          <p style="visibility:hidden">to make read more align with other read more</p>
          <p style="visibility:hidden">to make read more align with other read more</p>
          <p style="text-align:center"><a class="main-btn" href="#">read more</a></p>
        </div>
        <div class="grid_6 wow fadeInUp">
          <div class="services_icon"><i class="fa fa-group"></i></div>
          <h4 class="text-center">Post-Production </h4>
          <p class="text-justify">As a multi-genre post-production house we offer our clients a creative staff with a versatile background in dramas, commercials, TV specials, documentaries and AV promos. Our depth of experience is critical when it comes to making your project stand out above the rest. Our editors can accompany your project from the initial idea through production, editing and follow-up, providing you with the continuity you need to get the best possible results.</p>
          <p style="visibility:hidden">to make read more align with other read more</p>
          <p style="visibility:hidden">to make read more align with other read more</p>
          <p style="text-align:center"><a class="main-btn" href="#">read more</a></p>
        </div> 
      </div><!-- row ends here-->
      <br><br><br><br>
      <div class="row">  
         <div class="grid_6 wow fadeInUp">
          <div class="services_icon"><i class="fa fa-play-circle"></i></div>
          <h4 class="text-center">Motion Graphic & Vfx </h4>
          <p class="text-justify">We have our creative graphic team to provide you with any engaging graphics and story-board, be it for incorporating into video or for print applications. The team has productively worked on Film publicity material ranging from Credit Roll, Posters, fliers, DVD/CD Covers and the Media kit to send to film festivals and for press conferences. We have dual processor graphic workstations to cater to all 2D and 3D graphic requirements. Compositing / Color Correction Looking for superior compositing and color correction solution in India? At Crucible we are adequately equipped with both hardware and a talented workforce to provide you with stunning visual effects and picture perfect colour correction.</p>
          <p style="visibility:hidden">to make read more align with other read more</p>
          <p style="visibility:hidden">to make read more align with other read more</p>
          <p style="text-align:center"><a class="main-btn" href="#">read more</a></p>
        </div>
        <div class="grid_6 wow fadeInUp">
          <div class="services_icon"><i class="fa fa-bullhorn"></i></div>
          <h4 class="text-center">Profesional Audio Studio</h4>
          <p class="text-justify">At Crucible personalized customer service provides every fecility of film making under one roof .An audio studio offers quality recording to a complete television production. This means that you’ll always get prompt delivery.In addition, as told erlier our experienced technicians contribute their talents to deliver a perfect product out put in well furnished working atmosphere.</p>
          <p style="visibility:hidden">to make read more align with other read more</p>
          <p style="visibility:hidden">to make read more align with other read more</p>
          <p style="visibility:hidden">to make read more align with other read more</p>
          <p style="visibility:hidden">to make read more align with other read more</p>
          <p style="visibility:hidden">to make read more align with other read more</p>
          <p style="text-align:center"><a class="main-btn" href="#">read more</a></p>
        </div>     
      </div><!--row-->
    </div><!--services-->
  </div><!--container-->


  <div class="container">
    <hr class="main-hr">
    <div class="row">
      <div class="grid_8 wow fadeInLeft">
        <h3 class="tab-title">Why Us?</h3>
        <div id="demoTab">          
          <ul class="resp-tabs-list">
              <li>Dolore ispum Dolore ispumDolore ispum</li>
              <li>quis enim</li>
              <li>ligula pharetra</li>
              <li>itollicil tua</li>
          </ul> 

          <div class="resp-tabs-container">                                                        
              <div>
                <h5>Maecenas quis enim non ligula pharetra fringilla vel id eros. Aliqu vitaenunc.</h5>

                <p>Dolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upi disse comete dolo lectus fgilla itollicil tua ludin dolor nec met quam accumsan. Dolore con dime netus lullam utlacus adipiscing ipsum molestie.</p>
              </div>
              <div class="tabs-icon-1">
                <h5>Maecenas quis enim non ligula pharetra fringilla vel id eros. Aliqu vitaenunc.</h5>

                <p>Dolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upi disse comete dolo lectus fgilla itollicil tua ludin dolor nec met quam accumsan. Dolore con dime netus lullam utlacus adipiscing ipsum molestie.</p>
              </div>
              <div class="tabs-icon-2">
                <h5>Maecenas quis enim non ligula pharetra fringilla vel id eros. Aliqu vitaenunc.</h5>

                <p>Dolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upi disse comete dolo lectus fgilla itollicil tua ludin dolor nec met quam accumsan. Dolore con dime netus lullam utlacus adipiscing ipsum molestie.</p>
              </div>
              <div class="tabs-icon-3">
                <h5>Maecenas quis enim non ligula pharetra fringilla vel id eros. Aliqu vitaenunc.</h5>

                <p>Dolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upi disse comete dolo lectus fgilla itollicil tua ludin dolor nec met quam accumsan. Dolore con dime netus lullam utlacus adipiscing ipsum molestie.</p>
              </div>
          </div>
        </div> 
      </div>
      <div class="grid_4 wow fadeInRight">
        <div class="news">
        <h3>Latest News</h3>
          <div class="news_item">
            <time class="news_date" datetime="2014-12-03">
              <span class="news_date_top-block">03</span>
              <span class="news_date_bot-block"><span>dec</span><br>2014</span>
            </time>
            <div class="news_info">
              <h5><a href="#">Donec facilisi ule<br><span>Mes cuml dia sed</span></a></h5>
              <p>Morbi tempor quam mas sadipu iscing ut cucongue pentesqu nisel elit comte modo velultrices vel conseq.</p>
            </div>
          </div><!--news_item-->
          <div class="news_item">
            <time class="news_date" datetime="2014-12-03">
              <span class="news_date_top-block">06</span>
              <span class="news_date_bot-block"><span>dec</span><br>2014</span>
            </time>
            <div class="news_info">
              <h5><a href="#">Donec facilisi ule<br><span>Mes cuml dia sed</span></a></h5>
              <p>Morbi tempor quam mas sadipu iscing ut cucongue pentesqu nisel elit comte modo velultrices vel conseq.</p>
            </div>
          </div><!--news_item--> 
        </div><!--news--> 
      </div>
    </div><!--row-->
  </div><!--container-->


  </section>  

  
<?php get_footer(); ?>
