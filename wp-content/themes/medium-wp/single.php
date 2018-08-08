

<?php get_header(); if(have_posts()): the_post(); ?>

<?php
  $title = get_the_title();
  $hero_image = get_field('hero_image');
  $sub_title = get_field('sub_title');
  $heading_text= get_field('heading_text');
?>

  <img src="<?php echo $hero_image['url']; ?>" alt="">

  <h1 class="article-title"><?php echo $title; ?></h1>
  <h2 class="article-subtitle"><?php echo $sub_title; ?></h2>

  <?php echo $heading_text; ?>

  <?php //echo $flexible_content_field; ?>
  <?php
    $modules= get_field('flexible_content_field');
  ?>

<?php foreach($modules as $content): var_dump($content); ?>

  <h2><?php echo $content['heading_text']; ?></h2>
  <?php echo $content['text_block']; ?>
  <?php echo $content['code_block']; ?>

  <img src="<?php echo $content['image']; ?>" alt="">

  <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $content['embed']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


<?php endforeach; ?>




<?php endif; get_footer(); ?>
