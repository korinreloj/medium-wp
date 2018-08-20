
<section class="main-feed"> 

<?php query_posts([ 

    'post_type' => 'post',
    'posts_per_page' => 3 // number of posts that will be displayed

  ]); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <?php 
    /*
      The following variables may be used:
      $title - to display the title of the post
      $thumbnail_image - to display thumbnail image of the post
      $content - to display the subtitle of the post
      $time - to display the time the post was published
      $author - to display the name of the author
    */
    $title = get_the_title();
    $thumbnail_image = get_field('thumbnail_image');
    $subtitle = get_the_content();
    $time = get_the_time('F j, Y');
    $author = get_field('name');
  ?>

  <h3 class="article-title"><?php //echo $title; ?></h3>
  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo $title ?></a>
  <p> <?php echo $subtitle; ?> </p>
  <img src="<?php echo $thumbnail_image['sizes']['thumbnail']; ?>" alt="">
  <p> <?php echo $author; ?> </p>
  <p> <?php echo $time; ?> </p>

<?php endwhile; endif; wp_reset_query(); ?>

<!--   <div class="main-feed__nav">
  	<div class="main-feed__heading">
  		<h3 class="main-feed__header-title">Featured for members</h3>
  		<a href class="main-feed__link">More <i class="fa fa-chevron-right"></i></a>
  	</div>
  </div>

  <a href="#0">
  <article class="main-feed__container">
  	<div class="main-feed__content">
    	<h3 class="main-feed__title">History is Repeating Itself for Asian Americans Under Trump</h3>
    	<p>The 'model minority' myth obsecures decades of discrimination. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit doloremque accusamus id dolorem provident. Iure aliquam sapiente fugiat veritatis quia eaque accusantium magnam eius, praesentium, eum sit cum minus aperiam!</p>

    <div class="main-feed__details-container">
      <div class="main-feed__author-content">
        <p><a class="main-feed__author" href="#0">Author</a> in <a class="main-feed__place" href="#0">Place</a></p>
        <p class="main-feed__sub">Apr 24, 2017 &bull; <i class="fa fa-star"></i> 7 min read <i class="fa fa-angle-down"></i></p>
      </div>
      <div class="main-feed__bookmark-container">
          <i class="fa fa-bookmark-o"></i>
      </div>
      </div>  
    </div>

    <figure class="main-feed__image">
  	<img src="https://cdn-images-1.medium.com/fit/c/152/156/1*4acVyKLTn_L0mMl9qUmyWQ.jpeg">
    </figure>
  </article>
  </a>

  <a href="#0">
  <article class="main-feed__container">
    <div class="main-feed__content">
      <h3 class="main-feed__title">History is Repeating Itself for Asian Americans Under Trump</h3>
      <p>The 'model minority' myth obsecures decades of discrimination. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam eligendi unde ducimus, ex quam hic nobis. Soluta, incidunt, optio rem molestias expedita tempore ipsum aliquid harum aliquam numquam eius beatae.</p>

    <div class="main-feed__details-container">
      <div class="main-feed__author-content">
       <p><a class="main-feed__author" href="#0">Author</a> in <a class="main-feed__place" href="#0">Place</a></p>
        <p class="main-feed__sub">Apr 24, 2017 &bull; <i class="fa fa-star"></i> 7 min read <i class="fa fa-angle-down"></i></p>
      </div>
      <div class="main-feed__bookmark-container">
        <i class="fa fa-bookmark-o"></i>
    </div>
    </div>  
    </div>

    <figure class="main-feed__image">
    <img src="https://cdn-images-1.medium.com/fit/c/152/156/1*4acVyKLTn_L0mMl9qUmyWQ.jpeg">
    </figure>
  </article>
  </a>


  <div class="main-feed__nav">
  	<div class="main-feed__heading">
  		<h3 class="main-feed__header-title">Technology</h3>
  		<a href class="main-feed__link">More <i class="fa fa-chevron-right"></i></a>
  	</div>
  </div>

  <a href="#0">
  <article class="main-feed__container">
    <div class="main-feed__content">
      <h3 class="main-feed__title">History is Repeating Itself for Asian Americans Under Trump</h3>
      <p>The 'model minority' myth obsecures decades of discrimination. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem sunt cum necessitatibus labore recusandae ad, neque! Facilis quasi quos, veritatis deserunt culpa sed, magnam, cum dolor reprehenderit distinctio adipisci magni.</p>

    <div class="main-feed__details-container">
      <div class="main-feed__author-content">
       <p><a class="main-feed__author" href="#0">Author</a> in <a class="main-feed__place" href="#0">Place</a></p>
        <p class="main-feed__sub">Apr 24, 2017 &bull; <i class="fa fa-star"></i> 7 min read <i class="fa fa-angle-down"></i></p>
      </div>
      <div class="main-feed__bookmark-container">
        <i class="fa fa-bookmark-o"></i>
    </div>
    </div>  
    </div>

    <figure class="main-feed__image">
    <img src="https://cdn-images-1.medium.com/fit/c/152/156/1*4acVyKLTn_L0mMl9qUmyWQ.jpeg">
    </figure>
  </article>
  </a>
    <a href="#0">
  <article class="main-feed__container">
    <div class="main-feed__content">
      <h3 class="main-feed__title">History is Repeating Itself for Asian Americans Under Trump</h3>
      <p>The 'model minority' myth obsecures decades of discrimination. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem sunt cum necessitatibus labore recusandae ad, neque! Facilis quasi quos, veritatis deserunt culpa sed, magnam, cum dolor reprehenderit distinctio adipisci magni.</p>

    <div class="main-feed__details-container">
      <div class="main-feed__author-content">
       <p><a class="main-feed__author" href="#0">Author</a> in <a class="main-feed__place" href="#0">Place</a></p>
        <p class="main-feed__sub">Apr 24, 2017 &bull; <i class="fa fa-star"></i> 7 min read <i class="fa fa-angle-down"></i></p>
      </div>
      <div class="main-feed__bookmark-container">
        <i class="fa fa-bookmark-o"></i>
    </div>
    </div>  
    </div>

    <figure class="main-feed__image">
    <img src="https://cdn-images-1.medium.com/fit/c/152/156/1*4acVyKLTn_L0mMl9qUmyWQ.jpeg">
    </figure>
  </article>
  </a>
   -->
</section>