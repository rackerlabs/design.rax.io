<?php

/* Template Name: Static Page with Sidebar */

?>

<?php

$cat_name  = get_the_title();
$cat_id = get_cat_ID( $cat_name );
?>
<header class="red-header">
  <div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <h1 class="entry-title page"><?php echo $cat_name;?></h1>
    </div>
    </div>
  </div>
</header>

<div class="container page-content">
  <div class="row">

  	<div class="col-md-8">  

		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		  
		  <?php get_template_part('templates/content', 'page'); ?>
		<?php endwhile; ?>

		<?php endif; ?>

	</div>

    <div class="col-md-4">
      <?php 
        if( get_field('red-link1') != '' ) {
      ?>
      <p class="project-info-header">RED Information</p>

      <!-- FIRST LABEL-->
      <?php if( get_field('red-link1-title') ): ?>
       <h4 class="project-header"><?php the_field('red-link1-title'); ?></h4>
      <?php endif; ?>

      <?php if( get_field('red-link1') ): ?>
       <a href="<?php the_field('red-link1'); ?>" class="project-content"><?php the_field('red-link1-description'); ?></a>
      <?php endif; ?>


      <!-- SECOND LABEL-->
      <?php if( get_field('red-link2-title') ): ?>
       <h4 class="project-header"><?php the_field('red-link2-title'); ?></h4>
      <?php endif; ?>

      <?php if( get_field('red-link2') ): ?>
       <a href="<?php the_field('red-link2'); ?>" class="project-content"><?php the_field('red-link2-description'); ?></a>
      <?php endif; ?>


      <!-- THIRD LABEL-->
      <?php if( get_field('red-link3-title') ): ?>
       <h4 class="project-header"><?php the_field('red-link3-title'); ?></h4>
      <?php endif; ?>

      <?php if( get_field('red-link3') ): ?>
       <a href="<?php the_field('red-link3'); ?>" class="project-content"><?php the_field('red-link3-description'); ?></a>
      <?php endif; ?>


      <!--CONTACT LABEL-->
      <?php if( get_field('red-contact-label') ): ?>
       <h4 class="project-header"><?php the_field('red-contact-label'); ?></h4>
      <?php endif; ?>

       <?php if( get_field('red-contact-field-1') ): ?>
       <p class="project-content"><a href="mailto:<?php the_field('red-contact-field-2'); ?>"><?php the_field('red-contact-field-1'); ?></a></p>
      <?php endif; ?>

      <?php } else { 

        dynamic_sidebar('sidebar-primary'); ?>
 
      <?php } ?>

    </div>

</div>
</div>
