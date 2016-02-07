<?php get_header(); ?>
<div class="container">
<?php if(is_front_page()){ ?>

<?php echo do_shortcode('[image-carousel]'); ?>

<?php }; ?>

</div><!-- /.container  -->

<section class="container">
			<ul class="pagination center-text">

					<li><?php previous_posts_link('Previous Page'); ?></li>

					<li><?php next_posts_link('Next Page'); ?></li>
				</ul>
		</section>

		<section class="container">
		 
			<?php if(have_posts()): ?>
				<?php get_template_part('templates/content'); ?>
			<?php endif ?>
			
		</section>

		<section class="container">
			<ul class="pagination center-text">

					<li><?php previous_posts_link('Previous Page'); ?></li>

					<li><?php next_posts_link('Next Page'); ?></li>
				</ul>
		</section>
<?php get_footer(); ?>