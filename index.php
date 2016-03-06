<?php get_header(); ?>


<section class="container">
	<div class="jumbotron col-md-12" >
	<?php	if(has_post_thumbnail()){
									          $args = array( 'numberposts' => 1 );
									          $lastposts = get_posts( $args );
									          foreach($lastposts as $post) : setup_postdata($post); ?>
														<div class="col-sm-4 col-md-6">

															<div class="img-responsive"><?php the_post_thumbnail('featured-image'); ?></div>
														</div>
																		<div class="col-sm-4 col-md-6 lead " style="text-shadow: black 0.1em 0.1em 0.2em">
									            <h4 class="post-title page-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									            <?php the_excerpt(); ?>
																			</div>
									          <?php endforeach;  ?>


	<?php	}else{

          $args = array( 'numberposts' => 1 );
          $lastposts = get_posts( $args );
          foreach($lastposts as $post) : setup_postdata($post); ?>
            <h4 class="post-title page-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php the_excerpt(); ?>
          <?php endforeach;  ?>
<?php }; ?>
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
		<?php  wp_reset_postdata();  ?>
<?php get_footer(); ?>
