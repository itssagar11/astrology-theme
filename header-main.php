<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-CihpbejOV4P3q0Z/o4g1LaUexK4lS2I7tsz51U0LxUaPfmjYJfnsTlZrgTCm2Qljyo1IeOFJliX9ygd+s/lLxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/header-main.css">

</head>

<body>
    
    <div class="main_header">
       

        <nav class="navbar navbar-expand-md navbar-fixed navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
        
                   <?php
                        $logo_url = get_header_image();
                        if ($logo_url) {
                            echo '<img src="' .  $logo_url  . '" alt="Site Icon" style="width:200px;">';
                        } else {
                            bloginfo('name');
                        }
                        ?> 
        
            </a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu',
                    'menu_class' => 'navbar-nav',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'collapsibleNavbar',
                    'depth' => 2,

                ));
                ?>
                </ul>
            </div>
        </nav>

        <div class="container-fluid hero">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1 hero-1 ">
                    <h1 class="mantra"><?php bloginfo('name'); ?></h1>
                   </div>
                <div class="col-md-2 col-lg-5  col-offset-lg-1 offset-xl-0 d-lg-block " >
                    <div class="iphone-mockup"><img src="<?php echo get_template_directory_uri() ?>/img/horoscope.png" class="device">
                        <div class="screen"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>