<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wftowptheme
 */

get_header();
?>

	<main id="primary" class="site-main">

		 <?php if( have_posts() ): 
                    while( have_posts() ): the_post(); ?>


                        <p><?php the_content(); ?></p>

                 <?php
                    endwhile;
                endif;

                ?>
                

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
