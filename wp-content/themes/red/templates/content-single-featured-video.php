<?php while (have_posts()) : the_post(); ?>
  <header class="red-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
        <?php get_template_part('templates/entry-meta'); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <span class="category-list"><?php echo get_the_category_list( ', '); ?></span>
      </div>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="row">


    <div class="col-md-12">  
      <article <?php post_class(); ?>>
        <div class="entry-content">
          <?php the_field('media'); ?>
          <div style="margin: 50px 0;">
          <?php the_field('description'); ?>
          </div>
        </div>
        <footer>
          <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
        <?php comments_template('/templates/comments.php'); ?>
      </article>
    </div>



    </div>
  </div>
<?php endwhile; ?>
