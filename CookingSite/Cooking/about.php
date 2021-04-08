<?php 
/*
 Template Name: About
 */
	get_header();
?>
		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Нашият екип</h2>
			</header>

			<div class="tm-container-inner tm-persons">
				<div class="row">
					<article class="col-lg-6">
						<figure class="tm-person">
							<img src="<?php bloginfo('template_directory'); ?>/img/about-01.jpg" alt="Image" class="img-fluid tm-person-img" />
							<figcaption class="tm-person-description">
								<h4 class="tm-person-name">Яна Димитрова</h4>
								<p class="tm-person-title">Основател и CEO</p>
								<p class="tm-person-about">Една от първите основателки на нашия сайт.</p>
								<div>
									<a class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
									<a class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
									<a class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-6">
						<figure class="tm-person">
							<img src="<?php bloginfo('template_directory'); ?>/img/about-02.jpg" alt="Image" class="img-fluid tm-person-img" />
							<figcaption class="tm-person-description">
								<h4 class="tm-person-name">Мария Костова</h4>
								<p class="tm-person-title">Мениджър</p>
								<p class="tm-person-about">Тя е нашият менидър. Мотивирана и точна,
								 Мария ни помага със цялостната организация.</p>
								<div>
									<a class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
									<a class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-6">
						<figure class="tm-person">
							<img src="<?php bloginfo('template_directory'); ?>/img/about-03.jpg" alt="Image" class="img-fluid tm-person-img" />
							<figcaption class="tm-person-description">
								<h4 class="tm-person-name">Виктория Косева</h4>
								<p class="tm-person-title">Майстор Готвач</p>
								<p class="tm-person-about">Най-добрия екип се нуждае от най-добрия готвач, 
								и ако това не е тя няма кого друг.</p>
								<div>
									<a class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
									<a class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-6">
						<figure class="tm-person">
							<img src="<?php bloginfo('template_directory'); ?>/img/about-04.jpg" alt="Image" class="img-fluid tm-person-img" />
							<figcaption class="tm-person-description">
								<h4 class="tm-person-name">Милена Илиева</h4>
								<p class="tm-person-title">Кулинарен Критик</p>
								<p class="tm-person-about">Милена помага за създаването и редакцията на нашите
								рецепти.</p>
								<div>
									<a class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
									<a class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
									<a class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
									<a class="tm-social-link"><i class="fab fa-youtube tm-social-icon"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>
				</div>
			</div>
			<div class="tm-container-inner tm-featured-image">
				<div class="row">
					<div class="col-12">
						<div class="placeholder-2">
							<div class="parallax-window-2" data-parallax="scroll" data-image-src="<?php bloginfo('template_directory'); ?>/img/about-05.jpg"></div>		
						</div>
					</div>
				</div>
			</div>
			<div class="tm-container-inner tm-history">
				<div class="row">
					<div class="col-12">
						<div class="tm-history-inner">
							<img src="<?php bloginfo('template_directory'); ?>/img/about-06.jpg" alt="Image" class="img-fluid tm-history-img" />
							<div class="tm-history-text"> 
								<h4 class="tm-history-title">Нашата история</h4>
								<p class="tm-mb-p">Ние помагаме на хората, обичащи готвенето с идеи и вкусни рецепти, 
								чрез които вече години наред те изненадват своите близки и даряват нежност. Присъедини се към нас
							и добави рецепта днес!</p>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</main>

<?php 
	get_footer();
?>