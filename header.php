<!doctype html>



<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<link rel="pingback"  href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class();?>>
<div id="wrapper" class="container">

      <div id="navigation">
      <div class="container">
           <div class="navbar-header ">
          <div class="navbar-brand ">
            <?php bloginfo('name'); ?>
          </div>
               <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
           </div>
          				<div class="collapse navbar-collapse navbar-right col-md-12 text-center">


          					<?php
          					if ( has_nav_menu( 'primary' ) ) {
               wp_nav_menu( array( 'theme_location' => 'primary-menu' ,
               	) );
          } else{

          	$defaults= array(
          							'container'=>false,
          							'menu'=>'primary-menu',
          							'menu_class'=>'nav navbar-nav ',
                      
          						);
          					wp_nav_menu($defaults);

          				}

          						?>
                    </div>


                    </div>
          		</div>
