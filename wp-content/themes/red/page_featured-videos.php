<?php

/* Template Name: Featured Videos */

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
<?php query_posts('post_type=featured-video'); ?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content-thumbnail-video') ?>
<?php endwhile; ?>
  </div>
</div>
