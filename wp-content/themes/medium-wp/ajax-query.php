<?php

add_action( 'wp_ajax_wpsearch', 'my_ajax_foobar_handler' );
add_action( 'wp_ajax_nopriv_add_foobar', 'my_ajax_foobar_handler' );

function my_ajax_foobar_handler() {
    $posts = get_posts([
        'post_type' => 'post',
        'posts_per_page' => -1,
        's' => $_GET['query']
    ]);

    $postsJson = [];

    foreach ($posts as $item) {
        $title = get_the_title($item->ID);
        $image = get_field('image'->$item->ID);

        $postsJson[] = [
            'title' => $title,
            'photo' => $image,
            'url' => get_permalink($item->ID),
        ];
    }

    echo json_encode($postsJson);
    
    wp_die();
}