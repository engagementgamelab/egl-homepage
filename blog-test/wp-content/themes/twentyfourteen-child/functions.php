<?php

add_action( 'wp_enqueue_scripts', 'enqueue_custom_themes');
function enqueue_custom_themes() {
    wp_enqueue_style( 'custom-bootstrap', 'http://engagementgamelab.org/css/custom-bootstrap.css' );
    wp_enqueue_style( 'custom-game', 'http://engagementgamelab.org/css/custom-game.css' );
    wp_enqueue_style( 'responsive-nav', 'http://engagementgamelab.org/css/responsive-nav.css' );
    wp_enqueue_style( 'blog', 'http://engagementgamelab.org/css/blog.css' );
}

add_action( 'wp_head', 'favicon_link' );
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}