<?php /*
Plugin Name: Generator Partner Page
Version: 1.0
Author: Darlan de Castro
Author URI: https://github.com/darlandc/partner-site-generate
*/

function load_main_script() {
    wp_register_script('load_main_script', 
        plugins_url('./main.js', __FILE__));    
    wp_enqueue_script('load_main_script');
}

add_action( 'wp_enqueue_scripts', 
            'load_main_script' ); 

$variable_test = 'variable in PHP!';
var_dump($variable_test);

?>
