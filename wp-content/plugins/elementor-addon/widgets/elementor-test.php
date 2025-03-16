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



		// Data Control - Switcher 
		$this->add_control(
			'hidden',
			[
				'type' => \Elementor\Controls_Manager::HIDDEN,
				'label' => esc_html__( 'View', 'elementor-addon' ),
				'default' => 'traditional',
			]
		);

		// Data Control - Switcher 
		$this->add_control(
			'show_title',
			[
				'label' => esc_html__( 'Show Title ?', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'elementor-addon' ),
				'label_off' => esc_html__( 'Hide', 'elementor-addon' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		// Data Control - Select 
		$this->add_control(
			'color',
			[
				'label' => esc_html__( 'Heading Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'black',
				'options' => [
					'green' => esc_html__( 'Green', 'elementor-addon' ),
					'red'  => esc_html__( 'Red', 'elementor-addon' ),
					'blue' => esc_html__( 'Blue', 'elementor-addon' ),
					'yellow' => esc_html__( 'Yellow', 'elementor-addon' ),
				],
			]
		);

		// Data Control - Number
		$this->add_control(
			'price',
			[
				'label' => esc_html__( 'Price', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 5,
				'max' => 100,
				'step' => 5,
				
			]
		);

		// Data Control - Textarea 
		
		$this->add_control(
			'description',
			[
				'label' => esc_html__( 'Description', 'elementor-heading' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'placeholder' => esc_html__( 'Type your description here', 'elementor-heading' ),
				'separator'		=> 'before', 
			]
		);

		// Data Control - WYSIWYG
		$this->add_control(
			'item_description',
			[
				'label' => esc_html__( 'Description', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Default description', 'elementor-addon' ),
				'placeholder' => esc_html__( 'Type your description here', 'elementor-addon' ),
			]
		);

		// Data Control - Code 
		$this->add_control(
			'code',
			[
				'label' => esc_html__( 'Custom HTML', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::CODE,
				'language' => 'html',
				'rows' => 20,
			]
		);


		$this->end_controls_section();
    }
        protected function render() {
            $settings = $this->get_settings_for_display();
            ?>
			<h3> Show Price: <?php echo $settings['price']; ?>  </h3>
			<p> <?php echo $settings['item_description']; ?> </p>

			<?php echo $settings['code']; ?>
			<?php 
         ?> 
		<?php if($settings['show_title'] == 'yes'){
			 ?>
			 <h3 style="color:<?php echo $settings['color'];?>"> <?php echo $settings['title']; ?> </h3>
			<p> <?php echo $settings['description'] ?> </p>
			 <?php
		} ?>
		<?php 
		}
    
}