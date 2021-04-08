<?php 
	get_header();
	the_post();
?>
				<header class="row tm-welcome-section">
				</header>
				<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<p><?php echo the_content(); ?></p>
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<a style="text-align: center; text-decoration: none;" href="<?=get_permalink()?>"><h4 style="font-size: 28px; font-weight: bold;" class="tm-gallery-title"><?= the_title()?></h4>
						</a>
							<a href="<?=get_permalink()?>"><img src="<?=get_the_post_thumbnail_url() ?>" alt="Image" 
								class="img-fluid" /></a>
						</div>
					</div>
				</div>
			</div>
<?php 
	get_footer();
?>