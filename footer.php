<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crucible
 */

?>


	<!--========================================================
                              FOOTER
  =========================================================-->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="logo">
            <a href="index.php">
              <h1 class="logo_icon">vid<span>meo</span></h1>
              <p>Professional video production</p>
            </a>
          </div> 
          <div class="privacy-policy">
            <ul>
                <li><a class="fa fa-facebook" href="#"></a></li>
                <li><a class="fa fa-twitter" href="#"></a></li>
                <li><a class="fa fa-google-plus" href="#"></a></li>
                <li><a class="fa fa-instagram" href="#"></a></li>
            </ul>
            <p><span>crucible</span> © <span id="copyright-year"></span> | <!-- <a href="index-5.html">Privacy Policy</a> --></p>
          </div>
        </div>
      </div><!--row-->
    </div><!--container-->
  </footer>

<?php wp_footer(); ?>
<script>
  $(document).ready(function(){
    $('body').removeClass();
  })
  
</script>
<?php 
  if(is_home())
  {
?>
  <script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }
    });
  </script>
  <!--<![endif]-->
  <script>
    $(document).ready(function(){
      $('.camera_wrap').camera({
        height: '37.74358974358974%',
        minHeight: '380',
        pagination: false,
        thumbnails: false,
        time: 7000,
        navigation: true,
        playPause: false,
        loaderOpacity: 0,
        fx:'simpleFade'
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".fancybox").fancybox({
        helpers : {
          media : {}
        }
      });

    });
  </script>
<?php 
  }
  else if(is_page('contact'))
  {
?>
   <script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }
    });
  </script>
<?php 
  }
  else
  {
?>
  <script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }
    });
  </script>
  <!--<![endif]-->
  <script type="text/javascript">
    $(document).ready(function() {
      $(".fancybox").fancybox({
        helpers : {
          media : {}
        }
      });

    });
  </script>
<?php 
  }
?>


</body>
</html>
