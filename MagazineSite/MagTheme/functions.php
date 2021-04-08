<?php 

function AddStyles()
{
	$path = get_template_directory_uri();
	wp_enqueue_style('bootstrap', $path . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', $path . '/assets/css/font-awesome.min.css');
	wp_enqueue_style('animate', $path . '/assets/css/animate.css');
	wp_enqueue_style('slick', $path . '/assets/css/slick.css');
	wp_enqueue_style('theme', $path . '/assets/css/theme.css');
	wp_enqueue_style('style', $path . '/assets/css/style.css');
	
}

function AddScripts()
{
	$path = get_template_directory_uri();
	wp_enqueue_script('jquery.min.js', $path . '/assets/js/jquery.min.js');
	wp_enqueue_script('bootstrap.min', $path . '/assets/js/bootstrap.min.js');
	wp_enqueue_script('wow.min', $path . '/assets/js/wow.min.js');
	wp_enqueue_script('slick', $path . '/assets/js/slick.min.js');
	wp_enqueue_script('custom', $path . '/assets/js/custom.js');

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
	
	$rightbar = ['id' => 'rightbar',
				'name' => 'Rightbar',
				'before_widget' => '<div>',
				'after_widget' => '</div>',
				'before_title'  => '<h6 >',
				'after_title'   => '</h6>'
				];
	register_sidebar($rightbar);

		$rightbar2 = ['id' => 'rightbar2',
				'name' => 'Rightbar2',
				'before_widget' => '<div>',
				'after_widget' => '</div>',
				'before_title'  => '<h6 >',
				'after_title'   => '</h6>'
				];
	register_sidebar($rightbar2);
}
function RegisterAdminMenu()
{
	add_menu_page('Theme Settings', 'Допълнителни настройки', 
	'manage_options', 'theme-settings',
	'ShowThemeSettings','dashicons-star-filled', 50);
}
function ShowThemeSettings()
{
	include 'views/theme-settings.php';
}
function RegisterThemeSettings()
{
	register_setting('group-name', 'menu-color');
	register_setting('group-name', 'font-color');
	register_setting('group-name', 'footer-text');;
}
add_action('wp_enqueue_scripts', 'AddStyles');
add_action('wp_footer', 'AddScripts');
add_action('init', 'RegisterMenu');
add_action('widgets_init', 'RegisterSidebar');
add_action('admin_menu', 'RegisterAdminMenu');
add_action('admin_init', 'RegisterThemeSettings');
add_theme_support('post-thumbnails');