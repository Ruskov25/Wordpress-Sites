<?php 

function AddStyles()
{
	$path = get_template_directory_uri();
	wp_enqueue_style('bootstrap', $path . '/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', $path . '/css/font-awesome.min.css');
	wp_enqueue_style('jquery.fancybox.min', $path . '/css/jquery.fancybox.min.css');
	wp_enqueue_style('mCustomScrollbar', $path . '/css/jquery.mCustomScrollbar.min.css');
	wp_enqueue_style('style', $path . '/css/style.css');
	wp_enqueue_style('owl.carousel.min', $path . '/css/owl.carousel.min.css');
	wp_enqueue_style('owl.theme.default.min', $path . '/css/owl.theme.default.min.css');
	
}

function AddScripts()
{
	$path = get_template_directory_uri();
	wp_enqueue_script('jquery.min.js', $path . '/js/jquery.min.js');
	wp_enqueue_script('popper.min', $path . '/js/popper.min.js');
	wp_enqueue_script('bootstrap.bundle.min', $path . '/js/bootstrap.bundle.min.js');
	wp_enqueue_script('jquery-3.0.0.min', $path . '/js/jquery-3.0.0.min.js');
	wp_enqueue_script('plugin', $path . '/js/plugin.js');
	wp_enqueue_script('jquery.mCustomScrollbar.concat.min', $path . '/js/jquery.mCustomScrollbar.concat.min.js');
	wp_enqueue_script('custom', $path . '/js/custom.js');
	wp_enqueue_script('owl.carousel', $path . '/js/owl.carousel.js');
	wp_enqueue_script('jquery.fancybox.min', $path . 'https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js');


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
}
function RegisterAdminMenu()
{
	add_menu_page('Theme Settings', 'Настройки на сайта', 
	'manage_options', 'theme-settings',
	'ShowThemeSettings','dashicons-star-filled', 50);
}
function ShowThemeSettings()
{
	include 'views/theme-settings.php';
}
function RegisterThemeSettings()
{
	register_setting('group-name', 'font-color');
	register_setting('group-name', 'font-color-hover');
}
add_action('wp_enqueue_scripts', 'AddStyles');
add_action('wp_footer', 'AddScripts');
add_action('init', 'RegisterMenu');
add_action('widgets_init', 'RegisterSidebar');
add_action('admin_menu', 'RegisterAdminMenu');
add_action('admin_init', 'RegisterThemeSettings');
add_theme_support('post-thumbnails');