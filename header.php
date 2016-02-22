<!doctype html>



<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<link rel="pingback"  href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class();?>>
<div id="wrapper">
<section id="navigation" class="navbar row">


           <div class="navbar-header ">

          <div class="navbar-brand ">

            <ul class="list-inline text-center">
			<li> <img src="<?php bloginfo('template_directory');?>/images/logo.png" title="bahai youth logo" alt="logo" class="logo img-responsive" /></li>
            <li style="margin-left:40px;"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php bloginfo('name'); ?></a></li>
      <li><a href="#" target="_blank"><span class="fa fa-facebook fa-1x"></span></a></li>
      <li><a href="#" target="_blank"><span class="fa fa-twitter fa-1x"></span></a></li>
      <li><a href="#" target="_blank"><span class="fa fa-youtube fa-1x"></span></a></li>
    </ul>
          </div>
               <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
           </div>
          				<div class="collapse navbar-collapse navbar-right col-md-12 text-center">




                      <?php wp_nav_menu( array( 'theme_location' => 'primary',  'container'=>false,
                        'menu'=>'primary-menu',
                        'menu_class'=>'nav navbar-nav ', 'walker'=> new  wp_bootstrap_navwalker ) ); ?>

                    </div>
</section>
