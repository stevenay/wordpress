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
            'name'        => 'Messager'
        );

        parent::__construct('Messager', '', $params);
    }

    function form($instance)
    {
        extract($instance);
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title') ?>">Title: </label>
            <input
                type="text"
                class="widefat"
                id="<?php echo $this->get_field_id('title'); ?>"
                name="<?php echo $this->get_field_name('title'); ?>"
                value="<?php if ( isset($title) ) echo esc_attr($title); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('description') ?>">Description: </label>
            <textarea
                class="widefat"
                id="<?php echo $this->get_field_id('description'); ?>"
                name="<?php echo $this->get_field_name('description'); ?>"><?php if ( isset($description) ) echo esc_attr($description); ?></textarea>
        </p>
    <?php

    }

    function widget($args, $instance)
    {
        extract($args);
        extract($instance);

        $title = apply_filters('widget_title', $title);
        $description = apply_filters('widget_description', $description);

        echo $before_widget;
        echo $before_title . $title . $after_title;
        echo "<p>$description</p>";
        echo $after_widget;
    }
}

add_action('widgets_init', function () {
    register_widget('Messager');
});