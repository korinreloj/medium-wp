<?php get_header(); if(have_posts()): the_post(); ?>

    <?php $profile_picture = get_avatar('ID'); ?>

    <?php echo $profile_picture?>

    <?php
        $category = wp_get_post_categories();
    ?>
    <?php include 'author.php' ?>

<?php endif; get_footer(); ?>

