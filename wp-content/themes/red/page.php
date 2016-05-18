<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <header class="red-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <h1 class="entry-title page"><?php echo get_the_title(); ?></h1>
          </div>
        </div>
      </div>
    </header>
    <div class="container page-content">
      <div class="row">
        <div class="col-sm-12 col-md-12">
            <?php get_template_part('templates/content', 'page'); ?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
