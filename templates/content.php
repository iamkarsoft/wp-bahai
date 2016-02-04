
<article>
	<?php while(have_posts()):the_post(); ?>
		<section class="post">
		  <div class="col-lg-4  col-sm-6">
                  <div class="thumbnail">

        
				<h3><a href="<?php the_permalink()?>"> <?php the_title(); ?></a></h3>
				<section class="post-content">
						<?php the_excerpt(); ?>
				</section>

				  </div>
            </div>
		</section>
	<?php endwhile; ?>
</article>