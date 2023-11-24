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

        wp_register_style( 
            'value-prop', 
            plugin_dir_url( dirname( __FILE__ ) ) . '/assets/css/value-prop.css', 
            [ 'elementor-frontend' ], 
            '1.0.0'
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

    public function get_style_depends() {
		return [ 'value-prop' ];
	}

	protected function render() {
        ?>
            <div class="value-prop">
                <h2 class="value-prop__headline">What's my <em>Value Proposition?</em></h2>
                <p class="value-prop__instructions">
                    Enter the address of any business' website to see how OpenAI interprets its Value Proposition to be.
                </p>
                <div class="value-prop__input-group">
                    <input class="value-prop__input" placeholder="https://" autofocus>
                    <button class="value-prop__submit">Submit</button>
                </div>
                <div class="value-prop__error"></div>
                <div class="value-prop__response"></div>
                <div class="value-prop__footer">
                    <p>
                        This product is still in under development and may at times not be fully functional. We are 
                        managing daily, the number of concurrent requests to evaluate output scalability. We apologize 
                        for any inconvenience and appreciate your patience as we work to scale and expand the product.
                    </p>
                </div>
                <div class="value-prop__spinner">
                    <div class="value-prop__spinner__inner">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        <?php
	}
}