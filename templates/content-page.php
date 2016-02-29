<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="page">
	<?php while(have_posts()):the_post(); ?>
				<section class="small-nav">
			<span class="xs-small"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> Home </a> / <?php the_title() ?> <?php edit_post_link('/ edit','<small class="edit">','</small>') ?></span>
		</section>
			<section class="post-wrapper">
				<?php the_content(); ?>
			</section>
	<?php endwhile; ?>
</article>