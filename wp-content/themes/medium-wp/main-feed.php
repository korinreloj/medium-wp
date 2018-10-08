<section class="main-feed">

<?php query_posts([ 

    'post_type' => 'post',
    'posts_per_page' => 3 // number of posts that will be displayed

  ]); ?>

  <div class="main-feed__nav">
    <div class="main-feed__heading">
      <h3 class="main-feed__header-title">Recent Posts</h3>
    </div>
  </div>
   

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <?php 
    /*
      The following variables may be used:
      $title - to display the title of the post
      $thumbnail_image - to display thumbnail image of the post
      $sub_title - to display the subtitle of the post
      $content - to display the content of the post
      $author - to display the name of the author
      $time - to display the time the post was published
      
    */
    $title = get_the_title();
    $thumbnail_image = get_field('image');
    $sub_title = get_field('sub_title');
    $content= get_the_content();
    $author = get_field('author');
    $time = get_the_time('M j, Y');

    if (strlen($sub_title) > 50) {
      $ellipsis_string_sub = substr($sub_title, 0, 100) . "...";
     }
     else {
      $ellipsis_string_sub = $sub_title;
     }
  ?>
    
  <article class="main-feed__container">
    <div class="main-feed__content">
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h3 class="main-feed__title"><?php echo $title ?></h3></a>
      
      <p class="main-feed__description"><?php echo $ellipsis_string_sub; ?></p>

      <div class="main-feed__details-container">
        <div class="main-feed__author-content">
          <p class="main-feed__author"><a href="#"><?php echo $author; ?></a> in <a class="main-feed__place" href="#">Place</a></p>
          <p class="main-feed__sub">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <?php echo $time; ?>
            </a>
          </p>
        </div>
      </div>  
    </div>

    <figure class="main-feed__image">
       <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <img src="<?php echo $thumbnail_image['sizes']['thumbnail']; ?>">
      </a>
    </figure>
  </article>
  

<?php endwhile; endif; wp_reset_query(); ?>

</section>