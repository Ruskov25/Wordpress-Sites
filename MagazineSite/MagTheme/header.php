<!DOCTYPE html>
<html>
<head>
<title><?= bloginfo('name') ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?= bloginfo('description') ?>">

<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<?php
  wp_head();
?>
  <style>
    .navbar,.bold_line span{
      background:<?=get_option('menu-color')?> !important;
    }
    .nav-menu ul a,.title_text,.active a{
      color: <?=get_option('font-color')?> !important;
    }
    </style>
</head>
<body <?php body_class() ?> >
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="header_top">
          <div class="header_top_left">
          </div>
          <div class="header_top_right">
          </div>
        </div>
        <div class="header_bottom">
          <div class="header_bottom_left"><a class="logo" href="<?=home_url()?>">news<strong>Express</strong> <span></span></a></div>
          <div class="header_bottom_right"><a href="#"><img src="" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
</div>
  <div id="navarea">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar main-menu" class="navbar-collapse collapse main-menu">
          <ul class="nav navbar-nav custom_nav nav-menu " id="nav-menu">     
        <?php 
          wp_nav_menu(array(
            'theme_location'  => 'top-menu',
            'menu'            => 'navigation',
            'container'       => 'navarea',
            'container_id'    => 'navbar',
            'container_class'    => 'nav navbar navbar-default',
            'menu_class'      => 'nav navbar-nav custom_nav',
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