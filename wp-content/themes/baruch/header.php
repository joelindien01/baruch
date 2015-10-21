<?php wp_head(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" rel="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png">
    <!-- ===== STYLESHEETS ===== -->
    <!-- Bootstrap -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Magnific Popup -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/magnific-popup.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.theme.css" rel="stylesheet">
    <!-- Preloader -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/preloader.css" rel="stylesheet">
    <!-- Main styles -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/theme.css" rel="stylesheet">
    <!-- Responsive styles -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<div id="loader-wrapper">
    <div class="loader">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- end Preloader -->

<header>
    <!-- Toggle Menu -->
    <button class="toggle-btn">
        <span class="lines"></span>
    </button>
    <div class="menu">
        <ul class="nav">
            <li class="active">
                <a href="#home">Home</a>
            </li>
            <li>
                <a href="#education">Education</a>
            </li>
            <li>
                <a href="#">Blog</a>
            </li>
        </ul>
    </div>
    <!-- end Toggle menu -->
</header>