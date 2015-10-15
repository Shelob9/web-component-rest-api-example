<?php
/*
Plugin Name: Theon Featured Image
 */
add_action( 'rest_api_init', 'josh_featured_image_url' );
function slug_register_spaceship() {
	register_api_field( 'post',
		'featured_image_url',
		array(
			'get_callback'    => 'josh_get_featured_image_url',
		)
	);
}
function josh_get_featured_image_url( $object, $field_name, $request ) {
	$img = wp_get_attachment_image_src( $object['id'] );
	if( is_array( $img ) ) {
		return $img[0];
	}
}
