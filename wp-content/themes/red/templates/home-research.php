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

  <div class="col-xs-3 red-about-us">
    <h3 class="row-title">About US</h3>
    <p>We are Rackspace Experience Design (RED). As researchers, designers and developers we collaborate with other Rackers to build products our customers love. <a href="http://design.rax.io/?page_id=1245">Learn More...</a></p>

    <h3 class="row-sub-title">Let's Work Together</h3>
    <p>If you'd like to get help with research, design or requirements, please complete our brief <a href="https://one.rackspace.com/pages/viewpage.action?title=How+to+Get+Help+from+REDD&spaceKey=RED">intake form</a> to get started.</p>

    <h3 class="row-sub-title">Our focus</h3>
    <p>To learn more about RED's current focus, <a href="https://inside.rackspace.com/departments/newgrowthbusinesses/IPA/Pages/OKRs.aspx">our team OKRs</a> are a great place to start. </p>

  </div>

  <div class="col-xs-1">
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

