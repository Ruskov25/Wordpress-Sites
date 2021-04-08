<?php 
	get_header();
	the_post();
?>
  <section id="mainContent">
    <div class="content_top">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm6">
        	<h1 class="catg_titile" style=" margin: 0px 15px;"><a href="<?=get_permalink()?>"><?= the_title()?></a></h1>
          <div class="latest_slider">
            <div class="slick_slider" >
            <div class="catgimg2_container" style="height: 350px; margin-top: 16px;"> <a href="<?=get_permalink()?>"><img alt="" src="<?=
                    get_the_post_thumbnail_url() ?>"></a> </div>
          </div>
          <div class="comments_box" style="margin-top: -15px;"> <span class="meta_date"><?php the_date('m dS, Y'); ?></span> <span class="meta_comment"><a><?php comments_popup_link( 'Оставете коментар', '1 Comment', '% Comments' ); ?></a></span> <span class="meta_more"><a>Публикувано от:  <?php the_author(); ?></a></span> </div>
          <div class="content_top_right">
            <ul class="featured_nav wow fadeInDown" style="font-size: 15px;" >  
                  <p><?php echo the_content(); ?></p>
            </ul>
          </div>
        </div>
      </div>
        <div class="col-lg-4 col-md-4 col-sm4" style="float: left; margin-left: 200px;">
          <div class="latest_slider">
            <div class="slick_slider">
            	<ul>
            		<li>
            			<?php query_posts('showposts=6'); ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              			<div class="media wow fadeInDown"> <a class="media-left" href="<?=get_permalink()?>"><img src="<?=
                    get_the_post_thumbnail_url() ?>" alt=""></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="<?=get_permalink()?>"><?= the_title()?></a></h4>
                          <div class="comments_box"> <span class="meta_date"><?php echo get_the_date(); ?></span> <span class="meta_comment"><a href=""><?php comments_popup_link( 'Оставете коментар', '1 Comment', '% Comments' ); ?></a></span><span class="meta_more"><a>Публикувано от:  <?php the_author(); ?></a></span>  </div>
                          <p><?= wp_trim_words( get_the_content(), 10, '...' );?></p>
                      </div>
                  </div>
                  <?php
                  endwhile;
                  endif;
                ?>
              		</li>
             	</ul>
            </div>
          </div>
        </div>
	</div>
</div>
</section>
<?php 
	get_footer();
?>