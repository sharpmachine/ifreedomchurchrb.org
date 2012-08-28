<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]>
<html class="no-js ie6" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if IE 7 ]>    
<html class="no-js ie7" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if IE 8 ]>    
<html class="no-js ie8" <?php language_attributes(); ?>>
 <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 
<html class="no-js" <?php language_attributes(); ?>> 
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    	<title><?php
			global $page, $paged;
			wp_title( '|', true, 'right' );
			bloginfo( 'name' );
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'smm' ), max( $paged, $page ) );
			?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="Sharp Machine Media">
	
		<link rel="profile" href="http://gmpg.org/xfn/11" />
    	<!-- Le styles -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'>
    	<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
		<!-- <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/style.css" type="text/css" media="screen" title="no title" charset="utf-8"> -->

    	<!-- <link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet"> -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    	<!-- Le fav and touch icons -->
    	<link rel="shortcut icon" href="../assets/ico/favicon.ico">
    	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    	<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

		<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.7.min.js"></script>
		<!--[if lte IE 8]><script src="<?php bloginfo('template_directory'); ?>/js/selectivizr-min.js"></script><![endif]-->
	
		<?php
			if ( is_singular() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );
			wp_head();
			?>
	</head>

	<body <?php body_class(); ?>>

    	<div class="container">
			<div id="navigation-shadow" class="span7">
				<div id="navigation-gradient">
					<section id="navigation" class="span6 navbar">
						<a class="brand" href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" width="176" height="104" alt="Logo"></a>

						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav', 'walker' => new Bootstrap_Menu_Walker ) ); ?>
						 <a href="http://twitter.github.com/bootstrap" target="_blank" style="display:block; text-align:center">Bootstrap Docs</a>
							<div id="social-media">
								<a href="http://www.facebook.com/ifreedomchurch" title="Like us on Facebook"><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png" width="36" height="36" alt="Facebook"></a>
								<a href="http://twitter.com/#!/ifreedomchurch" title="Follow us on Twitter"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png" width="36" height="36" alt="Twitter"></a>
							</div>
					</section>
				</div>
			</div>
			
			<div class="row">