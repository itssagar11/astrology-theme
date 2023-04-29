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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/index.css">

</head>

<body>
    <div class="container-fluid">
        <header>
            <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light bg-light">
                <div class="container">
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
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <ul class="ml-auto">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'menu_class' => 'navbar-nav',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'navbarNav',
                            'depth' => 2,

                        ));
                        ?>
                    </ul>
                </div>
            </nav>
        </header>