<?php get_header(); if(have_posts()): the_post(); ?>

<?php
$title = get_the_title();
$hero_image = get_field('image');
$sub_title = get_field('sub_title');
$heading_text= get_field('heading_text');
?>

<img src="<?php echo $hero_image['sizes']['large']; ?>" alt="">

<h1 class="article-title"><?php echo $title; ?></h1>
<h2 class="article-subtitle"><?php echo $sub_title; ?></h2>

<?php echo $heading_text; ?>

<?php if( have_rows('flexible_content_field') ): ?>

<ul class="slides">

<?php while( have_rows('flexible_content_field') ): the_row(); ?>
<?php
    $layout = get_row_layout();
    switch ($layout){

      case 'header_text':
      the_sub_field('header_text');
      break;
   
      case 'text_block':
      the_sub_field('text_block');
      break;
   
      case 'code_block':
      the_sub_field('code_block');
      break;
          
      case 'image': 
      $image = get_sub_field('image');
      ?>
      <img src="<?php echo $image['sizes']['large']; ?>" alt="">
      
      <?php
      break;
      
      case 'embed':
      ?>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_sub_field('embed'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      
      <?php
      break;

      default:
      echo “”;
    }
  ?>

<?php endwhile; ?>

</ul>

<?php endif; ?>

<?php endif; get_footer(); ?>