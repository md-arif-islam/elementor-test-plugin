<?php

class Elementor_Test_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'testwidget';
	}

	public function get_title() {
		return __( "Test Widgets", "elementortest" );
	}

	public function get_icon() {
		return 'fa fa-image';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	/*public function get_script_depends() {
	}

	public function get_style_depends() {
	}*/

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'elementortest' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'url',
			[
				'label'       => __( 'URL to embed', 'elementortest' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'input_type'  => 'url',
				'placeholder' => __( 'https://your-link.com', 'elementortest' ),
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$html = wp_oembed_get( $settings['url'] );

		echo '<div class="oembed-elementor-widget">';

//		echo ( $html ) ? $html : $settings['url'];
		echo "<h1>{$settings['url']}</h1>";

		echo '</div>';

	}

	/*protected function content_template() {
	}*/

}