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
      <hr class="hr-about">
      <div class="about">
        <h3>About Us</h3>
        <div class="row">
            <div class="grid_6 wow fadeInLeft">
              <a class="fancybox" href="images/page02-01b.jpg"><img src="images/page02-01.jpg" alt="Video"></a>
              <h5>Praesent justo dolor, lobortis quis, lobortis dignis sim, pulvinar ac, loremMes cuml.</h5>
              <p>Dolor nunc vule putateulr ips dol consec.Donec semp ertet laciniate ultricie upien disse comete dolo lectus fgilla itollicil tua ludin dolor nec met quam accumsan dolore. Сondime netus lullam utlacus adipiscing ipsum molestie euismod estibulum vel libero ipsum sit amet sollicitudin ante. Aenean imperdiet aliquet hendrerit.</p>
              <p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio</p>
            </div>
            <div class="grid_6 wow fadeInRight">
              <a class="fancybox" href="images/page02-02b.jpg"><img src="images/page02-02.jpg" alt="Video"></a>
              <h5>Praesent justo dolor, lobortis quis, lobortis dignis sim, pulvinar ac, loremMes cuml.</h5>
              <ul>
                <li><a href="#">Nulla venenatis</a></li>
                <li><a href="#">In pede mi, aliquet sit amet, euismod in,auctor ut, ligula</a></li>
                <li><a href="#">Aliquam dapibus tincidunt metus</a></li>
                <li><a href="#">Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar</a></li>
                <li><a href="#">loremVestibulum sed ante</a></li>
                <li><a href="#">Donec sagittis euismod purus</a></li>
              </ul>
            </div>
            
        </div>
      </div>
    </div>

    <div class="parallax parallax1" data-parallax-speed="-0.2">
      <div class="container">
        <div class="content-box about-box">
          <div class="row">
            <h2>Testimonials</h2>
            <blockquote>“ Mes cuml dia sed ineniasinge dolor ipsum commete ipsum comnetus Mes ineniasinge dolor. Dolor ipsum commete ipsum comnetus Mes ineniasinge dolor. Mes cuml dia sed ineniasinge Ineniasinge Dolor ipsum commete ipsum comnetus Mes. ”<span>- Dayle Peters</span></blockquote>
            <a class="main-btn search-icon" href="#">view all</a>
          </div><!--row-->
        </div><!--content-box-->
      </div><!--container-->
  </div>

  <div class="container">
    <div class="about-offer">
      <h3>What We Offer</h3>
      <div class="row">
        <div class="grid_4 wow fadeInLeft">
          <h4 data-number="1."><a href="#">Aliquam fermentum</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.</p>
          <p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.</p>
        </div>
        <div class="grid_4 wow fadeInUp">
          <h4 data-number="2."><a href="#">Aliquam fermentum</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.</p>
          <p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.</p>
        </div>
        <div class="grid_4 wow fadeInRight">
          <h4 data-number="3."><a href="#">Aliquam fermentum</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.</p>
          <p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="team">
      <hr>
      <h3>Our Team</h3>
      <div class="row">
        <div class="grid_3 wow fadeInLeft">
          <img src="images/page02-03.jpg" alt="Patrick Pool">
          <h5><a href="#">Patrick Pool</a></h5>
          <p>Donec semp ertet laciniate ultricie upi disse comete dolo lectus.</p>
        </div>
        <div class="grid_3 wow fadeInUp">
          <img src="images/page02-04.jpg" alt="Anete Puga">
          <h5><a href="#">Anete Puga</a></h5>
          <p>Donec semp ertet laciniate ultricie upi disse comete dolo lectus.</p>
        </div>
        <div class="grid_3 wow fadeInUp">
          <img src="images/page02-05.jpg" alt="Tom James">
          <h5><a href="#">Tom James</a></h5>
          <p>Donec semp ertet laciniate ultricie upi disse comete dolo lectus.</p>
        </div>
        <div class="grid_3 wow fadeInRight">
          <img src="images/page02-06.jpg" alt="Julie Herzigova">
          <h5><a href="#">Julie Herzigova</a></h5>
          <p>Donec semp ertet laciniate ultricie upi disse comete dolo lectus.</p>
        </div>
      </div>
    </div>
  </div>


  </section>  

  <!--========================================================
                            FOOTER
  =========================================================-->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="logo">
            <a href="index.html">
              <h1 class="logo_icon">vid<span>meo</span></h1>
              <p>Commercial video production</p>
            </a>
          </div> 
          <div class="privacy-policy">
            <ul>
                <li><a class="fa fa-facebook" href="#"></a></li>
                <li><a class="fa fa-twitter" href="#"></a></li>
                <li><a class="fa fa-google-plus" href="#"></a></li>
                <li><a class="fa fa-instagram" href="#"></a></li>
            </ul>
            <p><span>vidmeo</span> © <span id="copyright-year"></span> | <a href="index-5.html">Privacy Policy</a></p>
          </div>
        </div>
      </div><!--row-->
    </div><!--container-->
  </footer>
</div>


<?php get_footer(); ?>
