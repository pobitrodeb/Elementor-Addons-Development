<?php
class Elementor_Test_Widget extends \Elementor\Widget_Base {

	public function get_name(): string {
		return 'test_widget';
	}

	public function get_title(): string {
		return esc_html__( 'Test Widget', 'elementor-addon' );
	}

	public function get_icon(): string {
		return 'eicon-favorite';
	}

	public function get_categories(): array {
		return [ 'elementor-addon-category' ];
	}

	public function get_keywords(): array {
		return [ 'test', 'heading' ];
	}

    // Register Controlls 
    protected function register_controls(): void {

        $this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'title',
			[
				'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Title', 'textdomain' ),
				'placeholder' => esc_html__( 'Enter your title', 'elementor-addon' ),
			]
		);

		// Data Control - Hidden 
		$this->add_control(
			'hidden',
			[
				'type' => \Elementor\Controls_Manager::HIDDEN,
				'label' => esc_html__( 'View', 'elementor-addon' ),
				'default' => 'traditional',
			]
		);

		
		$this->end_controls_section();
    }
        protected function render() {
            $settings = $this->get_settings_for_display();
            echo $settings['title'];
        }
    
}