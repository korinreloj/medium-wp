<?php get_header(); ?>

<section class="content">
<?php 
@include 'main-feed.php';
@include 'feed-sidebar.php';
?>
</section>

<!-- <section class="featured-content">
<?php
  $featured_articles = get_field('featured_articles');
  foreach($featured_articles as $article):
?>
  <h1>
    <a href="<?php echo $article->guid; ?>"><?php echo $article->post_title; ?></a>
  </h1>
<?php endforeach; ?>
</section>

<?php get_footer();
?>

