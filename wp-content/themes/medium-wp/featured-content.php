<?php
  global $post;
  $featured_articles = get_field('featured_articles');
  $featured_count = count($featured_articles);
?>

<div class="featured-content">
  <section class="featured-content__cards">

    <!-- large card -->
    <?php
      if($featured_articles):
        $post = $featured_articles[0];
        setup_postdata($post);
        
        $title = get_the_title();
        $thumbnail_image = get_field('image');
        $sub_title = get_field('sub_title');
        $content= get_the_content();
        $author = get_field('author');
        $time = get_the_time('M j, Y');

        if (strlen($sub_title) > 43):
          $ellipsis_string_sub = substr($sub_title, 0, 43) . "...";
        else:
          $ellipsis_string_sub = $sub_title;
        endif;
    ?>

      <article class="featured-content__cards__large">
        <figure class="featured-content__cards__large__image">
          <a href="<?php the_permalink(); ?>">
            <img src="<?php echo $thumbnail_image['url']; ?>">
          </a>
        </figure>
        <div class="featured-content__cards__large__details">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <h2 class="large-title">
              <?php echo $title ?>
            </h2> 
          </a>
          <p class="subtitle">
            <?php echo $ellipsis_string_sub; ?>
          </p>
          <footer>
            <div class="footer-content">
              <p> <a href="#"><?php echo $author; ?></a> in <a href="#">Place</a> </p>
              <p class="add-details">
                <a href="#"><?php echo $time; ?></a>
              </p>
            </div>
          </footer>
        </div>
      </article>

    <?php endif; wp_reset_postdata(); ?>

    <!-- small card -->
      <div class="featured-content__smallContainer">
        <?php
          if($featured_count > 1):
            $middle_max = ($featured_count - 1);
            $i = 1;
            do{
              $post = $featured_articles[$i];
              setup_postdata($post);
              $i++;

              $title = get_the_title();
              $thumbnail_image = get_field('image');
              $sub_title = get_field('sub_title');
              $content= get_the_content();
              $author = get_field('author');
              $time = get_the_time('M j, Y');

              if (strlen($sub_title) > 43):
                $subtitle = substr($sub_title, 0, 43) . "...";
              endif;
              
        ?>
        
            <article class="featured-content__cards__small">
              <div class="featured-content__cards__small__details">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

                  <?php
                    if (strlen($title) > 43): ?>
                    <h3 class ="small-title">
                      <?php echo $title ?>
                    </h3>
                      <?php $sub_title = "";
                      echo $sub_title; ?>
                  
                  <?php
                    elseif ($sub_title != ""):
                    ?>
                    <h3 class ="small-title">
                      <?php echo $title ?>
                    </h3>
                  </a>
                    <p class="subtitle">
                      <?php echo $subtitle; ?>
                    </p>
                    <?php
                    elseif ($sub_title == NULL):
                  ?>
                    <h3 class ="small-title without-sub">
                      <?php echo $title ?>
                    </h3>
                      
                  <?php
                    endif;
                  ?>

                <footer>
                  <div class="footer-content">
                  <p> <a href="#"><?php echo $author; ?></a> in <a href="#">Place</a> </p>
                  <p class="add-details">
                    <a href="#"><?php echo $time; ?></a>
                  </p>
                  </div>
                </footer>
              </div>

              <figure class="featured-content__cards__small__image">
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php echo $thumbnail_image['url']; ?>">
                </a>
              </figure>
            </article>
            <?php //endfor; ?>
            <?php } while($i < $middle_max); ?>
        <?php endif; wp_reset_postdata(); ?>
      </div>
    
    <!-- medium card -->
    <?php
      if(count($featured_articles) >= 3):
        $post = $featured_articles[$featured_count - 1];
        setup_postdata($post);
        
        $title = get_the_title();
        $thumbnail_image = get_field('image');
        $sub_title = get_field('sub_title');
        $content= get_the_content();
        $author = get_field('author');
        $time = get_the_time('M j, Y');
        
        if (strlen($sub_title) > 43):
          $ellipsis_string_sub = substr($sub_title, 0, 43) . "...";
        else:
          $ellipsis_string_sub = $sub_title;
        endif;
    ?>

      <div class="featured-content__cards__mediumContainer">
        <article class="featured-content__cards__medium">
          <figure class="featured-content__cards__medium__image">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo $thumbnail_image['url']; ?>">
            </a>
          </figure>
          <div class="featured-content__cards__medium__details">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <h2 class="medium-title">
                <?php echo $title ?>
              </h2>
            </a>
            <p class="subtitle">
              <?php echo $ellipsis_string_sub; ?>
            </p>
            
            <footer>
              <div class="footer-content">
              <p> <a href="#"><?php echo $author; ?></a> in <a href="#">Place</a> </p>
              <p class="add-details">
                <a href="#"><?php echo $time; ?></a>
              </p>
              </div>
            </footer>
          </div>
        </article>
      </div>

    <?php endif; wp_reset_postdata(); ?>
  </section>

  <!-- featured link below featured content -->
  <div class="featured-link">
    <a href="#">See All Featured ></a>
  </div>
</div>