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
	      <li><a href="http://www.facebook.com/bahaiyouthgh/" target="_blank"><span class="fa fa-facebook fa-1x"></span></a></li>
<!--       <li><a href="#" target="_blank"><span class="fa fa-twitter fa-1x"></span></a></li> -->
      <li><a href="https://www.youtube.com/channel/UCYiRj0786yzDGbUtfDCnIBA" target="_blank"><span class="fa fa-youtube fa-1x"></span></a></li>
		</ul>

		<ul class="list-inline visible-xs" style="margin-top: 5px;">
	      <li><a href="http://www.facebook.com/bahaiyouthgh/" target="_blank"><span class="fa fa-facebook fa-1x"></span></a></li>
<!--       <li><a href="#" target="_blank"><span class="fa fa-twitter fa-1x"></span></a></li> -->
      <li><a href="https://www.youtube.com/channel/UCYiRj0786yzDGbUtfDCnIBA" target="_blank"><span class="fa fa-youtube fa-1x"></span></a></li>
		</ul>

	</div>

	<div class="col-lg-4  col-sm-6">

  <?php if(!dynamic_sidebar('widget-footer')) : ?>
          <p>
           Add Footer widget here
          </p>
    <?php endif; ?>
	</div>
</footer>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/56f3bca5d68ada7f0faa03f9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</div><!-- /#wrapper -->

</body>
</html>