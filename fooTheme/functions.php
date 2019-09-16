<?php
function theme_foo_script(){

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/d3js/5.9.7/d3.min.js');
    wp_enqueue_scripts( 'bootstrapJS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery'), false, false );
    wp_enqueue_style( 'bootstrapcss', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
}

add_action( 'wp_enqueue_script', 'theme_foo_script' );

?>