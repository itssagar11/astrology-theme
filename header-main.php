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

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/index.css">

</head>
<body>
<div class="header">
            <nav class="navbar navbar-dark nav-fixed  navbar-expand-md navigation-clean-search">
                <div class="container"> <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <?php
$icon_url = get_site_icon_url();
if ( $icon_url ) {
    echo '<img src="' . esc_url( $icon_url ) . '" alt="Site Icon">';
}
?>
                <?php bloginfo( 'name' ); ?></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    'menu_class' => 'navbar-nav',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarNav',
                    'depth' => 2,
                   
                ) );
                ?>    
                
                <div class="collapse navbar-collapse"
                        id="navcol-1">
                       

                </div>
            </nav>
            <div class="container-fluid hero" >
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <h1>The revolution is here.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus tortor at augue fermentum, in consequat arcu congue. Sed pretium erat ac mauris pretium, eget lacinia urna aliquam. Duis ullamcorper laoreet enim, a hendrerit lorem lobortis sit amet. Aliquam id eros eget lacus lobortis eleifend. Fusce eu lorem eget nulla feugiat ultrices. Suspendisse ac magna quis massa accumsan convallis. Nullam vel sapien auctor, suscipit lorem ac, feugiat quam. Suspendisse vitae nibh euismod, molestie purus quis, vestibulum augue. Sed vel magna ullamcorper, efficitur sapien eu, rhoncus nunc. Mauris blandit imperdiet luctus.

 non ex condimentum, ac ullamcorper sapien dictum. Nam consequat neque quis sapien viverra convallis. In non tempus lorem. </p><button class="btn btn-light btn-lg action-button" type="button">Learn More</button></div>
                    <div
                        class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                        <div class="iphone-mockup"><img src="<?php echo get_template_directory_uri()?>/img/app.png" class="device">
                            <div class="screen"></div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>