<?php 
/**
 * Template Name: Contacts page
 */

	get_header();
?>

<section id="mainContent">
    <div class="content_top">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5">
          <div class="latest_slider">
            <div class="slick_slider" style="margin-left: 20px;">
            <h1  >Форма за контакт</h1>
              <div style=" margin-top: 10px;"> 
              <?php echo do_shortcode( '[contact-form-7 id="64" title="Форма за контакти 1"]' ); ?>
              </div>
              <p style="font-style: italic;">Полетата маркирани с * са задължителни</p>
            </div>
          </div>       
        </div>
        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="latest_slider">
            <div class="slick_slider" >
              <ul >
                <div class="slick_slider">
              <img style="width: 100%; float:left;" src="<?php bloginfo('template_directory'); ?>/images/email.jpg">
            </div>
            <h2>Оставете ни съобщение чрез формата за контакти а ние ще се опитаме да ви отговорим в най-скоро време.</h2>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </section>

<?php 
	get_footer();
?>