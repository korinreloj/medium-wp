<?php
$categories = get_the_category( $post->ID );

foreach ( $categories as $category ):
    echo '<a href="' . get_category_link( $category->term_id ) . '">' .  $category->name  . '</a>';
endforeach;
?>