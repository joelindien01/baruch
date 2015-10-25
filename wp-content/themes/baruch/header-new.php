<?php wp_head(); ?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="author" content="Denis Samardjiev" />
	<meta name="description" content="Raleway | HTML5, CSS3, Responsive Parallax, Mega Multi-purpose Bootrap 3 Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
                <link rel="stylesheet" rel="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
                <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<!-- Royal Preloader CSS -->
	<link rel="stylesheet" type="text/css" href="css/royal_preloader.css">

	<!-- jQuery Files -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- Royal Preloader -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/royal_preloader.min.js"></script>
	<script type="text/javascript">
		Royal_Preloader.config({
		    mode:       	'number',
		    showProgress: 	false,
		    background: 	'#ffffff'
		});
	</script>

	<!-- Stylesheets -->
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/css/style.css" rel="stylesheet" title="main-css">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/css/bootstrap-social.css" rel="stylesheet">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/css/animate.min.css" rel="stylesheet">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/css/owl.carousel.css" rel="stylesheet" >
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/css/jquery.snippet.css" rel="stylesheet">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/css/buttons.css" rel="stylesheet">
	<link href="css/style-switcher.css" rel="stylesheet">
	
	<!-- Alternate Stylesheets // choose what you want and remove rest for production -->
	<link rel="alternate stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/css/colors/blue.css" title="blue">
	<link rel="alternate stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/css/colors/green.css" title="green">


	<!-- Icon Fonts -->
	<link href='<?php echo esc_url( get_template_directory_uri() ); ?>/css/css/ionicons.min.css' rel='stylesheet' type='text/css'>
	<link href='<?php echo esc_url( get_template_directory_uri() ); ?>/css/css/font-awesome.css' rel='stylesheet' type='text/css'>

	<!-- Magnific Popup -->
	<link href='<?php echo esc_url( get_template_directory_uri() ); ?>/css/css/magnific-popup.css' rel='stylesheet' type='text/css'>
</head>
<body class="royal_preloader scrollreveal">

	<div id="royal_preloader"></div>
	
	<!-- Start Switcher -->
	<!-- end demo_changer -->
	<!-- End Switcher -->

	<!-- Begin Boxed or Fullwidth Layout -->
	<div id="bg-boxed">
	    <div class="boxed">

			<!-- Begin Header -->
			<header id="nav">
<?php
			/*	<!-- Begin Top Bar -->
				<div class="top-bar">
					<div class="container container-header">
						<div class="row top-bar-row">

							<div class="col-sm-5 text-right topmenu-holder">
				                <ul class="topbar-list list-inline">
					                <!--li><a data-toggle="modal" data-target="#login">Login</a></li>
					                <li><a href="pages-forms-register-login.html">Register</a></li-->
					                <li>						
							           	<a class="btn btn-social-icon btn-rw btn-primary btn-xs" href="https://www.facebook.com/digitimmo.net">
											<i class="fa fa-facebook"></i>
										</a>
										<a class="btn btn-social-icon btn-rw btn-primary btn-xs" href="#">
											<i class="fa fa-google-plus"></i>
										</a>
										
									</li>
								</ul>
							</div>
						</div><!--/row --> 
					</div><!--/container header -->   
				</div><!--/top bar -->   
				<!-- End Top Bar --> */

			?>

		     	<!-- Begin Navigation -->
				<div class="navbar" >
					<div class="container container-header">
						<div class="navbar-header">
							<!-- Brand -->
							<a href="<?php bloginfo( 'url' ); ?>" class="navbar-brand">
								<div class="css-logo"></div>
							</a>
							<!-- Mobile Navigation -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					            <span class="sr-only">Toggle navigation</span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
							</button>
						</div><!-- /navbar header -->   

						<!-- Main Navigation -->
						<nav  class="navbar-collapse collapse navHeaderCollapse" role="navigation">
							<?php

 $defaults = array(
	'theme_location'  => 'nav',
	'menu'            => '',
	'container'       => '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'nav navbar-nav navbar-left',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults ); ?>
							<!-- /navbar right -->  
						</nav><!-- /nav -->  

					</div><!-- /container header -->   
				</div><!-- /navbar -->   
				<!-- End Navigation -->

			</header><!-- /header -->
			<!-- End Header -->