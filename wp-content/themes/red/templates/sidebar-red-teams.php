
<section class="widget">
<h3>Related Tags</h3>

<?php

/* THIS WAS THE ORIGINAL RELATED CATEGORIES SECTION WHICH I REPLACED WITH THE TAG CLOUD

// FORMULATE LIST OF RELATED TAGS
$relatedTags = [];
while (have_posts()) : the_post();
  $postTags = wp_get_post_tags($post->ID);
    
  foreach($postTags as $postTag){
    $tagAlreadySaved = false;
    $pt = get_tag($postTag);

    foreach($relatedTags as $relatedTag) {
      $rt = get_tag($relatedTag);

      if($rt->term_id == $pt->term_id) {
        $tagAlreadySaved = true;
      }
    }

    if($tagAlreadySaved == false){
      $relatedTags[] = $pt;
    }
  }
endwhile;

<div class="red-related-tags-list">
  <?php foreach($relatedTags as $relatedTag) {  ?>
  <a href="<?php echo get_tag_link($relatedTag->term_id); ?>" class="red-tag-link">
    <?php echo $relatedTag->name; ?>
  </a>
  <?php } ?>
</div>
*/ ?>

<?php 

$args = array(
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
); 


wp_tag_cloud($args); 

?>

</section>
<div class="divider"></div>
<section class="widget">
  <h3>Recommended Reading</h3>

  <?php
  $pageCats = get_category($cat_id);
  $pageCategorySlug = $pageCats->slug;

  $featuredArticleSlug = 'recommended-reading';
  $cats = $pageCategorySlug.'+'.$featuredArticleSlug;

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