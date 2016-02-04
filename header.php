<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-ie7.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-more-ie7.min.css">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1, user-scalable=no" />
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <?php wp_head(); ?>

  <!-- Theme CSS Goes Here -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" media="all" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


  <!-- Theme JavaScript Goes Here -->
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body <?php body_class(); ?>>
  <h1 id="header">
    <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
  </h1>
<?php bloginfo('description'); ?>
  <div id="wrapper">
