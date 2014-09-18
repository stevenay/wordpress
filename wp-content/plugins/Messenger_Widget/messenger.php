<?php
error_reporting(E_ALL);
/*
Plugin Name: Messager Widget
Plugin URI: http://naylinaung.me
Description: Dispaly any message designated
Author: Nay Lin Aung
Author URI: naylinaung.me
Version: 1.0
*/

class Messager extends WP_Widget {

    function __construct() 
    {
        $params = array(
            'description' => 'Display a message to readers',
            'name' => 'Messager'
        );

        parent::__construct('Messager', '', $params);
    }

    function form()
    {
      
    }

    function widget()
    {

    }
}

add_action('widgets_init', function() {
    register_widget('Messager');
});