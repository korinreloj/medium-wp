<?php get_header() ?>

<?php @include 'category-nav.php' ?>
<?php @include 'featured-content.php' ?>
<?php #@include 'hero.php' ?>

<div class="content">
	<?php #@include 'main-feed.php' ?>
	<?php #@include 'feed-sidebar.php' ?>
</div>

<?php @include 'article.php' ?>

<?php get_footer(); ?>
