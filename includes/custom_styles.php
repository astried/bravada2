<?php
add_action ( 'wp_enqueue_scripts', 'bravada_custom_link' );

if(!function_exists('bravada_custom_link')){
function bravada_custom_link()
{
	wp_enqueue_style( 'bravada-secondary', 'http://127.0.0.1/wordpress/wp-content/sliders/slider2/css/style.css', null, _CRYOUT_THEME_VERSION );

  wp_enqueue_script( 'bravada-secondary', 'http://127.0.0.1/wordpress/wp-content/sliders/slider2/js/index.js', array( 'jquery' ), _CRYOUT_THEME_VERSION  );
}
}
?>
