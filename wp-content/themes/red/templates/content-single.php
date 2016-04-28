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


    <div class="col-md-8">  
      <article <?php post_class(); ?>>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
        <footer>
          <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
        <?php comments_template('/templates/comments.php'); ?>
      </article>
    </div>

    <div class="col-md-4">
      <?php 
        if( get_field('project_name') != '' ) {

        
      ?>
      <p class="project-info-header">Project Info</p>
      <?php if( get_field('project_name') ): ?>
       <h4 class="project-header">Project Name</h4>
       <p class="project-content"><?php the_field('project_name'); ?></p>
      <?php endif; ?>

      <?php /* if($date = DateTime::createFromFormat('Ymd', get_field('completion_date'))): ?>
       <h4 class="project-header">Completion Date</h4>
       <p class="project-content"><?php echo $date->format('M d, Y'); // the_field('completion_date'); ?></p>
      <?php endif; */ ?>

      <?php if( get_field('project_status') ): ?>
       <h4 class="project-header">Project Status</h4>
       <p class="project-content"><?php the_field('project_status'); ?></p>
      <?php endif; ?>

      <?php if( get_field('team') ): ?>
       <h4 class="project-header">Team</h4>
       <p class="project-content"><?php the_field('team'); ?></p>
      <?php endif; ?>

      <!-- Links section -->
      <!-- Link 1 -->
      <?php if( get_field('article_link_1') && get_field('article_link_1_label') ): ?>
       <h4 class="project-header links">Relevant links</h4>
       <p class="project-content links"><a href="<?php the_field('article_link_1'); ?>"><?php the_field('article_link_1_label'); ?></a></p>
      <?php endif; ?>


      <!-- Link 2 -->
       <?php if( get_field('article_link_2') && get_field('article_link_2_label') ): ?>

       <p class="project-content links"><a href="<?php the_field('article_link_2'); ?>"><?php the_field('article_link_2_label'); ?></a></p>
      <?php endif; ?>

      <!-- Link 3 -->
      <?php if( get_field('article_link_3') && get_field('article_link_3_label') ): ?>

        <p class="project-content links"><a href="<?php the_field('article_link_3'); ?>"><?php the_field('article_link_3_label'); ?></a></p>
      <?php endif; ?>

      <!-- Link 4 -->
      <?php if( get_field('article_link_4') && get_field('article_link_4_label') ): ?>

        <p class="project-content links"><a href="<?php the_field('article_link_4'); ?>"><?php the_field('article_link_4_label'); ?></a></p>
      <?php endif; ?>

      <!-- Link 5 -->
      <?php if( get_field('article_link_5') && get_field('article_link_5_label') ): ?>
        <p class="project-content links"><a href="<?php the_field('article_link_5'); ?>"><?php the_field('article_link_5_label'); ?></a></p>
      <?php endif; ?>

      <?php } else { 

        dynamic_sidebar('sidebar-primary'); ?>
 
      <?php } ?>

    </div>


    </div>
  </div>
<?php endwhile; ?>
