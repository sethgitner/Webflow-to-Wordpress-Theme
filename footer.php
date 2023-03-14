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

<script type="text/javascript">var $ = window.jQuery;</script>

<!-- LOAD JAVASCRIPT BEFORE WEBFLOW JS -->

<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6410d455c0f7f32643acb234" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


<!-- webflow js start -->

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/webflow.js" ></script>


<!-- webflow js end -->

<!-- Footer Start -->


<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->


<?php wp_footer(); ?>
    </body>
</html>

