<?php get_header(); ?>

	<section class="container">
		
			<?php if(have_posts()): ?>
				<?php get_template_part('templates/content','gallery'); ?>
			<?php endif ?>
		
	</section>

<?php get_footer(); ?>