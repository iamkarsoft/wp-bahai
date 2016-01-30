
<article>
	<?php while(have_posts()):the_post(); ?>
		<section class="post">
				<h3><a href="<?php the_permalink()?>"> <?php the_title(); ?></a></h3>
				<section class="post-content">
						<?php the_content(); ?>
				</section>
		</section>
	<?php endwhile; ?>
</article>