<?php
/**
 * Template Name: Home page
 */
   get_header();
?>
<style>
   .col-md-4 a h3:hover{
      background-color: #fa3e19;
      color: #FFF;
   }

   .col-md-4 img { 
        width: 100%; 
        transition: 0.2s all ease-in-out; 
   } 
       
   .col-md-4:hover img { 
        transform: scale(1.3); 
   }
   .contact-form form select {
    width: 100%;
    background: #fff;
    border: none;
    height: 60px;
    padding: 0 20px;
    text-transform: uppercase;
    margin: 10px 0;
}
</style>
<div id="home" class="slider">
         <div id="main_slider" class="carousel slide" data-ride="carousel" style="margin-top: 100px;">
            <?php
               echo do_shortcode('[smartslider3 slider="2"]');
            ?>
         </div>
      </div>
      <div id="about" class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <h4>Кои сме ние?</h4>
                  <h3 style="text-transform: none !important;">За нас</h3>
                  <p style="font-size: 25px;">Ние предлагаме несравними цени и се гордеем с предоставянето на най-добрата онлайн професионална преводаческа услуга. Обещаваме никога да не правим компромис с качеството, без значение колко взискателни са условията на Вашия проект.</p>
               </div>
               <div class="col-md-6 offset-md-1">
                  <div class="full text_align_center">
                     <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/imgs/translate.jpg" alt="#" />
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="hiw" class="hiw_section layout_padding" style="background: #1a2428;">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3 class="white_font">Какво предлагаме</h3>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <?php query_posts('cat=3'); ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <div class="col-md-4">                                          
                  <a href="<?=get_permalink()?>"> <img style="margin-bottom: 20px; margin-left: 25%; width: 50%; height: 40%;" class="margin_top_30 img-responsive" src="<?=get_the_post_thumbnail_url() ?>" alt="#" /></a>                  
                  <a href="<?=get_permalink()?>"><h3 class="blog_head" style="font-size: 15px;"><?= the_title()?></h3></a>        
               </div> 
               <?php
                  endwhile;
                  endif;
               ?>
            </div>
         </div>
      </div>
      <div id="contact" class="hiw_section layout_padding" style="background: #eeefef;">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3>Поискай оферта</h3>
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="contact-form">
                     <?php
                     echo do_shortcode('[contact-form-7 id="87" title="Форма за контакти 1"]');
                     ?>
                  </div>
               </div>
               <div class="col-md-5 text_align_center" style="margin-top: 50px;">
                  <p style="font-size: 30px;">Поискайте оферта
                     и ние бързо ще Ви изпратим нашето предложение с най-изгодните условия на пазара! Ние не Ви обвързваме с тази оферта - ще започнем изпълнението й само след Вашето потвърждение!</p>
                     <br>
                     <p style="font-size: 30px;">ГАРАНТИРАН ОТГОВОР
                     в рамките на 60 минути!</p>
               </div>
            </div>
         </div>
      </div>
      <div id="wcs" class="hiw_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text_align_center">
                  <h3>Отзиви от наши клиенти</h3>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-11">
                  <?php query_posts('cat=5'); ?>
               <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <div class="full testimonial_blog">
                     <p><?= the_title()?></p>
                     <p><?= wp_trim_words( get_the_content(), 40, '...' );?></p>
                  </div>
                  <?php
                  endwhile;
                  endif;
               ?>
               </div>
            </div>
         </div>
      </div>

      <?php
         get_footer();
      ?>