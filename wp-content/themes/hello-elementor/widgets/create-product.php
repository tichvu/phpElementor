<?php
class Widget_Create_Product extends \Elementor\Widget_Base {

    public function __construct($data = [], $args = null) {
        parent::__construct($data, $args);
  
        wp_register_script( 'script-handle', 'custom-js/create-product.js', [ 'elementor-frontend' ], '1.0.0', true );
        wp_register_style( 'style-handle', 'custom-css/create-product.css');
     }
  
     public function get_script_depends() {
         return [ 'script-handle' ];
     }

     public function get_style_depends() {
        return [ 'style-handle' ];
    }

    public function get_name() {
        return 'widget-create-product';
    }
 
    public function get_title() {
        return __( 'Widget Create Product', 'your-plugin-textdomain' );
    }
 
    public function get_icon() {
        return 'eicon-code';
    }
 
    public function get_keywords() {
        return [ 'button', 'create', 'product' ];
    }
 
    protected function _register_controls() {}
 
    protected function render() {}
 
}