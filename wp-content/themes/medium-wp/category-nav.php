<div class="category-nav">
  <div class = "category-nav__button">
    <a href="#" class="btn btn-left"><</a>
  </div>

  <nav class="category-nav__links-ctr">
    <div class ="category-nav__track">
      <div class = "item first"><a href="#">Home</a></div>
      <?php
        $categories = get_categories();
        foreach($categories as $category):
          echo '<div class = "item"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
        endforeach;
      ?>
    </div>
  </nav>
  <div class = "category-nav__button">
    <a href="#" class="btn btn-right">></a>
  </div>
</div>


<!-- <div class="content">
  <p>
    <a href="#" class="tooltip" title="This is tooltip # 1">Lorem ipsum dolor</a> sit amet, has graece malorum in, ex has novum everti, aliquam veritus splendide mel cu. Mel ad dolorem perpetua, eu usu omnis liber, viris delenit apeirian ad mel. At pericula expetenda quo, vel cu minim tantas prodesset. <a href="#" class="tooltip" title="This is tooltip # 2">Elitr ocurreret ex pri</a>, id nec porro similique, eu quod temporibus vis. Qui ei probo doctus expetendis, an duo <a href="#" class="tooltip" title="Hello Sam!">commodo sapientem maluisset</a>.

    Sit eu erant simul cetero, id dolorum lobortis suavitate has, meis omnesque et ius. Exerci populo pericula ea eam. Vis corpora epicuri an. Alia persecuti consetetur ut nam. In pro accumsan constituto mnesarchum, probo verear scripserit no duo. Per ut accumsan tractatos.
  </p>
</div> -->


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/modules/category-nav.js"></script>
