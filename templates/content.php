
<article>
	<?php while(have_posts()):the_post(); ?>
		<section class="blog-wrapper">
		  <div class="col-lg-4  col-sm-6">
                  <div class="thumbnail" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        
				<h3 class="post-title"><a href="<?php the_permalink()?>"> <?php the_title(); ?></a></h3>
				<!-- edit link --><h6><?php edit_post_link('edit','<small class="edit">','</small>') ?> <span><?php echo get_the_date(); ?></span></h6>
				
				<section class="post-content">
						<?php the_excerpt(); ?>

						<br>


				</section>

				<section class="readmore clear-fix">
					<a href="<?php the_permalink()?>"><?php esc_html_e('Read Post','bahai') ;?></a>
				</section>

				  </div>
            </div>
		</section>
	<?php endwhile; ?>
</article>