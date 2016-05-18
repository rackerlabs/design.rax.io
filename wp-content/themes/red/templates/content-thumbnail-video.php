<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4 col-sm-offset-0">
  <div class="thumbnail red-thumbnail red-video-thumbnail">
    <?php the_field('media'); ?>
    <div class="caption">
      <?php get_template_part('templates/entry-meta'); ?>
      <h3><a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="red-title">
        <?php
        $titleLimit = 60;
        $theTitle = substr(get_the_title(), 0 , $titleLimit);
        echo trim($theTitle);
        if(strlen(get_the_title()) > $titleLimit) {
          echo '&hellip;';
        }
        ?>
      </a></h3>
      <?php get_template_part('templates/entry-tags'); ?>
      <div class="entry-summary">
        <?php echo apply_filters( 'the_excerpt', get_the_excerpt() ); ?>
      </div>
    </div>
  </div>
</div>