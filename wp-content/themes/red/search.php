<header class="red-header">
  <div class="container">
  <div class="row">
    <div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
      <h1 class="entry-title page">Search Results </h1>
        <div class="red-search-results-input"><?php get_search_form(); ?></div>
      </div>
    </div>
  </div>
</header>
<div class="container">
  <div class="row">
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'search'); ?>
<?php endwhile; ?>
</div>
</div>
<?php the_posts_navigation(); ?>
