<?php 
if(! isset($content_width))
    $content_width=654; /* pixels */;



function theme_support(){
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
	
} add_action('after_setup_theme','theme_support');

function theme_styles(){

	wp_enqueue_style('fonts-style', '//fonts.googleapis.com/css?family=Lato:300,300italic,700');
	wp_enqueue_style('bootstrap-style', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
	wp_enqueue_style('fontawesome-style', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"');
	wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js',array('jquery'),'',true);

	wp_enqueue_style('main-style',get_template_directory_uri().'/style.css');

	} add_action('wp_enqueue_scripts','theme_styles');





 ?>