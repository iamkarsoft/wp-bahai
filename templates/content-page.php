<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="page">
	<?php while(have_posts()):the_post(); ?>
			<section class="post-wrapper">
				<?php the_content(); ?>
			</section>
	<?php endwhile; ?>
</article>