<?php get_header(); ?>


	<section class="row">
		
			<div class="container"><?php if(have_posts()): ?>
				<?php get_template_part('templates/content','page'); ?>
			<?php endif ?>
			</div>
	</section>
<?php get_footer(); ?>