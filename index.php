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

 <div id="about" class="container">
    <hr class="main-hr">
    <div class="row">
      <div class="grid_8 wow fadeInLeft">
        <h3 class="tab-title">Why Us?</h3>
        <div id="demoTab">          
          <ul class="resp-tabs-list">
              <li>About Us</li>
              <li>Team Work</li>
              <li>Our Moto</li>
              <li>History</li>
          </ul> 

          <div class="resp-tabs-container">                                                        
              <div>
                <p>
                    Crucible Innovations is a film and Video production company based in Bangalore, India specializing in Corporate Films Production, Tele Series, Fictions, Ad Film, Short films, Product Presentation, Visual effects, Motion graphics, 3d animation services and more... 

We recognize and offer the strategic importance of Bangalore.

Our experienced and talented team of Creative Directors, Script writers, Visualizers, Video editors, Graphic designers…all strives to bring in a unique perspective and maximum impact to every project.

At Crucible Innovations, we make the process of commissioning a video production as easy as possible. Our highly skilled and creative team work endlessly to help create your vision in a best presentable manner. Our business philosophy is to exceed our client's expectations by delivering a top notch production which aims to engage its audience. 

We offer complete video production services. 
                </p>
              </div>
              <div class="tabs-icon-1">
                <p>At Crucible innovations, we believe in creativity that works, and in ideas that connect you with your potential customers. We contribute our services to help you face the challenges of connecting to your customers by entertaining them within the context of the larger goal of persuading, deepening customer relationship, of selling your product and building a brand.

To attain, we remain observant and analytical of the current social and consumer behavioral trends, resulting in a workable brand strategy, designed for the contemporary market. By sharing our expertise and information, we provide exceptionally comprehensive yet flexible services tailored to suit each assignment. We at Crucible Innovations welcome you for your complete video production support.

Our Exclusive team enhances the Production Value of every project that we undertake with their ingenuity and experience, making each shoots a Master-Piece in its own reckoning. Every Film or Documentaries produced by Crucible Studio is a Breath fresh air in its individual Category.

We never quit, we never rest on our laurels, we focus on our customers and we believe in doing business with integrity and honor.</p>
              </div>
              <div class="tabs-icon-2">
                <p>At Crucible,we put in our team effort weather it is a Corporate Film, TV Commercial, Corporate A/V, Documentary, Television Show, Live Event or a Music Video, Our deliverables have always achieved excellence, Conveyed Emotion and Told the Story, all the while serving to the actual purpose of each Project. 

We treat each film as a showcase for our next project and each client as a part of our Creative Process. We understand the importance of each Technician, Professional, Performer, Equipment, Artist, Environment and the Utility of their Collective Chemistry in achieving the final composition of Film, Documentaries. 

At Crucible its our aim is to satisfy our clients. We strive hard to delight our customers with our work and we’re committed to delivering absolutely the value for money. We believe in going the extra mile and offering a much higher level of service to those seeking our services. 

We believe in listen more & speak less. We only speak with our job. We create friendly environment in between our Talent Pool and Clientele so that both may complement each other. Our clients see us as valuable advisors and their brand promoters. </p>
              </div>
              <div class="tabs-icon-3">
                <p>1995Crucible Studio came in to existence in Bangalore(India) with the talents from industry who decided to pool in to create their own space.It was the time when the Film and Tv industry was facing transition from analouge to digital.The young technicians with same line of thought started thinking the same and a team of youngs began1998This is the year when the young team got an independent Government documentary which was a challenge to complete the project within the limited time frame and budjet.The documentary was well apriciated by the department at that time. 2000CRUCIBLE Studio team proved its ability with every client.A enhanced studio fecility was set up to fulfil the client's demands.Constant innovation and upgradation is keeping pace and place in the competative market.2012As each year passed, CRUCIBLE Studio kept sharpening its edge and today we proudly introduce ourselves as one of the well known name in the field of film and Tv Production.
Our passion for creative conceptualization and meticulous planning that have been the pillars of our success and continuous growth. We believe in constant innovation and up-gradation and thus are able to keep pace with the fast moving competitive world.</p>
              </div>
          </div>
        </div> 
      </div>
      <div class="grid_4 wow fadeInRight">
        <div class="news">
        <h3>Recent Works</h3>
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
  


   <div id="portfolio" class="container">
    <hr/>
    <div class="video-content folio-video-content">
    <h3>Our Works</h3>
      <div class="row">
        <div class="grid_6">
          <a class="fancybox fancybox.video" href="player.vimeo.com/video/37582125?wmode=transparent"><img class="video-bg" src="<?php bloginfo('template_url')?>/images/page01-01.jpg" alt="Video"><img class="cursor" src="<?php bloginfo('template_url')?>/images/video-hover.png" alt=""></a>
          <h4>Corporate Films & Presentations</h4>
          <h5></h5>
          <p>CRUCIBLE offers turnkey audio visual services accommodating all facets of video production in corporate applications. CRUCIBLE produces video presentations that will illustrate your ideas to clients. We will work with you, side-by-side, ensuring you with finished video presentation that will meet your satisfaction. Crucible giving a robust brand to take shape, creating a unique corporate identity.</p>
          <a class="main-btn" href="<?php  echo get_home_url();?>/corporatefilms"><span>read more</span></a>
        </div>
        <div class="grid_6">
          <a class="fancybox fancybox.video" href="player.vimeo.com/video/37582125?wmode=transparent"><img class="video-bg" src="<?php bloginfo('template_url')?>/images/page01-01.jpg" alt="Video"><img class="cursor" src="<?php bloginfo('template_url')?>/images/video-hover.png" alt=""></a>
          <h4>Ad Films & Promo's</h4>
          <h4 style="visibility:hidden">Ad Films</h4>
          <h5></h5>
          <p>CRUCIBLE caters to your marketing needs creating Ads that your targetaudience can't miss. With a full range of integratedAdvertising services, we research on target audience.From development of concept to storyboarding,visualizing, media planning, outdoor and indoorshooting and post production CRUCIBLE provides consistent, measurable results </p>
          <a class="main-btn" href="<?php  echo get_home_url();?>/adfilmsnpromos"><span>read more</span></a>
        </div>
      </div><!--row-->
      <div class="row">
        <div class="grid_6">
          <a class="fancybox fancybox.video" href="player.vimeo.com/video/37582125?wmode=transparent"><img class="video-bg" src="<?php bloginfo('template_url')?>/images/page01-01.jpg" alt="Video"><img class="cursor" src="<?php bloginfo('template_url')?>/images/video-hover.png" alt=""></a>
          <h4>Documentary Films</h4>
          <h5></h5>
          <p>Crucible’s dedicated team will take care of all aspects of documentary production. We have the equipment and expertise to undertake productions from scripting to final mix. To our credit,we have produced a number of documentaryfilms on Life causing diseases(AIDS,Cancer,TB,etc.),Public awareness programs, Biography of literature personalities,Western Ghats of India, and Endangered tribal communities of south India. </p>
          <a class="main-btn" href="<?php  echo get_home_url();?>/documentaryfilms"><span>read more</span></a>
        </div>
        <div class="grid_6">
          <a class="fancybox fancybox.video" href="player.vimeo.com/video/37582125?wmode=transparent"><img class="video-bg" src="<?php bloginfo('template_url')?>/images/page01-01.jpg" alt="Video"><img class="cursor" src="<?php bloginfo('template_url')?>/images/video-hover.png" alt=""></a>
          <h4>Tele Films & Series</h4>
          <h5></h5>
          <p>Crucible has produced its own Television series Tele films and live shows for Doordarshan regional and also National theonly terrestrial channel of India. In addition tothis we have contributed to the production orpost-production of literally thousands of programs for other producers, primarily fortelevision. </p>
          <p style="visibility:hidden">dummy paragraph</p>
          <a class="main-btn" href="<?php  echo get_home_url();?>/telefilmsnseries"><span>read more</span></a>
        </div>
      </div>
    </div><!--latest-works-->
  </div><!--container-->


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

 <div id="clients" class="container">
    <div class="clients">
    <hr>
    <h3>Our Clients</h3>
      <div class="row">
        <div class="grid_4 wow fadeInUp">
          <img class="clients_logo" src="images/page04-02.jpg" alt="">
          <h4><a href="#">client name</a></h4>
          <p>Dolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien disse comete dolo lectus.</p>
        </div>
        <div class="grid_4 wow fadeInRight">
          <img class="clients_logo" src="images/page04-03.jpg" alt="">
          <h4><a href="#">client name</a></h4>
          <p>Dolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien disse comete dolo lectus.</p>
        </div>
        <div class="grid_4 wow fadeInLeft">
          <img class="clients_logo" src="images/page04-04.jpg" alt="">
          <h4><a href="#">client name</a></h4>
          <p>Dolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien disse comete dolo lectus.</p>
        </div>
      </div>
      <div class="row">
        <div class="grid_4 wow fadeInUp">
          <img class="clients_logo" src="images/page04-05.jpg" alt="">
          <h4><a href="#">client name</a></h4>
          <p>Dolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien disse comete dolo lectus.</p>
        </div>
        <div class="grid_4 wow fadeInRight">
          <img class="clients_logo" src="images/page04-06.jpg" alt="">
          <h4><a href="#">client name</a></h4>
          <p>Dolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien disse comete dolo lectus.</p>
        </div>
        <div class="grid_4 wow fadeInLeft">
          <img class="clients_logo" src="images/page04-07.jpg" alt="">
          <h4><a href="#">client name</a></h4>
          <p>Dolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien disse comete dolo lectus.</p>
        </div>
      </div>
    </div>
  </div>
 
<div id="contact" class="container">
    <hr/>
    <div class="row">
      <div class="grid_12">
        
        <div class="map">
        <h3>How to Contact Us</h3>
          <div id="google-map" class="map_model">
          </div>
          <ul class="map_locations">
            <li data-x="-73.9874068" data-y="40.643180" >
              <p> 9863 - 9867 Mill Road, Cambridge, MG09 99HT.<br><span>+1 800 559 6580</span><br><span>+1 800 603 6035</span></p>
            </li>
          </ul>
        </div><!--map-->
        <p>Enjoyed looking at our work?</p><br>
        <p>We'd love to hear from you!It is our great honour to provide service.Please Fill out the form and we'll get back to you as soon as we can.</p>
        <div class="contacts">
            <div class="contacts_addr">
                <a href="#">mail@cricuble.tv</a> <br>
                <a href="#">crucible.mail@gmail.com</a>
            </div>
          <div class="contacts_tel">
            <ul>
              <li>+91 8026 612 218</li>
              <li>+91 9845 059 573</li>
            </ul>
          </div>
          <div class="contacts_mail">
                208/02 3rd main Road, Chamarajpet<br>Bangalore (Karnataka)<br>India-560 018
          </div>
        </div>
      </div>
    </div>
  </div>


  </section>  

  
<?php get_footer(); ?>
