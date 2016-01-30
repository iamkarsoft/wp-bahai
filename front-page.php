<?php get_header(); ?>
<div class="container">
<?php if(is_front_page()){ ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <img src="https://images.unsplash.com/photo-1435771112039-1e5b2bcad966?dpr=2&fit=crop&fm=jpg&h=825&q=50&w=1450">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
     <img src="https://images.unsplash.com/photo-1442406964439-e46ab8eff7c4?dpr=2&fit=crop&fm=jpg&h=825&q=50&w=1450">
      <div class="carousel-caption">
        ...
      </div>
    </div>

     <div class="item">
    <img src="https://images.unsplash.com/photo-1440557958969-404dc361d86f?dpr=2&fit=crop&fm=jpg&h=825&q=50&w=1450">
    <div class="carousel-caption">
        ...
      </div>
    </div>



    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<?php }; ?>
</div>

		<section class="container">
			  <div class="col-md-4">
    <?php if(!dynamic_sidebar('widget-1')) : ?>
          <p>
            Add widget to first widgets.
          </p>
    <?php endif; ?>
  </div>
  <div class="col-md-4">
    <?php if(!dynamic_sidebar('widget-2')) : ?>
          <p>
            Add widget to second widgets.
          </p>
    <?php endif; ?>
  </div>

    <div class="col-md-4">
    <?php if(!dynamic_sidebar('widget-1')) : ?>
          <p>
            Add widget to first widgets.
          </p>
    <?php endif; ?>
  </div>

			
		</section>

<?php get_footer(); ?>