<?php 

register_nav_menus(
    array('primary-menu'=>'Header Menu')
);
function mytheme_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '1.14.7', true);
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery', 'popper'), '4.3.1', true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');


add_theme_support('post-thumbnails');
add_theme_support('custom-header');


?>