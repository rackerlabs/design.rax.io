<?php

$cat_name  = single_cat_title('',false);
?>
<header class="red-header">
  <div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <h1 class="entry-title page"><?php single_cat_title();?> </h1>
      </div>
    </div>
  </div>
</header>
<div class="container">

  <div class="row">

    <div class="col-md-9">
      <?php 

      $args = array(
        'category_name' => $cat_name,
        'paged' => get_query_var('paged'),
        'posts_per_page' => 10
      );

      get_posts($args); 

      while (have_posts()) : the_post();

        get_template_part('templates/content');
      
      endwhile;
      
      ?>
      
      <div class="navigation">
        <div class="alignright"><?php previous_posts_link(' Newer Posts &raquo;') ?></div>
        <div class="alignleft"><?php next_posts_link('&laquo; Older Posts ') ?></div>
      </div>


      

    </div>
    <div class="col-md-3 red-sidebar">
      <?php include(locate_template('templates/sidebar-red-teams.php')); ?>
    </div>
  </div>




</div>
