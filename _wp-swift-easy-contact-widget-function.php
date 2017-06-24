<?php
/*
  Plugin Name:       WP Swift: Easy Contact Widget
  Description:       Create a contact page widget
  Version:           1.0.0
  Author:            Gary Swift
  License:           GPL-2.0+
  Text Domain:       wp-swift-easy-contact-widget
*/

// Include the ACF group
include "_acf-field-group.php";

class WP_Swift_Easy_Contact_Widget extends WP_Widget {
 
    public function __construct() {
     
        parent::__construct(
            'wp_swift_Easy_Contact_widget',
            __( 'WP Swift: Easy Contact Widget', 'wp-swift-easy-contact-widget' ),
            array(
                'classname'   => 'wp_swift_Easy_Contact_widget',
                'description' => __( 'Create a contact page widget.', 'wp-swift-easy-contact-widget' )
                )
        );
       
        load_plugin_textdomain( 'wp-swift-easy-contact-widget', false, basename( dirname( __FILE__ ) ) . '/languages' );
    }
 
    /**  
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {    
        include( plugin_dir_path( __FILE__ ) . '_wp-swift-easy-contact-widget.php');
    }
 
  
    /**
      * Sanitize widget form values as they are saved.
      *
      * @see WP_Widget::update()
      *
      * @param array $new_instance Values just sent to be saved.
      * @param array $old_instance Previously saved values from database.
      *
      * @return array Updated safe values to be saved.
      */
    public function update( $new_instance, $old_instance ) {        
        return $instance;
    }
  
    /**
      * Back-end widget form.
      *
      * @see WP_Widget::form()
      *
      * @param array $instance Previously saved values from database.
      */
    public function form( $instance ) { 
      //The ACF API will handle this
      ?><?php
    }
}
 
/* Register the widget */
add_action( 'widgets_init', function(){
     register_widget( 'WP_Swift_Easy_Contact_Widget' );
});