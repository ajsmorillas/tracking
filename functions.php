<?php
/**
 * inject code to body and head
 * https://hotelads.es
 */

/** add code to body */

add_action('wp_body_open', 'body_tracking');
function body_tracking(){
?>
ADD YOUR CODE HERE
<?php
};


/**add code to head */

add_action('wp_head', 'head_tracking');
function head_tracking(){
?>
ADD YOUR CODE HERE
<?php
};

/**
 * Disable jQuery Migrate in WordPress.
 *
 * @author Guy Dumais.
 * @link https://en.guydumais.digital/disable-jquery-migrate-in-wordpress/
 */
add_filter( 'wp_default_scripts', $af = static function( &$scripts) {
    if(!is_admin()) {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
    }    
}, PHP_INT_MAX );
unset( $af );