<?php

while(have_posts()) {
  the_post(); ?>
    <h1>Page</h1>
    <h2 class="text-color-dark font-weight-bold text-8 pb-4 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><?php the_title() ?></h2>
    <?php the_content() ?>
  
  <?php }


?>

