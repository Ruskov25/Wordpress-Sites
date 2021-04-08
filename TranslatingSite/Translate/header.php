<!DOCTYPE html>
<html>
   <head>
      <title><?= bloginfo('name') ?></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="<?= bloginfo('description') ?>">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">

      <?php
         wp_head();
      ?>
      <style>
         nav.navbar{
            top: 32px;
         }
         nav.navbar ul li {
            list-style-type: none;
            padding: 10px 25px;
         }
         .navbar ul li:hover > a {
            background: #d54e21;
            color: #ffffff;
            padding: 15px;
            border-radius: 15px;
            transition: 0.2s all ease-in-out;
         }

      </style>
   </head>
   <body> 
      <div id="header" class="header" style="position: fixed;width: 100%;top: 30px;z-index: 1000;">
         <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
               <a class="navbar-brand" href="<?=home_url()?>"><img src="<?php bloginfo('template_directory'); ?>/imgs/logo1.png" alt="#" /></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="show-menu">
                  <ul class="navbar-nav ml-auto">
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
                  </ul>
               </div>
            </div>
         </nav>
      </div>