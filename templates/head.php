<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

<!-- Meta Data & SEO -->
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<!--  Mobile Viewport Fix j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag  -->
<meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php wp_title('|', true, 'right'); ?></title>

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico" />

	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">


<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/javascripts/html5.js" type="text/javascript"></script>
<![endif]-->

<!-- Google Analytics
  ================================================== -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39223787-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Loading fonts
	================================================== -->

<link rel="stylesheet" type="text/css" href="//cloud.typography.com/6272432/715002/css/fonts.css" />

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

</head>
