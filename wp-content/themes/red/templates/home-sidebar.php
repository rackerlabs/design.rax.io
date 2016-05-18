<?php $args = array(
	'smallest'                  => '14',
	'largest'                   => '14',
	'unit'                      => 'px',
	'number'                    => 10,
	'format'                    => 'list',
	'separator'                 => " ",
	'orderby'                   => 'count',
	'order'                     => 'DESC',
	'exclude'                   => null,
	'include'                   => null,
	'topic_count_text_callback' => default_topic_count_text,
	'link'                      => 'view',
	'taxonomy'                  => 'category',
	'echo'                      => true,
	'child_of'                  => null, // see Note!
); ?>

<div class="red-sidebar">
  <!--section>
    <h3>Project Categories</h3>
    <?php // wp_tag_cloud($args); ?>
  </section>

  <div class="divider"></div-->

   <section>
     <h3>RED Newsletter</h3>
     <?php echo do_shortcode('[mc4wp_form id="1212"]'); ?>
   </section>

  <div class="divider"></div>

   <section>
    <h3>Recommended Reading</h3>

    <?php

    $cats = 'research+recommended-reading';
    $args = array('category_name' =>  $cats);
    $category_posts = new WP_Query($args);
    if($category_posts->have_posts()) :
      while($category_posts->have_posts()) :
        $category_posts->the_post();
        get_template_part('templates/content-featured');
      endwhile;

    else:
      echo '<p>No featured articles at the moment</p>';
    endif;
    ?>
   </section>
 </div>
