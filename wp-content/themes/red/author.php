<header class="red-header">
  <div class="container">
  <div class="row">
    <div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
      <h2 class="red-list-page-title "> Aritcles by <?php echo get_author_name(); ?> </h2>
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
</header>
<div class="container">
  <div class="row">
  <?php while (get_the_author_posts()) : the_post(); ?>
   <?php get_template_part('templates/content', 'author'); ?>
  <?php endwhile; ?>
  </div>
</div>