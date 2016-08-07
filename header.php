<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crucible
 */

?><!DOCTYPE html>
<!--<html <?php language_attributes(); ?>>-->
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<title><?php  global $title;
          $title = wp_title("",true);
          $title = "anand";
          echo $title;
        ?>
</title>
<?php wp_head(); ?>
</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
  <header>
  <div id="stuck_container">
   
      <div class="container">
       <div class="header">
        <div class="row">
        <div class="grid_12">
          <div class="logo">
            <a href="index.php">
              <!-- <h1 class="logo_icon"><span>vid</span>meo</h1> -->
              <img class="logo_icon" src="http://local.cruciblestudio.com/wp-content/uploads/2016/08/cru.png" style="width:39%">
              <p>Professional video production</p>
            </a>
          </div>
          <nav class="header-menu">
              <ul class="sf-menu sf-arrows custom">
                <li>
                  <a <?php if(is_home()){echo 'class="active"';} ?>href="<?php echo get_home_url();?>">Home</a>
                </li>
                <li>
                  <a <?php if(is_page('about')){ echo 'class="active"';}?> href="<?php echo get_home_url();?>/about">About</a>
                </li>
                <li>
                  <a <?php 
                        if(is_page('portfolio') || is_page('adfilmsnpromos') || is_page('corporatefilms') || is_page('documentaryfilms') || is_page('telefilmsnseries'))
                        { 
                          echo 'class="active"';
                        }?> 
                      href="<?php echo get_home_url();?>/portfolio">portfolio
                  </a>
                  <ul>
                    <li><a href="#">Dolore ipsu</a></li>
                      <li>
                      <a href="#">Consecte</a>
                        <ul>
                          <li><a href="#">Dolore ipsu</a></li>
                          <li><a href="#">Consecte</a></li>
                          <li><a href="#">Elit Conseq</a></li>
                        </ul>
                      </li>
                    <li><a href="#">Elit Conseq</a></li>
                  </ul>
                </li>
                <li>
                  <a <?php if(is_page('clients')){ echo 'class="active"';}?> href="<?php echo get_home_url();?>/clients">clients</a>
                </li>
                <li>
                  <a <?php if(is_page('contact')){ echo 'class="active"';}?> href="<?php echo get_home_url();?>/contact">Contacts</a>
                </li>
              </ul>
            </nav>
        </div>
       </div> 
      </div><!--header-->
    </div><!--container-->
    </div>
  </header>