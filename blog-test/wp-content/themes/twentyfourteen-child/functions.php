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

if ( ! function_exists( 'twentyfourteen_posted_on' ) ) :
/**
 * Print HTML with meta information for the current post-date/time and author.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return void
 */
function twentyfourteen_posted_on() {
    if ( is_sticky() && is_home() && ! is_paged() ) {
        echo '<span class="featured-post">' . __( 'Sticky', 'twentyfourteen' ) . '</span>';
    }

    // Set up and print post meta information.
    printf( '<p class="postAuthor">
                <span class="author vcard">
                    <a class="url fn n" href="%6$s" rel="author">By %5$s</a>
                </span>
            </p>
            <p class="postDate">
                <a href="%1$s" rel="bookmark">
                    <time class="entry-date" datetime="%2$s">%3$s</time>
                </a>
            </p>',
        esc_url( get_permalink() ),
        esc_attr( get_the_date( 'm/d/Y' ) ),
        esc_html( get_the_date( 'm/d/Y' ) ),
        esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
        get_the_author(),
        get_author_posts_url( get_the_author_meta( 'ID' ) )
    );

    echo '';
}
endif;

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