<?php 
/**
 * Template Name: About page
 */
	get_header();
?>
		<div class="layout_padding banner_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="banner_taital">Всички топ марки на едно място.</h1>
                    <p class="browse_text">Изберете от над 250 000 обяви на автомобили при нас.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="layout_padding about_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="about_taital">Нашите автомобили</h1>
                    <p class="lorem_text">Нашите автомобили са доставени от доверени доставчици от цяла европа. Колите ни са проверени
                    и ние гарантираме за тяхното качество.</p>
                    <p>
                    	<h3 style="color: #FFF;">Защо да закупите автомобил при нас?</h3>
                    	<ul style="color: #FFF;">
                    		<li>- Богат избор от марки и модели.</li>
                    		<li>- Най-добри цени на пазара.</li>
                    		<li>- Реални данни за автомобилите.</li>
                    		<li>- Съдействие за регистрация и транспорт на нов автомобил.</li>
                    	</ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=" layout_padding promoted_sectipon">
        <h1 class="promoted_text"><span style="border-bottom: 5px solid #4bc714;">Галерия на сайта</span></h1>
        <div class="container" style="width: 70%;">
        <?php
            echo do_shortcode('[smartslider3 slider="2"]');
        ?> 
        </div>  
    </div>
    <div class="layout_padding clients_section">
        <div class="container">
            <div id="client_slide" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#client_slide" data-slide-to="0" class="active"></li>
    <li data-target="#client_slide" data-slide-to="1"></li>
    <li data-target="#client_slide" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
                <div class="col-sm-12">
                    <h1 class="promoted_text">Какво мислят нашите клиенти <span style="border-bottom: 5px solid #4bc714;">ЗА НАС</span></h1>
                    <div class="client_img"><img style="width: 20%;" src="<?php bloginfo('template_directory'); ?>/images/1.jpg"></div>
                    <h1 class="client_text">Иван</h1>
                    <p class="long_text">Закупих първата си кола от тук и мога да твърдя, че получих един наистина много добър
                    автомобил. Реални километри, без никакви външни забележки, буквално като нова.</p>
                </div>
            </div>
    </div>
    <div class="carousel-item">
      <div class="row">
                <div class="col-sm-12">
                    <h1 class="promoted_text">Какво мислят нашите клиенти <span style="border-bottom: 5px solid #4bc714;">ЗА НАС</span></h1>
                    <div class="client_img"><img src="<?php bloginfo('template_directory'); ?>/images/2.jpg"></div>
                    <h1 class="client_text">Георги</h1>
                    <p class="long_text">Перфектни! След като закупиш автомобила си имаш избор дали да получиш транзитен номер или 
                    да ти доставят колата с платформа и то направо пред КАТ.</p>
                </div>
            </div>
    </div>
    <div class="carousel-item">
      <div class="row">
                <div class="col-sm-12">
                    <h1 class="promoted_text">Какво мислят нашите клиенти <span style="border-bottom: 5px solid #4bc714;">ЗА НАС</span></h1>
                    <div class="client_img"><img style="width: 20%;" src="<?php bloginfo('template_directory'); ?>/images/3.jpg"></div>
                    <h1 class="client_text">Мирослав</h1>
                    <p class="long_text">Обиколих много автокъщи докато не стигнах до вас. Тук намерих перфектния автомобил за мен и 
                    моето семейство. Нямам забележка!</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
<?php 
	get_footer();
?>