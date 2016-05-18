<?php

/* Template Name: Thumbnail Card List */

?>

<?php
$cat_name  = get_the_title();
$id = get_cat_ID( $cat_name );
?>
<header class="red-header">
  <div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <h1 class="entry-title page"><?php echo $cat_name; ?> </h1>
      </div>
    </div>
  </div>
</header>
<div class="container">
  <div class="row">
<?php 

  $args = array(
    'category_name' => $cat_name,
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
    'posts_per_page' => 12
  );

  query_posts($args); 

  while (have_posts()) : the_post();
    
  get_template_part('templates/content-thumbnail-vertical');
    
  endwhile;
  
?>
      <div class="navigation">
        <div class="alignright"><?php previous_posts_link(' Newer Posts &raquo;') ?></div>
        <div class="alignleft"><?php next_posts_link('&laquo; Older Posts ') ?></div>
      </div>


  </div>
</div>
