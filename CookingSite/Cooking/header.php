<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= bloginfo('name') ?></title>
  <?php
    wp_head();
  ?>
  <style>
    .tm-nav-li a{
    color: white;
    text-decoration: none;
    padding-bottom: 10px;
    }
    .tm-nav-li a:hover{
    border-bottom: 1px solid white;
    }
    .tm-nav-li a:hover{
      border-bottom: 1px solid <?=get_option('font-color-hover')?> !important;
      color: <?=get_option('font-color-hover')?> !important;
    }
  </style>
</head>
<body <?php body_class() ?> >

  <div class="container">
    <div class="placeholder">
      <div class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/img/simple-house-01.jpg">
        <div class="tm-header">
          <div class="row tm-header-inner">
            <div class="col-md-6 col-12">
              <img src="<?php bloginfo('template_directory'); ?>/img/simple-house-logo.png" alt="Logo" class="tm-site-logo" /> 
              <div class="tm-site-text-box">
                <h1 class="tm-site-title">Рецепти</h1>
                <h6 class="tm-site-description">Най-добрите рецепти са при нас</h6>  
              </div>
            </div>
            <nav class="col-md-6 col-12 tm-nav">
              <ul class="tm-nav-ul">                       
                <?php 
                    wp_nav_menu(array(
                      'theme_location'  => 'top-menu',
                      'menu'            => 'navigation',
                      'container'       => 'nav',
                      'container_id'    => '',
                      'container_class'    => 'col-md-6 col-12 tm-nav',
                      'menu_class'      => 'tm-nav-ul',
                      'menu_id'         => '',
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
                </ul>        
            </nav>  
          </div>
        </div>
      </div>
    </div>