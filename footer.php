<?php wp_footer(); ?>

<script type="text/javascript">
$('.carousel').carousel({
interval: 2000,
pause: hover
});
</script>

<footer class="row ">
	<div class="col-lg-4  col-sm-6"> &copy;<?php echo date('Y') ?>	<?php  echo  get_theme_mod('footer_setting'); ?></div>
	<div class="col-lg-4   col-sm-6">
		<ul class="list-inline hidden-xs text-center">
			<li><a href="#" target="_blank"><span class="fa fa-facebook fa-2x"></span></a></li>
			<li><a href="#" target="_blank"><span class="fa fa-twitter fa-2x"></span></a></li>
			<li><a href="#" target="_blank"><span class="fa fa-youtube fa-2x"></span></a></li>
		</ul>

		<ul class="list-inline visible-xs" style="margin-top: 5px;">
			<li><a href="#" target="_blank"><span class="fa fa-facebook fa-2x"></span></a></li>
			<li><a href="#" target="_blank"><span class="fa fa-twitter fa-2x"></span></a></li>
			<li><a href="#" target="_blank"><span class="fa fa-youtube fa-2x"></span></a></li>
		</ul>

	</div>

	<div class="col-lg-4  col-sm-6">
	<?php

if( function_exists( 'mc4wp_show_form' ) ) {
    mc4wp_show_form();
    
}?>
	</div>
</footer>

</div><!-- /#wrapper -->