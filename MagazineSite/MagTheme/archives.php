<?php 
/**
 * Template Name: Archives page
 */
	get_header();
?>
<section id="mainContent">
    <div class="content_top">
      <div class="row">
      		<?php query_posts('showpost=90'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="latest_slider"  style=" margin-bottom: 5px;">
            <div class="slick_slider"> 	
              <div class="catgimg2_container" style="height: 300px;"> <a href="<?=get_permalink()?>"><img alt="" src="<?=
                    get_the_post_thumbnail_url() ?>"></a> </div>
                <h2 class="catg_titile" style="margin-top: -3px;"><a href="<?=get_permalink()?>"><?= the_title()?></a></h2>
            </div> 
          </div>
        </div>
        	<?php
               endwhile;
               endif;
            ?>
      </div>
  </section>
<?php 
	get_footer();
?>