<style>
  .item ul li{
    list-style-type: none;
  }
  .newsletter form input{
    text-align: center;
    width: 100%;
    background: #fff;
    border: none;
    height: 72px;
    padding: 20px 85px;
    text-transform: uppercase;
    margin: 10px 0;
}
.newsletter form input[type="email"]{
    text-align: center;
    width: 100%;
    background: #fff;
    border: none;
    height: 20px;
    padding: 38px 85px;
    text-transform: uppercase;
    margin-top: -30px;
}
.newsletter input[type="submit"] {
    text-align: center;

    background: #fa3e19;
    color: #fff;
    margin: 0px;
    padding: 38.5px 50px;
    font-size: 19px;
    font-weight: 300;
    float: none;
    display: flex;
    cursor: pointer;
}
.newsletter input[type="submit"]:hover,
.newsletter input[type="submit"]:focus {
    background: #111;
    color: #fff;
    transition: ease all 0.5s;
}
</style>
<div class="subcribe">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <h3>Абонирайте се за нашия бюлетин.</h3>
                  <p>Абонирайте се за нашия бюлетин, за да<br>получавате информация и новини.</p>
               </div>
               <div class="col-md-8 col-sm-6">
                  <div class="newsletter">
                     <?php
                        echo do_shortcode('[contact-form-7 id="88" title="Без име"]');
                      ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="footer_blog_section">
                     <a href="<?=home_url()?>"><img src="<?php bloginfo('template_directory'); ?>/imgs/logo1.png" alt="#" /></a>
                     <p style="margin-top: 5px;"></p>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Навигация</h4>
                     <ul>
                        <li><a href="<?=home_url()?>">Начало</a></li>
                        <li><a href="http://localhost/translate/%d0%b7%d0%b0-%d0%bd%d0%b0%d1%81/">За нас</a></li>
                        <li><a href="http://localhost/translate/%d1%86%d0%b5%d0%bd%d0%b8/">Цени</a></li>
                        <li><a href="http://localhost/translate/%d1%83%d1%81%d0%bb%d1%83%d0%b3%d0%b8/">Услуги</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-5 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Информация за връзка</h4>
                     <p><strong>Адрес на офис:</strong></p>
                     <p><img src="<?php bloginfo('template_directory'); ?>/imgs/location.png" alt="#" /> Пловдив, бул. България 236б</p>
                     <p><strong>Телефон за обслужване на клиенти:</strong></p>
                     <p><img src="<?php bloginfo('template_directory'); ?>/imgs/phone_icon.png" alt="#" /> (+359) 0899473457</p>
                  </div>
               </div>
               
            </div>
         </div>
         <div class="copyright text-center">
            <p>Copyright 2020  Design by <a href="#">Veselin Ruskov</a></p>
         </div>
      </footer>
      <script>
         $(function () {
             
             'use strict';
             
             var winH = $(window).height();
             
             $('header').height(winH);  
             
             $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
             
             $('.navbar ul li a.search').on('click', function (e) {
                 e.preventDefault();
             });
             $('.navbar a.search').on('click', function () {
                 $('.navbar form').fadeToggle();
             });
             
             $('.navbar ul.navbar-nav li a').on('click', function (e) {
                 
                 var getAttr = $(this).attr('href');
                 
                 e.preventDefault();
                 $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
             });
         })
      </script>
      <?php
        wp_footer();
      ?>  
   </body>
</html>