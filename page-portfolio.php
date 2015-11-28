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
  <section id="content" class="content folio-content">

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
        <div class="content-box folio-content-box">
          <div class="row">
            <h2>Best Proposals</h2>
            <h4>Aliquam dapibus tincidunt metus Praesent justo dolor, lobortis quis lobortis dignissim pulvinar acon</h4>
            <p>Mes cuml dia sed ineniasinge dolor ipsum commete ipsum comnetus Mes ineniasinge dolor. Dolor ipsum commete ipsum comnetus Mes ineniasinge dolor. Mes cuml dia sed ineniasinge Ineniasinge Dolor ipsum commete ipsum comnetus Mes.</p>
            <a class="main-btn" href="#"><span>read more</span></a>
          </div><!--row-->
        </div><!--who-we-are-->
      </div><!--container-->
  </div>

  </section>  

 
  <?php get_footer(); ?>