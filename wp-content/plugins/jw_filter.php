<?php
/*
Plugin Name: JW Filter Revisited
Plugin URI: naylinaung.me/jw_filter_revisited
Description: For Demo Purposes
Author: Nay Lin Aung
Author URI: naylinaung.me
Version: 0.2
*/

add_filter('the_title', ucwords);

//add_filter('the_content', function ($content) {
//    return $content . ' ' . time();
//});

add_filter('the_content', function ($content) {
    /* $id => post id */
    $id = get_the_ID();

    // check this is not the singular post
    if ( ! is_singular('post') ) {
        return $content;
    }

    $terms = get_the_terms($id, 'category');
    $cats = array();

    foreach ( $terms as $term ) {
        $cats[] = $term->cat_ID;
    }

    $posts_loop = new WP_Query(
        array(
            'posts_per_page' => 3,
            'category__in'   => $cats,
            'orderby'        => 'rand',
            'post__not_in'   => array($id)
        )
    );

    if ( $posts_loop->have_posts() ) {
        $content .= '
            <h2> You Might Also Like ... </h2>
            <ul class="related-category-posts">
        ';

        while ( $posts_loop->have_posts() ) {
            $posts_loop->the_post();

            $content .= '
                <li>
                    <a href="' . get_permalink() . '">' . get_the_title() . '</a>
                </li>
            ';
        }

        $content .= '</ul>';
        wp_reset_query();
    }

    return $content;

});