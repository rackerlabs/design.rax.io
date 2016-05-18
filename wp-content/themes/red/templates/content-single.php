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

          <!-- CODE for Customer Research Days -->
          <?php if( get_field('objective') ): ?>
            <h3 class="project-header main">Objective</h3>
            <?php the_field('objective'); ?>
          <?php endif; ?>

          <?php if( get_field('findings_brief') ): ?>
            <h3 class="project-header main">Findings Brief</h3>
            <?php the_field('findings_brief'); ?>
          <?php endif; ?>
      
          <?php if( get_field('recommendations_next_steps') ): ?>
            <h3 class="project-header main">Recommendations / Next Steps</h3>
            <?php the_field('recommendations_next_steps'); ?>
          <?php endif; ?>

          <?php if( get_field('materials') ): ?>
            <h3 class="project-header main">Materials</h3>
            <?php the_field('materials'); ?>
          <?php endif; ?>

          <?php if( get_field('methodology') ): ?>
            <h3 class="project-header main">Methodology</h3>
            <?php the_field('methodology'); ?>
          <?php endif; ?>

        </div>
        <footer>
          <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
        <?php comments_template('/templates/comments.php'); ?>
      </article>
    </div>

    <div class="col-md-4">

      <?php 
        if( get_field('project_name') != '' || get_field('project_status') != '' || get_field('team') != '' || get_field('article_link_1') != '' || get_field('article_link_2') != '' || get_field('article_link_3') != '' || get_field('article_link_4') != '' || get_field('article_link_5') != '' || get_field('article_link_6') != '' || get_field('article_link_7') != '' || get_field('article_link_8') != '' || get_field('article_link_9') != '' || get_field('article_link_10') != ''  || get_field('moderator') != '' || get_field('participants') != '' ) {

        // if ANY of these fields exist, the standard sidebar will not appear and the custom sidebar will appear in its place
        /*
        project_name
        project_status
        team
        article_link_1
        article_link_2
        article_link_3
        article_link_4
        article_link_5
        article_link_6
        article_link_7
        article_link_8
        article_link_9
        article_link_10
        */
      ?>
            <?php //Sidebar header ?>

            <p class="project-info-header">Project Info</p>

            <?php //Standard Article information ?>

            <?php if( get_field('project_name') ): ?>
             <h4 class="project-header">Project Name</h4>
             <p class="project-content"><?php the_field('project_name'); ?></p>
            <?php endif; ?>

            <?php //Field for Customer Research Days ?>
            <?php if($date = DateTime::createFromFormat('Ymd', get_field('research_date'))): ?>
             <h4 class="project-header">Research Date</h4>
             <p class="project-content"><?php echo $date->format('M d, Y'); // the_field('completion_date'); ?></p>
            <?php endif;  ?>

            <?php //Field for Customer Research Days ?>
            <?php if( get_field('moderator') ): ?>
              <h4 class="project-header">Moderator</h4>
              <p class="project-content"><?php the_field('moderator'); ?></p>
            <?php endif; ?>

            <?php //Field for Customer Research Days ?>
            <?php if( get_field('participants') ): ?>
              <h4 class="project-header">Participants</h4>
              <p class="project-content"><?php the_field('participants'); ?></p>
            <?php endif; ?>
            
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

            <!-- Link 6 -->
            <?php if( get_field('article_link_6') && get_field('article_link_6_label') ): ?>
              <p class="project-content links"><a href="<?php the_field('article_link_6'); ?>"><?php the_field('article_link_6_label'); ?></a></p>
            <?php endif; ?>

            <!-- Link 7 -->
            <?php if( get_field('article_link_7') && get_field('article_link_7_label') ): ?>
              <p class="project-content links"><a href="<?php the_field('article_link_7'); ?>"><?php the_field('article_link_7_label'); ?></a></p>
            <?php endif; ?>

            <!-- Link 8 -->
            <?php if( get_field('article_link_8') && get_field('article_link_8_label') ): ?>
              <p class="project-content links"><a href="<?php the_field('article_link_8'); ?>"><?php the_field('article_link_8_label'); ?></a></p>
            <?php endif; ?>

            <!-- Link 9 -->
            <?php if( get_field('article_link_9') && get_field('article_link_9_label') ): ?>
              <p class="project-content links"><a href="<?php the_field('article_link_9'); ?>"><?php the_field('article_link_9_label'); ?></a></p>
            <?php endif; ?>

            <!-- Link 10 -->
            <?php if( get_field('article_link_10') && get_field('article_link_10_label') ): ?>
              <p class="project-content links"><a href="<?php the_field('article_link_10'); ?>"><?php the_field('article_link_10_label'); ?></a></p>
            <?php endif; ?>

      <?php } else { 

        dynamic_sidebar('sidebar-primary'); ?>
 
      <?php } ?>

    </div>


    </div>
  </div>
<?php endwhile; ?>
