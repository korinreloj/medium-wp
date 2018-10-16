<?php

add_action( 'wp_ajax_wpsearch', 'my_ajax_foobar_handler' );
add_action( 'wp_ajax_nopriv_add_foobar', 'my_ajax_foobar_handler' );
add_action( 'wp_ajax_load_posts', 'my_ajax_load_posts' );
add_action( 'wp_ajax_nopriv_load_posts', 'my_ajax_load_posts' );

function my_ajax_foobar_handler() {
    $posts = get_posts([
        'post_type' => 'post',
        'posts_per_page' => -1,
        's' => $_GET['query']
    ]);

    $postsJson = [];

    foreach ($posts as $item) {
        $title = get_the_title($item->ID);
        $thumbnail_image = get_field('image', "post_$item->ID");
        $sub_title = get_field('sub_title', "post_$item->ID");
        $author = get_field('author', "post_$item->ID");
        $url = get_permalink($item->ID);

        $postsJson[] = [
            'title' => $title,
            'thumbnail_image' => $thumbnail_image,
            'sub_title' => $sub_title,
            'author' => $author,
            'url' => $url,
        ];
    }

    echo json_encode($postsJson);
    
    wp_die();
}

function my_ajax_load_posts() {
    $posts = get_posts([
        'post_type' => 'post',
        'posts_per_page' => -1,
    ]);

    $postsJson = [];

    foreach ($posts as $item) {
        $title = get_the_title($item->ID);
        $thumbnail_image = get_field('image', "post_$item->ID");
        $sub_title = get_field('sub_title', "post_$item->ID");
        $author = get_field('author', "post_$item->ID");
        $url = get_permalink($item->ID);

        $postsJson[] = [
            'title' => $title,
            'thumbnail_image' => $thumbnail_image,
            'sub_title' => $sub_title,
            'author' => $author,
            'url' => $url,
        ];
    }

    echo json_encode($postsJson);
    
    wp_die();
}