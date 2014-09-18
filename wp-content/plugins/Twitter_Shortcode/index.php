<?php
/*
Plugin Name: Twitter Shower
Plugin URI: http://naylinaung.me
Description: Simple Shortcode
Author: Nay Lin Aung
Author URI: naylinaung.me
Version: 1.0
*/

require_once('TwitterAPIExchange.php');

add_shortcode('twitter', function ($atts, $content) {
    $atts = shortcode_atts(
        array(
            'user_name'        => 'heartflowblog',
            'content'          => (empty($content)) ? $content = 'Follow Me on Twitter' : $content,
            'show_tweets'      => false,
            'tweet_reset_time' => 10,
            'num_tweets'       => 5
        ), $atts, 'twitter'
    );

    extract($atts);

    if ( $show_tweets ) {
        $tweets = fetch_tweets($num_tweets, $user_name, $tweet_reset_time);
    }

    return "<a href='http://twitter.com/$user_name'>$content</a>";
});

//Also show twitter tweets
function fetch_tweets($num_tweets, $user_name, $tweet_reset_time)
{
    $tweets = curl("https://api.twitter.com/1.1/statuses/user_timeline.json");

    echo "<pre>";
    print_r($tweets);
    echo "</pre>";

}

function curl($url)
{
    $settings = array(
        'oauth_access_token' => "2328160578-tOM7fM8a3BqRTOLsddC4Pv7sw8Y5tFg0DcOMYoG",
        'oauth_access_token_secret' => "AXjA9BWCCJP81VvY5OWSYA5RyZpdV4C88j3T1lgYbmHOn",
        'consumer_key' => "stevenaylin",
        'consumer_secret' => "2328160578"
    );

    $url = 'https://api.twitter.com/1.1/blocks/create.json';
    $getfield = '?screen_name=stevenaylin&count=2';
    $requestMethod = 'GET';

    $twitter = new TwitterAPIExchange($settings);
    $response = $twitter->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest();

    return json_decode($response);

//    $c = curl_init($url);
//    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 1);
//    curl_setopt($c, CURLOPT_TIMEOUT, 1);

}