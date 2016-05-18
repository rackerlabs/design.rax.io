<article class="row red-card-horizontal">

	<div class="col-md-12">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</div>

	<?php if ( has_post_thumbnail() ) { ?>

		<div class="col-md-3">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="red-thumbnail-link" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></a>
		</div>
		<div class="col-md-9"><!--Excerpt container, if the post HAS_THUMBNAIL = TRUE -->

	<?php } else { ?>

		<div class="col-md-12"><!--Excerpt container, if the post HAS_THUMBNAIL = FALSE -->

	<?php } ?>

	

		<header>
			<?php get_template_part('templates/entry-meta'); ?>
			<?php get_template_part('templates/entry-tags'); ?>
		</header>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>

	</div><!--End except container-->

</article>
