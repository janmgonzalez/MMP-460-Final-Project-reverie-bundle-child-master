<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />


<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/imagesloaded.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/skrollr.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/_main.js"></script>
<?php wp_head(); ?>

</head>

<body <?php body_class('antialiased'); ?>>

  <!-- Header parallax-->


<?php putRevSlider("topslide") ?>
<!--
<section id="slide-1" class="homeSlide">
    <div class="bcg"
        data-center="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% -100px;"
        data-anchor-target="#slide-1"
    >
        <div class="hsContainer">
            <div class="hsContent"
                data-center="bottom: 200px; opacity: 1"
                data-top="bottom: 1200px; opacity: 0"
                data-anchor-target="#slide-1 h2"
            >
                <h2>Simple parallax scrolling is...</h2>
            </div>
        </div>
    </div>
</section>
-->


  <!-- End Header -->


<?php wp_head(); ?>

</head>

<body <?php body_class('antialiased'); ?>>

<header class="contain-to-grid sticky">
  <!-- Starting the Top-Bar -->
  <nav class="top-bar" data-topbar >
   
      <ul class="title-area">
          <li class="name">
            <!-- <img src="http://placehold.it/100x100"> -->
            <!-- <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
          </li>
      <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>
      <section class="top-bar-section">
      <?php
          wp_nav_menu( array(
              'theme_location' => 'primary',
              'container' => false,
              'depth' => 0,
              'items_wrap' => '<ul class="left">%3$s</ul>',
              'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
              'walker' => new reverie_walker( array(
                  'in_top_bar' => true,
                  'item_type' => 'li',
                  'menu_type' => 'main-menu'
              ) ),
          ) );
      ?>
      <?php
        // Uncomment the following to enable the right menu (additional menu)
      
        /*
          wp_nav_menu( array(
              'theme_location' => 'additional',
              'container' => false,
              'depth' => 0,
              'items_wrap' => '<ul class="right">%3$s</ul>',
              'walker' => new reverie_walker( array(
                  'in_top_bar' => true,
                  'item_type' => 'li',
                  'menu_type' => 'main-menu'
              ) ),
          ) );
          */
      ?>
      </section>
  </nav>
  <!-- End of Top-Bar -->
</header>

<!-- Start the main container -->


