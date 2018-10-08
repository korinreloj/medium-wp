<?php get_header(); if(have_posts()): the_post(); ?>

<?php
  $title = get_the_title();
  $hero_image = get_field('image');
  $sub_title = get_field('sub_title');
  $heading_text= get_field('heading_text');
  $author = get_field('author');
  $time = get_the_time('M j, Y');

  $profile_picture = get_avatar('ID');
?>

<div class="article_page">

<!-- Author -->
  <div class="author_info">
    <div class="author_icon">
      <?php echo "$profile_picture"; ?>
    </div>
    <div class="author_details">
      <div class="author">
        <?php include 'author.php' ?>
        <button class= "follow_button">
          Follow
        </button>  
      </div>
      <div class="description">
        <?php echo $description; ?>
      </div>
      <div class="date">
        <?php echo $time; ?>
      </div>
    </div>
  </div>

<!-- Hero Image -->
  <div class="hero">
    <img src="<?php echo $hero_image['url']; ?>" alt="">
  </div>

  <div class=article_details>
    <h1 class="title"><?php echo $title; ?></h1>
    <h2 class="subtitle"><?php echo $sub_title; ?></h2>
  </div>

  <?php echo $heading_text; ?>

<!-- Flexible content fields -->
  <?php if( have_rows('flexible_content_field') ): ?>

  <?php while( have_rows('flexible_content_field') ): the_row(); ?>
  <?php
      $layout = get_row_layout();
      switch ($layout){

        case 'header_text':?>
          <div class="header_content">
            <h1 class="header_text"><?php the_sub_field('header_text');?></h1>
          </div>
        <?php break;?>
     
        <?php case 'text_block':?>
          <div class="text_block">
            <?php the_sub_field('text_block');?>
          </div>
        <?php break;?>
   
        <?php case 'code_block':?>
          <div class="code_block">
            <?php echo '<pre>' . get_sub_field('code_block') . '</pre>'; ?>
          </div>
        <?php break;?>
          
        <?php case 'image': ?>

          <?php $image = get_sub_field('image_regular');
      
          if( !empty($image) ): 
            include 'inline-image__regular.php';
          endif; ?>

          <?php $image = get_sub_field('image_large');

          if( !empty($image) ): 
            include 'inline-image__large.php';
          endif; ?>

          <?php $image = get_sub_field('image_full');
      
          if( !empty($image) ):
            include 'inline-image__full.php';
          endif; ?>
        
      <?php break; ?>
      
      <?php case 'embed':?>
      <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php //the_sub_field('embed'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
        <?php include 'embed.php'; ?>
      <?php break; ?>

      <?php
        default:
        echo “”;
    }
  ?>

  <?php endwhile; ?>

<?php endif; ?>

<?php endif; get_footer(); ?>
