<?php

/*
Plugin Name: What's My Value Prop?
Version: 1.0
*/

function value_prop_register_widget( $widgets_manager ) {
	require_once( __DIR__ . '/widgets/value-prop.php' );
	$widgets_manager->register( new \Value_Prop_Widget() );
}

add_action( 'elementor/widgets/register', 'value_prop_register_widget' );