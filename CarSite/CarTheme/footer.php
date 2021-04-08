<div class="contact_section layout_padding">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-6">
                    <div class="input_main">
                       <div class="container">
                        <h2 style="color: #FFF;">Ако имате въпроси, изпратете ни имейл.</h2>
                        <?php echo do_shortcode( '[contact-form-7 id="45" title="Форма за контакти 1"]' ); ?>
                       </div> 
                    </div>
                </div>
    			<div class="col-md-6">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18249.872954163024!2d24.74269864637336!3d42.141841178682185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14acd1a6740a5a75%3A0xf2d0a1240904e024!2zNDAwMCDQmtCw0LzQtdC90LjRhtCwIDEsINCf0LvQvtCy0LTQuNCy!5e0!3m2!1sbg!2sbg!4v1616592883716!5m2!1sbg!2sbg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
    			</div>
    		</div>
    	</div>
    </div>
	<div class="layout_padding footer_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3">
					<div><img style="width: 40%;" src="<?php bloginfo('template_directory'); ?>/images/carlogo.png"></div>
					<p class="dolor_text">Всички топ марки на едно място. Изберете от над 250 000 обяви на автомобили при нас.</p>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<h1 class="subscribe_text">Нюзлетър</h1>
					<p class="ipsum_text">За да не изпуснете нещо се запишете за нашия нюзлетър</p>
          <?php echo do_shortcode( '[contact-form-7 id="46" title="Без име"]' ); ?>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<h1 class="quick_text">Контакти</h1>
					<div class="map_flag"><img src="<?php bloginfo('template_directory'); ?>/images/map-flag.png"><span class="padding-left">Каменица 1, 4000 Пловдив</span></div>
					<div class="dolor_text"><img src="<?php bloginfo('template_directory'); ?>/images/email-icon.png"><span class="padding-left">CarShop@abv.bg</span></div>
					<div class="dolor_text"><img src="<?php bloginfo('template_directory'); ?>/images/phone-icon.png"><span class="padding-left">+359 897436914</span></div>
				</div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <h1 class="quick_text">Последни Публикации</h1>
                    <div style="margin-top: -20%; float: left;">     
                        <?php dynamic_sidebar('rightbar') ?> 
                    </div>
                </div>
			</div>
		</div>
	</div>
    <div class="copyright">
    	<p class="copyright_text">2021 All Rights Reserved. Design By <a href="#"> CarSite</p>
    </div>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
    <?php
      wp_footer();
    ?>  
</body>
</html>