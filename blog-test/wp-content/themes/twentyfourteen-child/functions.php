<?php

add_action( 'wp_enqueue_scripts', 'enqueue_custom_themes');
function enqueue_custom_themes() {
    
}

add_action( 'wp_head', 'favicon_link' );
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}

add_action ( 'wp_head', 'hook_javascript');
function hook_javascript() {
	$output = get_include_contents ($_SERVER['DOCUMENT_ROOT'] . "/head-basic.php");
	echo $output;
}

/**
 * Get the contents of the php file
 */

function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }
    return false;
}

/**
 * Send debug code to the Javascript console
 */ 

function debug_to_console($data) {
    if(is_array($data) || is_object($data))
	{
		echo("<script>console.log('PHP: ".json_encode($data)."');</script>");
	} else {
		echo("<script>console.log('PHP: ".$data."');</script>");
	}
}