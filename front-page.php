<?php get_header(); ?>

<section class="container">
<?php if(is_front_page()){ ?>

	<!-- 16:9 aspect ratio -->
	<div class=" col-md-12 jumbotron">

		<div class="col-sm-4 col-md-6">


						<iframe width="100%" class="thumbnail" height="315" src="https://www.youtube.com/embed/wHpOy7vgqtI">
</iframe>

		</div>


					<div class="col-sm-4 col-md-6 lead "style="text-shadow: black 0.1em 0.1em 0.2em">
						<p>In this short animation, we present a brief introduction to the Baha'i Faith.

You can also find out more about the Baha'i Faith via bahai.org

And also check out Baha'i Blog's site for a variety of Baha'i related content: bahaiblog.net</p>
					</div>
</div>
	</section>



<?php }; ?>

</div><!-- /.container  -->





		<section class="container front-page-widgets">
			  <div class="col-lg-4  col-sm-6">
        <div class="thumbnail">
    <?php if(!dynamic_sidebar('widget-1')) : ?>
          <p>
           
          </p>
    <?php endif; ?>
    </div>
  </div><!-- /widget -->
  <div class="col-lg-4   col-sm-6">
  <div class="thumbnail">
    <?php if(!dynamic_sidebar('widget-2')) : ?>
          <p>
            
          </p>
    <?php endif; ?>
    </div>
  </div><!-- /widget -->

    <div class="col-lg-4   col-sm-6">
    <div class="thumbnail">
    <?php if(!dynamic_sidebar('widget-3')) : ?>
          <p>
         
          </p>
    <?php endif; ?>
  </div>
  </div><!-- /widget -->



		</section>

    <section class="latest container">
    <section class="col-md-12 latest-title">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h2 class="text-center">Latest On Our Blog</h2>
    </div>
      <div class="col-md-4"></div>
    </section>
                <?php
          $args = array( 'numberposts' => 3 );
          $lastposts = get_posts( $args );
          foreach($lastposts as $post) : setup_postdata($post); ?>
               <div class="col-lg-4  col-sm-6">
        <div class="thumbnail">
            <h4 class="post-title page-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php the_excerpt(); ?>


                  </div>




      </div>

          <?php endforeach;   ?>


    </section>

<?php get_footer(); ?>
