<!DOCTYPE html>
<html lang="en">
<head>
<title><?= bloginfo('name') ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta name="keywords" content="">
<meta name="description" content="<?= bloginfo('description') ?>">
<meta name="author" content="">	
<style>
	.navbar-nav li a{
		color: #000;
	}
	.navbar-nav li a:hover{
		color: rgba(0,0,0,0.6);
	}
	.navbar-nav{
      background-color: <?=get_option('menu-color')?> !important;
	}
    .navbar-nav li a{
      color: <?=get_option('font-color')?> !important;
    }
    .navbar-nav li a:hover{
      color: <?=get_option('font-color-hover')?> !important;
    }
</style>
<?php
  wp_head();
?>
</head>
<body <?php body_class() ?> >

	<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-3">
					<div class="logo"><a href="index.html"><img style="width: 40%;" src="<?php bloginfo('template_directory'); ?>/images/carlogo.png"></a></div>
				</div>
				<div class="col-sm-6">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">            	
                           <?php 
					          wp_nav_menu(array(
					            'theme_location'  => 'top-menu',
					            'menu'            => 'navigation',
					            'container'       => 'navarea',
					            'container_id'    => 'navbar',
					            'container_class'    => 'navbar navbar-expand-lg navbar-light bg-light',
					            'menu_class'      => 'navbar-nav',
					            'menu_id'         => 'idm',
					            'echo'            => true,
					            'fallback_cb'     => 'wp_page_menu',
					            'before'          => '',
					            'after'           => '',
					            'link_before'     => '',
					            'link_after'      => '',
					            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
					            'depth'           => 0,
					            'walker'          => ''
					          ));
					        ?>    
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
	</div>
