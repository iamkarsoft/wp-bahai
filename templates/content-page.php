<article>
	<?php while(have_posts()):the_post(); ?>
			<section class="post-wrapper">
				<?php the_content(); ?>
			</section>
	<?php endwhile; ?>
</article>