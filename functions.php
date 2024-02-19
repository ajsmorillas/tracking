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
