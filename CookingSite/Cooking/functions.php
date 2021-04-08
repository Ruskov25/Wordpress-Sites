<?php 

function AddStyles()
{
	$path = get_template_directory_uri();
	wp_enqueue_style('templatemo-style.css', $path . '/css/templatemo-style.css');
	wp_enqueue_style('all.min', $path . '/css/all.min.css');
}
function AddScripts()
{
	$path = get_template_directory_uri();
	wp_enqueue_script('jquery.min.js', $path . '/js/jquery.min.js');
	wp_enqueue_script('parallax.min.js', $path . '/js/parallax.min.js');
}
function RegisterMenu()
{
	register_nav_menu('top-menu', 'Menu Top');
}
function RegisterSidebar()
{	
	$sidebar = ['id' => 'sidebar',
				'name' => 'Sidebar',
				'before_widget' => '<div class="col-lg-6 col-md-6 col-sm6">',
				'after_widget' => '</div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>'
				];
	register_sidebar($sidebar);
}
function RegisterAdminMenu()
{
	add_menu_page('Theme Settings', 'Настройки', 
	'manage_options', 'theme-settings',
	'ShowThemeSettings','dashicons-admin-generic', 50);
}
function ShowThemeSettings()
{
	include 'views/theme-settings.php';
}
function RegisterThemeSettings()
{
	register_setting('group-name', 'font-color-hover');
	register_setting('group-name', 'footer-text');
}
add_action('wp_enqueue_scripts', 'AddStyles');
add_action('wp_footer', 'AddScripts');
add_action('init', 'RegisterMenu');
add_action('widgets_init', 'RegisterSidebar');
add_action('admin_menu', 'RegisterAdminMenu');
add_action('admin_init', 'RegisterThemeSettings');
add_theme_support('post-thumbnails');