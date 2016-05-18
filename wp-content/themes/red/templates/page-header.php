<?php

$args = array(
  'showposts' => 1,
  'post_type' => 'featured-video'
);
 
query_posts( $args );

?>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <h3 class="row-title"><a href="">Featured Video</a></h3>
    </div>
  </div>
<?php while (have_posts()) : the_post(); ?>
  <div class="row">
    <div class="col-xs-8">
      <?php the_field('media'); ?>
    </div>
    <div class="col-xs-4">
      
        <?php  get_template_part('templates/content', 'header-article'); ?>


    </div>
  </div>
<?php endwhile; ?>



</div>
<div class="newsletter-bar">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <section>
          <h3>RED Newsletter</h3>
          <?php echo do_shortcode('[mc4wp_form id="1212"]'); ?>
        </section>
      </div>
    </div>
    </div>
  </div>