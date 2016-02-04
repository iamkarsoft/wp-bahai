<?php get_header(); ?>

<div class="container">
<?php if(is_front_page()){ ?>
<div class="jumbotron">
    <h3>Welcome to the Bahai Youth Community - Ghana</h3>
    <p>A bunch of beautiful images that i didn't take</p>
 </div>
<?php }; ?>

</div><!-- /.container  -->
		<section class="container">
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
<h3 class="text-center">Latest On Our Blog</h3>
                <?php
          $args = array( 'numberposts' => 3 );
          $lastposts = get_posts( $args );
          foreach($lastposts as $post) : setup_postdata($post); ?>
               <div class="col-lg-4  col-sm-6">
        <div class="thumbnail">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
                  </div>
      </div>
          <?php endforeach; ?>

    
    </section>

<?php get_footer(); ?>