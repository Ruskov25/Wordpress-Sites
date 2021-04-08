<?php 
/*
 Template Name: Home
 */
	get_header();
?>
<style>
	.hov img{
    	transition: all .2s ease-in-out; 
    }
    .hov img:hover{
        transform: scale(1.1); 
    }
</style>
		<header class="row tm-welcome-section">
			<h2 class="col-12 text-center tm-section-title">Разгледайте последните ни предложения</h2>
		</header>
		<main>
		<div class="row" style="margin-left: 40px;">			
			<div class="row tm-gallery">
				<div id="tm-gallery-page-pizza" class="tm-gallery-page">
					<?php query_posts('showposts=4'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						
						<figure>
							<a class="hov" href="<?=get_permalink()?>"><img src="<?=get_the_post_thumbnail_url() ?>" alt="Image" class="img-fluid tm-gallery-img" /></a>
							<figcaption>
								<a style="text-decoration: none;" href="<?=get_permalink()?>"><h5 class="tm-gallery-title"><?= the_title()?></h5></a>
								<p class="tm-gallery-description"><?= wp_trim_words( get_the_content(), 15, '...' );?></p>
							</figcaption>
						</figure>
						
					</article>	
					<?php
                        endwhile;
                        endif;
                    ?>	
				</div> 
			</div>
		</div>
			<div class="tm-section tm-container-inner">
			</div>
						<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<img src="<?php bloginfo('template_directory'); ?>/img/img-01.jpg" alt="Image" class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<h4 class="tm-gallery-title">Пригответе нещо вкусно и изненадайте любимия човек.</h4>
							<p class="tm-mb-45">Разгледайте нашите екслузивни рецепти и пригответе нещо вкусно за любимия човек.</p>
						</div>
					</div>
				</div>
			</div>
		</main>
<?php 
	get_footer();
?>