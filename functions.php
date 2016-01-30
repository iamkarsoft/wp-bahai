<?php 
if(! isset($content_width))
    $content_width=654; /* pixels */;



function theme_support(){
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
		add_theme_support('menus');
	
} add_action('after_setup_theme','theme_support');

function theme_styles(){

	wp_enqueue_style('fonts-style', '//fonts.googleapis.com/css?family=Lato:300,300italic,700');
	wp_enqueue_style('bootstrap-style', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
	wp_enqueue_style('fontawesome-style', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"');
	wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js',array('jquery'),'',false);

	wp_enqueue_style('main-style',get_template_directory_uri().'/style.css');

	} add_action('wp_enqueue_scripts','theme_styles');

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu')
		
	) );


    //adding walker class to functions for responsive
  require_once dirname(__File__).'/wp_bootstrap_navwalker.php';


function theme_widgets_init(){

      register_sidebar( array(
          'name' => __( '1st Widget', 'bahai' ),
          'id' => 'widget-1',
    'before_widget'=>'<div class="main-widgets">',
        'after_widget'=>'</div>',

        'before_title'=>'<h1 class="widget-title">',
        'after_title'=>'</h1>'
      ) );

          register_sidebar( array(
              'name' => __( '2nd  Widget', 'bahai' ),
              'id' => 'widget-2',
        'before_widget'=>'<div class="main-widgets">',
            'after_widget'=>'</div>',

            'before_title'=>'<h1 class="widget-title">',
            'after_title'=>'</h1>'
          ) );

          register_sidebar( array(
              'name' => __( '3rd  Widget', 'bahai' ),
              'id' => 'widget-3',
        'before_widget'=>'<div class="main-widgets">',
            'after_widget'=>'</div>',

            'before_title'=>'<h1 class="widget-title">',
            'after_title'=>'</h1>'
          ) );



}

  add_action( 'widgets_init', 'theme_widgets_init' );


 ?>