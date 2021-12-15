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
			'heading',
			[
				'label'       => __( 'Heading', 'elementortest' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'Some Text', 'elementortest' ),
			]
		);

		$this->add_control(
			'alignment',
			[
				'label'   => __( 'Alignment', 'elementortest' ),
				'type'    => \Elementor\Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left'   => __( 'left', 'elementortest' ),
					'center' => __( 'center', 'elementortest' ),
					'right'  => __( 'right', 'elementortest' ),
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings  = $this->get_settings_for_display();
		$html      = $settings['heading'];
		$alignment = $settings['alignment'];
		echo "<h1 style='text-align: " . esc_attr__( $alignment ) . "'>" . esc_html( $html ) . "</h1>";


	}

	/*protected function content_template() {
	}*/

}