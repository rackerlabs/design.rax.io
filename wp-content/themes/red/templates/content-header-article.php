<article>
		<header>
			<?php get_template_part('templates/entry-meta'); ?>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		 <?php get_template_part('templates/entry-tags'); ?>
		</header>
		<div class="entry-summary">
			<?php the_field('description'); ?>
		</div>
</article>
