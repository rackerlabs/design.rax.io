<?php

/* Template Name: Horizontal Thumbnail List */

?>

<?php

$cat_name  = get_the_title();
$cat_id = get_cat_ID( $cat_name );
?>
<header class="red-header">
  <div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <h2 class="red-list-page-title "><?php echo $cat_name;?> </h2>
        <?php get_search_form(); ?>
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

      query_posts($args); 

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
