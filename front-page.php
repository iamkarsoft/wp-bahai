<?php get_header(); ?>

<div class="container">
<?php if(is_front_page()){ ?>

	<!-- 16:9 aspect ratio -->
	<div class="embed-responsive embed-responsive-16by9">
	  <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=wHpOy7vgqtI"></iframe>
	</div>

	<!-- 4:3 aspect ratio -->
	<!-- <div class="embed-responsive embed-responsive-4by3">
	  <iframe class="embed-responsive-item" src="..."></iframe>
	</div> -->
<?php }; ?>

</div><!-- /.container  -->





		<section class="container front-page-widgets">
			  <div class="col-lg-4  col-sm-6">
        <div class="thumbnail">
    <?php if(!dynamic_sidebar('widget-1')) : ?>
          <p>
            Add widget to first widgets.
          </p>
    <?php endif; ?>
    </div>
  </div>
  <div class="col-lg-4  col-sm-6">
  <div class="thumbnail">
    <?php if(!dynamic_sidebar('widget-2')) : ?>
          <p>
            Add widget to second widgets.
          </p>
    <?php endif; ?>
    </div>
  </div>

    <div class="col-lg-4  col-sm-6">
    <div class="thumbnail">
    <?php if(!dynamic_sidebar('widget-3')) : ?>
          <p>
            Add widget to first widgets.
          </p>
    <?php endif; ?>
  </div>
  </div>


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

          <?php endforeach; ?>


    </section>

<?php get_footer(); ?>
