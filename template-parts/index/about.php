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
              <p>
                At Crucible innovations, we believe in creativity that works, and in ideas that connect you with your potential customers. We contribute our services to help you face the challenges of connecting to your customers by entertaining them within the context of the larger goal of persuading, deepening customer relationship, of selling your product and building a brand.

                To attain, we remain observant and analytical of the current social and consumer behavioral trends, resulting in a workable brand strategy, designed for the contemporary market. By sharing our expertise and information, we provide exceptionally comprehensive yet flexible services tailored to suit each assignment. We at Crucible Innovations welcome you for your complete video production support.

                Our Exclusive team enhances the Production Value of every project that we undertake with their ingenuity and experience, making each shoots a Master-Piece in its own reckoning. Every Film or Documentaries produced by Crucible Studio is a Breath fresh air in its individual Category.

                We never quit, we never rest on our laurels, we focus on our customers and we believe in doing business with integrity and honor.
              </p>
            </div>
            <div class="tabs-icon-2">
              <p>
                At Crucible,we put in our team effort weather it is a Corporate Film, TV Commercial, Corporate A/V, Documentary, Television Show, Live Event or a Music Video, Our deliverables have always achieved excellence, Conveyed Emotion and Told the Story, all the while serving to the actual purpose of each Project. 

                We treat each film as a showcase for our next project and each client as a part of our Creative Process. We understand the importance of each Technician, Professional, Performer, Equipment, Artist, Environment and the Utility of their Collective Chemistry in achieving the final composition of Film, Documentaries. 

                At Crucible its our aim is to satisfy our clients. We strive hard to delight our customers with our work and we’re committed to delivering absolutely the value for money. We believe in going the extra mile and offering a much higher level of service to those seeking our services. 

                We believe in listen more & speak less. We only speak with our job. We create friendly environment in between our Talent Pool and Clientele so that both may complement each other. Our clients see us as valuable advisors and their brand promoters. 
              </p>
            </div>
            <div class="tabs-icon-3">
              <div class="row">

                <table class="history" style="width:80%;margin-left:10%">
                  <tr>
                    <td>
                      1995
                    </td>
                    <td>
                      Crucible Studio came in to existence in Bangalore(India) with the talents from industry who decided to pool in to create their own space.It was the time when the Film and Tv industry was facing transition from analouge to digital.The young technicians with same line of thought started thinking the same and a team of youngs began. 
                    </td>
                  </tr>
                  <tr>
                    <td>
                      1998
                    </td>
                    <td>
                      This is the year when the young team got an independent Government documentary which was a challenge to complete the project within the limited time frame and budjet.The documentary was well apriciated by the department at that time.
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2000
                    </td>
                    <td>
                      CRUCIBLE Studio team proved its ability with every client.A enhanced studio fecility was set up to fulfil the client's demands.Constant innovation and upgradation is keeping pace and place in the competative market. 
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2012
                    </td>
                    <td>
                      As each year passed, CRUCIBLE Studio kept sharpening its edge and today we proudly introduce ourselves as one of the well known name in the field of film and Tv Production.
                      Our passion for creative conceptualization and meticulous planning that have been the pillars of our success and continuous growth. We believe in constant innovation and up-gradation and thus are able to keep pace with the fast moving competitive world. 
                    </td>
                  </tr>
                </table>
              </div>
            </div>
        </div>
      </div> 
    </div>
    <div class="grid_4 wow fadeInRight">
      <div class="news">
      <h3>Recent Works</h3>
          <?php

            $args=array(
              'post_type' => 'recentworks',
              'posts_per_page' => 150
            );
            $corporatefilm_query = new WP_Query($args);
            $count_posts = wp_count_posts( 'recentworks')->publish;
            $count = 1;
            for($i = 0; $i < $count_posts; $i++)
            {
              $corporatefilm_query->the_post();

              $date = get_post_custom_values('date', get_the_ID())[0];
              $year = explode("-", $date)[0];
              $month = explode("-", $date)[1];
              $day = explode("-", $date)[2];
          ?>
          <div class="news_item">
          <time class="news_date" datetime="2014-12-03">
            <span class="news_date_top-block"><?php echo "$day";?></span>
            <span class="news_date_bot-block"><span><?php echo "$month";?></span><br><?php echo "$year";?></span>
          </time>
          <div class="news_info">
            <h5><span><?php echo the_title() ?></span></h5>
            <p><?php echo get_post_custom_values('description', get_the_ID())[0]?></p>
          </div>
          </div>
          <?php
            }
          ?>
      </div><!--news--> 
    </div>
  </div><!--row-->
</div><!--container-->