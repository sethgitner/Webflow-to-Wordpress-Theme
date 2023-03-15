<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wftowptheme
 */

?>

 <?php get_template_part( 'partials/footer/footer'); ?>

 <!-- Load Jquer JS -->

<script type="text/javascript">var $ = window.jQuery;</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js">

<!-- Load Webflow JS -->

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/webflow.js" ></script>


<!-- Footer Start -->


<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->


<?php wp_footer(); ?>
    </body>
</html>

