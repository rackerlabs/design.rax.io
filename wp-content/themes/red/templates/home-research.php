<div class="container">
  <div class="row">

    <?php 

      $cat_name = array (
        'showposts' => 10,
        //'category_name' => 'Research',
        'post_type'     => array('customer-research', 'post')
        );
      query_posts( $cat_name ); 

    ?>

    <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>

  <div class="col-xs-2">
  </div>
  <div class="col-xs-8 red-sidebar">
      <?php if (have_posts()) : ?>
      <h3 class="row-title">Latest Articles</h3>
    <?php endif; ?>

    <?php while (have_posts()) : the_post(); ?>
   
    <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    <?php endwhile; ?>

  </div>
  <!--div class="col-xs-4">
    <?php // get_template_part('templates/home', 'sidebar'); ?>
  </div-->
  </div>
</div>

