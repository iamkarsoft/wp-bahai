<?php 
 /*
*Template Name: Gallery
 */
get_header(); ?>



			<div class="container"><?php if(have_posts()): ?>
				<?php get_template_part('templates/content','page-gallery'); ?>
			<?php endif ?>
			</div>

	</section>
<?php get_footer(); ?>

