<?php 
/*
 Template Name: Contacts
 */
	get_header();
?>
		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Контакти</h2>
				<p class="col-12 text-center">Може да използвате контактната форма за да ни пишете. Ако имате идеи или въпроси може да се свържете с нас и на нашия телефон или имейл адрес.</p>
			</header>

			<div class="tm-container-inner-2 tm-contact-section">
				<div class="row">
					<div class="col-md-6">
						<?php
							echo do_shortcode('[contact-form-7 id="51" title="Форма за контакти 1"]');
						?>
					</div>
					<div class="col-md-6">
						<div class="tm-address-box">
							<h4 class="tm-info-title tm-text-success">Нашия адрес</h4>
							<address>
								ул. „Кочо Честименски“, 4400 Пазарджик Център, Пазарджик
							</address>
							<a href="tel:0898214926" class="tm-contact-link">
								<i class="fas fa-phone tm-contact-icon"></i>0898214926
							</a>
							<a href="recepies@mail.bg" class="tm-contact-link">
								<i class="fas fa-envelope tm-contact-icon"></i>recepies@mail.bg
							</a>
							<div class="tm-contact-social">
								<a class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
								<a class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
								<a class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tm-container-inner-2 tm-map-section">
				<div class="row">
					<div class="col-12">
						<div class="tm-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2955.7110407104296!2d24.330594342779545!3d42.19924552704434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14acaffd345c882d%3A0xb2c6a72a77fb7a25!2z0YPQuy4g4oCe0JrQvtGH0L4g0KfQtdGB0YLQuNC80LXQvdGB0LrQuOKAnCwgNDQwMCDQn9Cw0LfQsNGA0LTQttC40Log0KbQtdC90YLRitGALCDQn9Cw0LfQsNGA0LTQttC40Lo!5e0!3m2!1sbg!2sbg!4v1617212425957!5m2!1sbg!2sbg" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="tm-container-inner-2 tm-info-section">
			</div>
		</main>
<?php 
	get_footer();
?>