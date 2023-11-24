<?php

class Value_Prop_Widget extends \Elementor\Widget_Base {

    public function __construct($data = [], $args = null) {
        parent::__construct($data, $args);
        wp_register_script( 
            'value-prop', 
            plugin_dir_url( dirname( __FILE__ ) ) . '/assets/js/value-prop.js', 
            [ 'elementor-frontend' ], 
            '1.0.0',
             true 
        );
     }

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

    public function get_script_depends() {
        return [ 'value-prop' ];
    }

	protected function render() {
        ?>
            <div class="value-prop">
                <h1>What's my <em>Value Proposition?</em></h1>
                <p class="value-prop__instructions">
                    Enter the address of any business' website to see how OpenAI interprets its Value Proposition to be.
                </p>
                <div class="value-prop__input-group">
                    <input class="value-prop__input" placeholder="https://" autofocus>
                    <button class="value-prop__submit">Submit</button>
                </div>
            </div>
        <?php
	}
}