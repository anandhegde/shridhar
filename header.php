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
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

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
              <h1 class="logo_icon"><span>vid</span>meo</h1>
              <p>Commercial video production</p>
            </a>
          </div>
          <nav class="header-menu">
              <ul class="sf-menu sf-arrows custom">
                <li>
                  <a class="active" href="index.php">Home</a>
                </li>
                <li>
                  <a href="index-1.html">About</a>
                </li>
                <li>
                  <a href="index-2.html">portfolio</a>
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
                  <a href="index-3.html">clients</a>
                </li>
                <li>
                  <a href="index-4.html">Contacts</a>
                </li>
              </ul>
            </nav>
        </div>
       </div> 
      </div><!--header-->
    </div><!--container-->
    </div>
  </header>