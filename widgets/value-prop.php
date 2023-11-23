<?php

class Value_Prop_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'value_prop_widget';
	}

	public function get_title() {
		return esc_html__( "What's my Value Prop?", 'value-prop' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'value proposition', 'marketing' ];
	}

	protected function render() {
	}
}