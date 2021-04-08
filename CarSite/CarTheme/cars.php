<?php 
/**
 * Template Name: Cars page
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
            <h1 class="promoted_text">Последно добавени обяви <span style="border-bottom: 5px solid #4bc714;">по марка</span></h1>
            <div class="images_main">
            	<h1 class="promoted_text"><span style="border-bottom: 5px solid #4bc714;">Audi</span></h1>
                <div class="row">
                    <?php query_posts('cat=4&showposts=3'); ?>
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
            <div class="images_main">
            	<h1 class="promoted_text"><span style="border-bottom: 5px solid #4bc714;">Mercedes</span></h1>
                <div class="row">
                    <?php query_posts('cat=6&showposts=3'); ?>
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
                <div class="images_main">
            	<h1 class="promoted_text"><span style="border-bottom: 5px solid #4bc714;">BMW</span></h1>
                <div class="row">
                    <?php query_posts('cat=5&showposts=3'); ?>
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
            <div class="images_main">
            	<h1 class="promoted_text"><span style="border-bottom: 5px solid #4bc714;">VW Passat</span></h1>
                <div class="row">
                    <?php query_posts('cat=8&showposts=3'); ?>
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
            <div class="images_main">
            	<h1 class="promoted_text"><span style="border-bottom: 5px solid #4bc714;">Range Rover</span></h1>
                <div class="row">
                    <?php query_posts('cat=9&showposts=3'); ?>
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
            <div class="images_main">
            	<h1 class="promoted_text"><span style="border-bottom: 5px solid #4bc714;">Jeeps</span></h1>
                <div class="row">
                    <?php query_posts('cat=7&showposts=3'); ?>
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
    </div>
<?php 
	get_footer();
?>