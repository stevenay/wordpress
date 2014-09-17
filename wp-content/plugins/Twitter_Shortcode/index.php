<?php
/*
Plugin Name: Twitter Shower
Plugin URI: http://naylinaung.me
Description: Simple Shortcode
Author: Nay Lin Aung
Author URI: naylinaung.me
Version: 1.0
*/

add_shortcode('twitter', function ($atts, $content) {
    $atts = shortcode_atts(
        array(
            'user_name' => 'heartflowblog',
            'content'   => (empty($content)) ? $content = 'Follow Me on Twitter' : $content
        ), $atts, 'twitter'
    );

    extract($atts);

    return "<a href='http://twitter.com/$user_name'>$content</a>";
});

//Also show twitter tweets