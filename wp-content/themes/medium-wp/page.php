<?php get_header(); if(have_posts()): the_post(); ?>

<?php
$title = get_the_title();
$hero_image = get_field('hero_image');
$sub_title = get_field('sub_title');
$heading_text= get_field('heading_text');
?>

<?php if( have_rows('flexible_content_field') ): ?>

<ul class="slides">

<?php while( have_rows('flexible_content_field') ): the_row(); ?>

    <?php  if( get_row_layout() == 'header_text' ): 
      the_sub_field('header_text');
    ?>

    <?php elseif( get_row_layout() == 'text_block' ): 
      the_sub_field('text_block');
    ?>

    <?php elseif( get_row_layout() == 'code_block' ): ?>
      <pre><?php the_sub_field('code_block'); ?></pre>
          
    <?php elseif( get_row_layout() == 'image' ): $image = get_sub_field('image'); ?>
      <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="">

    <?php elseif( get_row_layout() == 'embed' ): ?>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_sub_field('embed'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

    
    <?php endif; ?>

<?php endwhile; ?>

</ul>

<?php endif; ?>

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
