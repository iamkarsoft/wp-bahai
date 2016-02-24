<?php get_header(); ?>


<section class="container">
	<div class="jumbotron"style="background:#d0b6b5,color:#fafafa">
	    <?php
          $args = array( 'numberposts' => 1 );
          $lastposts = get_posts( $args );
          foreach($lastposts as $post) : setup_postdata($post); ?>
            <h4 class="post-title page-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php the_excerpt(); ?>
          <?php endforeach; ?>

	</div>
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
