
<?php get_header(); if(have_posts()): the_post(); ?>

<?php
  $title = get_the_title();
  $hero_image = get_field('hero_image');
  $sub_title = get_field('sub_title');
  $text_block = get_field('text_block');
  $inline_image_large = get_field('inline_image_large');
  $inline_image_full = get_field('inline_image_full');
  $embed = get_field('oembed');
  $first_name = get_the_author_meta('first_name');
  $last_name = get_the_author_meta('last_name');
  $description = get_the_author_meta('description');
  $profile_picture = get_avatar('ID');
?>

  <img src="<?php echo $hero_image['url']; ?>" alt="">

  <h1 class="article-title"><?php echo $title; ?></h1>
  <h2 class="article-subtitle"><?php echo $sub_title; ?></h2>
  <p class="article-textblock"><?php echo $text_block; ?></p>

  <img src="<?php echo $inline_image_large['url']; ?>" alt="">

  <div class="article-content">
    <?php /*the_content(); */?>
  </div>

  <footer>
    <?php echo "$profile_picture"; ?>
    <br>
    <?php echo "$first_name $last_name"; ?>
    <br>
    <?php echo "$description"; ?>

  </footer>

<?php endif; get_footer(); ?>
