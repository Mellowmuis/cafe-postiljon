<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />  
 
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Smythe' rel='stylesheet' type='text/css'>
    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function --> 
    <?php wp_head(); ?> 
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >
    <div class="u-gridContainer phoneTop">
         <a class="phoneicon"href="tel:0104651126"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/phonetop.svg"/></a>
        <a class="phonetext"href="tel:0104651126">0104651126</a> 
       
    </div>
    <div class="u-gridContainer mailTop">
        <a class="mailicon" href="mailto:hello@cafepostiljon.nl"><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mail2.svg"/></a>
        <a class="mailtext" href="mailto:hello@cafepostiljon.nl">hello@cafepostiljon.nl</a>
    </div>
    <a href="/home"> <img class="logo-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logoTop.png"/></a>

  <div class="Bot-Nav">
	<div class="u-gridContainer">
		<div class="Nav-toggle u-cf">
			<a class="Navigation-menuToggle" id="js-navCollapse">
				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
					<use xlink:href="#icon-menu2"></use>
				</svg>
			</a>
		</div>

		<?php include 'includes/navigation.php'; ?>
		
		<div class="Mob-contact-ico">
			<a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:0104651126">
				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
					<use xlink:href="#icon-phone"></use>
				</svg>
			</a>
		
                <a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:hello@cafepostiljon.nl">
				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
					<use xlink:href="#icon-envelope"></use>
				</svg>
			</a>
		</div><!-- header-contact -->
	</div>
  </div>
  

