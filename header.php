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
</head>
<body>
<div class="container">
<header>
        <nav class="navbar navbar-expand-lg navbar-light  navbar-fixed bg-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <?php
$icon_url = get_site_icon_url();
if ( $icon_url ) {
    echo '<img src="' . esc_url( $icon_url ) . '" alt="Site Icon">';
}
?>
                <?php bloginfo( 'name' ); ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    'menu_class' => 'navbar-nav',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarNav',
                    'depth' => 2,
                   
                ) );
                ?>
            </div>
        </nav>
    </header>