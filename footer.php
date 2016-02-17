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

  <?php if(!dynamic_sidebar('widget-4')) : ?>
          <p>
            Add widget to rhis part.
          </p>
    <?php endif; ?>
	</div>
</footer>
<!-- <script src="https://cdn.smooch.io/smooch.min.js"></script>
<script>

// Smooch.init({
//     appToken: '41h367kgvi7tmc4meflpcj9nq',
//     givenName: 'Bahai',
//     surname: 'Chat?',
//       customText: {
//         headerText: 'How can we help?',
//         inputPlaceholder: 'Type a message...',
//         sendButtonText: 'Send',
//         introText: 'This is the beginning of your conversation.<br/> Ask us anything!',
//      //   settingsText: 'You can leave us your email so that we can get back to you this way.'
//     }
  
// });
</script> -->
</div><!-- /#wrapper -->