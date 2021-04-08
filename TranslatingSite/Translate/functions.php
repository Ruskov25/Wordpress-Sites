<?php 

function AddStyles()
{
	$path = get_template_directory_uri();
	wp_enqueue_style('bootstrap', $path . '/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', $path . '/css/font-awesome.min.css');
	wp_enqueue_style('style', $path . '/css/style.css');
	
}

function AddScripts()
{
	$path = get_template_directory_uri();
	wp_enqueue_script('bootstrap.min', $path . '/js/bootstrap.min.js');
	wp_enqueue_script('jquery-3', $path . '/js/jquery-3.3.1.min.js');

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

	$rightbar3 = ['id' => 'rightbar3',
				'name' => 'Rightbar3',
				'before_widget' => '<div>',
				'after_widget' => '</div>',
				'before_title'  => '<h6 >',
				'after_title'   => '</h6>'
				];
	register_sidebar($rightbar3);
}

add_action('wp_enqueue_scripts', 'AddStyles');
add_action('wp_footer', 'AddScripts');
add_action('init', 'RegisterMenu');
add_action('widgets_init', 'RegisterSidebar');
add_theme_support('post-thumbnails');
?>