<?php

if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly.
}
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
/**
* Elementor Content Toggle Button widget.
*
* Elementor widget that displays a styled Button. Clicking the button replaces it with WYSIWYG content.
*/
class Widget_Content_Toggle_Button extends Widget_Base {

    public function __construct($data = [], $args = null) {
        parent::__construct($data, $args);
 
        wp_register_script( 'ctb-script', get_template_directory_uri() .'/custom-js/content-toggle-button.js', [ 'elementor-frontend' ], '1.0.0', true );
        wp_register_style( 'ctb-stylesheet', get_template_directory_uri() .'/custom-css/content-toggle-button.css' );
     }
 
     public function get_script_depends() {
       return [ 'ctb-script' ];
     }
 
     public function get_style_depends() {
       return [ 'ctb-stylesheet' ];
     }

   public function get_name() {
       return 'content-toggle-button';
   }

   public function get_title() {
       return __( 'Content Toggle Button', 'your-plugin-textdomain' );
   }

   public function get_icon() {
       return 'eicon-dual-button';
   }

   public function get_keywords() {
       return [ 'button', 'content', 'toggle' ];
   }

   protected function _register_controls() {
        // WYSIWYG CONTENT
        $this->start_controls_section(
            'content_settings',
            [
                'label' => __( 'Content', 'your-plugin-textdomain' ),
            ]
        );

        $this->add_control(
            'widget_content',
            [
                'label' => __( 'Content Box', 'your-plugin-textdomain' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( 'Widget Content', 'your-plugin-textdomain' ),
                'show_label' => false,
            ]
        );

        $this->end_controls_section();

        /*
        * BUTTON TEXT
        */
        $this->start_controls_section(
            'button_settings',
            [
                'label' => __( 'Button Settings', 'your-plugin-textdomain' ),
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label' => __( 'Button Text', 'your-plugin-textdomain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Button Text', 'your-plugin-textdomain' ),
            ]
        );

        $this->add_responsive_control(
            'button_align',
            [
                'label' => __( 'Button Alignment', 'your-plugin-textdomain' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left'    => [
                        'title' => __( 'Left', 'your-plugin-textdomain' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'your-plugin-textdomain' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'your-plugin-textdomain' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'selectors' => [
                    '{{WRAPPER}} .elementor-content-toggle-button-wrapper' => 'text-align: {{VALUE}};'
                ],
            ]
        );

        $this->end_controls_section();
    }

   protected function render() {
    $settings = $this->get_settings_for_display();

	?>
	<div class="elementor-content-toggle-button-wrapper">
		<a class="elementor-content-toggle-button-btn" href=""><?php echo $settings['button_text']; ?></a>
		<div class="elementor-content-toggle-button-content-box"><?php echo $settings['widget_content']; ?></div>
	</div>
	<?php
   }
}