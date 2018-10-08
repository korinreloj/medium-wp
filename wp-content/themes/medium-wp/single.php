<?php get_header(); if(have_posts()): the_post(); ?>

<?php
  $title = get_the_title();
  $hero_image = get_field('image');
  $sub_title = get_field('sub_title');
  $heading_text= get_field('heading_text');
  $author = get_field('author');
  $time = get_the_time('M j, Y');
?>

<div class="article_page">

<!-- Author -->
  <div class="author_info">
    <div class="author_icon">
      <img src="https://78.media.tumblr.com/ce9ad807728cdcaf1407338cfd6aa26e/tumblr_ovzvo2BfmX1rlb6aso1_400.png">
    </div>
    <div class="author_details">
      <div class="author">
        <?php echo $author; ?>  
        <button = "follow_button">
          Follow
        </button>  
      </div>
      <div class="description">
        Description. Description. Description. Descriptionnnn...
      </div>
      <div class="date">
        <?php echo $time; ?>
      </div>
    </div>
  </div>

<!-- Hero Image -->
  <div class="hero">
    <img src="<?php echo $hero_image['sizes']['large']; ?>" alt="">
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
            <?php the_sub_field('code_block');?>
          </div>
        <?php break;?>
            
        <?php case 'image': 
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


  <?php endif; ?>

  <?php endif; 
  include 'inline-image__full.php';
  include 'inline-image__large.php';
  include 'inline-image__regular.php';
  get_footer(); ?>

</div>