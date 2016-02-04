<?php get_header(); ?>
<div class="container">
<?php if(is_front_page()){ ?>
<div class="jumbotron">
    <h1>The Image Gallery</h1>
    <p>A bunch of beautiful images that i didn't take</p>
  </div>


<?php }; ?>

</div><!-- /.container  -->
		<section class="container">
		 
			<?php if(have_posts()): ?>
				<?php get_template_part('templates/content'); ?>
			<?php endif ?>
			
		</section>

<?php get_footer(); ?>