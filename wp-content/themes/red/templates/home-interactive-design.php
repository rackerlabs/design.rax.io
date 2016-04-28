<div class="container">
  <div class="row">

    <?php 

      $cat_name = 'Interaction Design';

      query_posts('showposts=6&category_name='.$cat_name); 

    ?>
    <h3 class="row-title">Interactive Design</h3>
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/content-thumbnail-vertical') ?>
    <?php endwhile; ?>
    <!-- <?php the_posts_navigation(); ?> -->
  </div>
</div>