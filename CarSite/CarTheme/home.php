<?php
/**
 * Template Name: Home page
 */
    get_header();
?>
<style>
    .promoted_bt a{
        color: #000;
    }
    .promoted_bt a:hover{
        color: rgba(0,0,0,0.6);
    }
    .images a img{
        transition: all .2s ease-in-out; 
    }
    .images a img:hover{
        transform: scale(1.1); 
    }
</style>
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
    <div class=" layout_padding promoted_sectipon">
        <div class="container">
            <h1 class="promoted_text">Последно добавени <span style="border-bottom: 5px solid #4bc714;">обяви</span></h1>
            <div class="images_main">
                <div class="row">
                    <?php query_posts('showposts=6'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-sm-8 col-md-4 col-lg-4">
                    
                        <div class="images"><a href="<?=get_permalink()?>"><img src="<?=get_the_post_thumbnail_url() ?>" style="width: 100%;"></a></div>
                        <button class="promoted_bt"><a href="<?=get_permalink()?>"><?= the_title()?></a></button>
                          <p><?= wp_trim_words( get_the_content(), 10, '...' );?></p>
                    </div>
                    <?php
                        endwhile;
                        endif;
                    ?>
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
                </div>
            </div>
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