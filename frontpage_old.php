<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wftowptheme
 */

get_header();
?>

	<main id="primary" class="site-main">
		
  <div class="s-content">
    <div class="c-content">
	    <div class="d-contentarea">
	    
	    		 <?php if( have_posts() ): 
                    while( have_posts() ): the_post(); ?>


                        <p><?php the_content(); ?></p>

                 <?php
                    endwhile;
                endif;

	    
	    </div>
	    
    </div>
  </div>



                ?>
                
	</main><!-- #main -->

<?php

get_footer();
