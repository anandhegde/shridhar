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
    <?php get_template_part( 'template-parts/index/home', 'none' ); ?>
    <?php get_template_part( 'template-parts/index/new_about', 'none' ); ?>
    <?php get_template_part( 'template-parts/index/about', 'none' ); ?>
    <?php get_template_part( 'template-parts/index/portfolio', 'none' ); ?>
    <?php get_template_part( 'template-parts/index/clients', 'none' ); ?>
    <?php get_template_part( 'template-parts/index/contact', 'none' ); ?>
  </section>  

  
<?php get_footer(); ?>
