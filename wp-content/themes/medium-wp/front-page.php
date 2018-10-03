<?php get_header(); ?>

<?php wp_list_categories(); ?>

<?php
  include 'featured-content.php';
?>


<section class="content">
<?php
  include 'main-feed.php';
  include 'feed-sidebar.php';
?>
</section>

<?php get_footer(); ?>

