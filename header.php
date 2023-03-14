<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wftowptheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

 <?php get_template_part( 'partials/header/wfsitedata'); ?>
 
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

<!-- BELOW IS FROM WEBFLOW -->

<meta charset="utf-8">
  <title>Portfolio - Webflow HTML website template</title>
  <meta content="Portfolio - Webflow HTML website template" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  
  <!-- REMOVE THE LINKS blow TO THE CSS AND then enqueu the css in the functions file -->
  
<!--
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/wf2wp.webflow.css" rel="stylesheet" type="text/css">
-->
  
     <!-- WEBFLOW CHOSEN TYPFACES FOR HEADER below --> 
  
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
 

  
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
  
    <!-- WEBFLOW CHOSEN TYPFACES FOR HEADER above -->


  

  
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  
<!-- WEBFLOW ASSETS FOR HEADER Above  -->

<!-- ABOVE IS FROM WEBFLOW -->


	<?php wp_head(); ?>
</head>

 <?php get_template_part( 'partials/header/nav'); ?>

<body>
	

