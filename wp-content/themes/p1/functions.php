<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Audiowide|Roboto:300,400,700,900&display=swap' );
    wp_enqueue_style( 'font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bootstrap-style', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/scss/p1.min.css');

    if (!is_admin()){
      wp_deregister_script('jquery');
      wp_register_script('jquery', "///ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js", false, null);
      wp_enqueue_script('jquery');
    }
    wp_enqueue_script( 'glide-js', get_stylesheet_directory_uri().'/js/node_modules/@glidejs/glide/dist/glide.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'global-js', get_stylesheet_directory_uri().'/js/global.js', array(), '1.0.0', true );
}

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'P1 Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));
}
