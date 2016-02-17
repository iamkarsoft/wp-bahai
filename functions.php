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
	wp_enqueue_style('fontawesome-style', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
	wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js',array('jQuery'),'',false);
// to remove after development
wp_enqueue_style('bootstraps-style',get_template_directory_uri().'/css/bootstrap.min.css');
wp_enqueue_style('font-awesomes',get_template_directory_uri().'/css/font-awesome.min.css');
wp_enqueue_script('bootstraps-js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),'',true);
// end to remove
	wp_enqueue_style('main-style',get_template_directory_uri().'/style.css');

	} add_action('wp_enqueue_scripts','theme_styles');

	// This theme uses wp_nav_menu() in two locations.
register_nav_menu('primary','primary');


    //adding walker class to functions for responsive
  require_once dirname(__File__).'/wp_bootstrap_navwalker.php';

//hook plugins into theme
 include_once dirname( __FILE__ ).'/wp-bahai-plugins.php';
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

           register_sidebar( array(
              'name' => __( '4th  Widget', 'bahai' ),
              'id' => 'widget-4',
        'before_widget'=>'<div class="main-widgets">',
            'after_widget'=>'</div>',

            'before_title'=>'<h1 class="widget-title">',
            'after_title'=>'</h1>'
          ) );



}

  add_action( 'widgets_init', 'theme_widgets_init' );

  function bahai_theme_customizer($wp_customize){
      $wp_customize->add_section('footer_settings_section',array(
          'title'=>'Footer Settings'
        ));

      $wp_customize->add_setting('footer_setting',array(
          'default'=> 'Add some text',
          'sanitize_callback'=>'bahai_theme_sanitize_text'
        ));

      $wp_customize->add_control('footer_setting',array(
          'label'=>"Footer text:",
          'section'=>'footer_settings_section',
          'type'=>'textarea'
        ));

      function bahai_theme_sanitize_text($input){

        return wp_kses_post(
            force_balance_tags($input,array('strong'=>array(), 'a'=>array('href'))));

      }
    
    }add_action('customize_register','bahai_theme_customizer');


    function new_excerpt_more( $more ) {
  return '<br> <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __(' || Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


 ?>