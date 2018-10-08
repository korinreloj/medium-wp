<?php get_header(); ?>
<br><br>
<?php 
  include 'category-nav.php';
?>

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

