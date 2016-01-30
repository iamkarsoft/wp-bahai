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

<?php get_footer(); ?>