/<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=10" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
	<style type="text/css" media="all" id="siteorigin-panels-grids-wp_head">/* Layout 165 */ #pgc-165-0-0 { width:70.04% } #pgc-165-0-1 { width:29.96% } #pg-165-0 .panel-grid-cell { float:left } #pl-165 .panel-grid-cell .so-panel { margin-bottom:35px } #pl-165 .panel-grid-cell .so-panel:last-child { margin-bottom:0px } #pg-165-0 { margin-left:-15px;margin-right:-15px } #pg-165-0 .panel-grid-cell { padding-left:15px;padding-right:15px } @media (max-width:780px){ #pg-165-0 .panel-grid-cell { float:none;width:auto } #pgc-165-0-0 { margin-bottom:35px } #pl-165 .panel-grid { margin-left:0;margin-right:0 } #pl-165 .panel-grid-cell { padding:0 }  } </style>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75039746-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>

<?php do_action('vantage_before_page_wrapper') ?>

<div id="page-wrapper">

	<?php do_action( 'vantage_before_masthead' ); ?>

	<?php if( ! siteorigin_page_setting( 'hide_masthead', false ) ) : ?>

		<?php get_template_part( 'parts/masthead', apply_filters( 'vantage_masthead_type', siteorigin_setting( 'layout_masthead' ) ) ); ?>

	<?php endif; ?>

	<?php do_action( 'vantage_after_masthead' ); ?>

	<?php vantage_render_slider() ?>

	<?php do_action( 'vantage_before_main_container' ); ?>

	<div id="main" class="site-main">
		<div class="full-container">
			<?php do_action( 'vantage_main_top' ); ?>
