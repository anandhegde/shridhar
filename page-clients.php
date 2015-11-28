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

  <div class="container">
    <hr>
    <div class="aff-program">
      <h3>Affiliate Program</h3>
      <div class="row">
        <div class="grid_5 wow fadeInLeft">
          <div class="aff-program_img">
            <a class="fancybox" href="images/page04-01b.jpg"><img src="images/page04-01.jpg" alt=""></a>
          </div>
        </div>
        <div class="grid_7 wow fadeInRight">
          <div class="aff-program_caption">
            <h5><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a></h5>
            <p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna.</p>
            <h5><a href="#">Praesent vestibulum molestie lacus.</a></h5>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. </p>
            <h5><a href="#">Aenean nonummy hendrerit mauris Phasellus porta.</a></h5>
            <p>Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna.</p>
            <h5><a href="#">Fusce suscipit varius mi.</a></h5>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
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


  </section>  

 
  <?php get_footer(); ?>