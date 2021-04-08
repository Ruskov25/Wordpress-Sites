<?php
/**
 * Template Name: Home page
 */
 	get_header();
?>
  <section id="mainContent">
    <div class="content_top">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="latest_slider">
            <div class="slick_slider">
              <img style="height: 375px;" src="<?php bloginfo('template_directory'); ?>/images/news1.png">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="latest_slider">
            <div class="slick_slider">
            	<ul class="small_catg wow fadeInDown">
                    <li>
                  <?php query_posts('showposts=3'); ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                      <div class="media wow fadeInDown"> <a class="media-left" href="<?=get_permalink()?>"><img src="<?=
                    get_the_post_thumbnail_url() ?>" alt=""></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="<?=get_permalink()?>"><?= the_title()?></a></h4>
                          <div class="comments_box"> <span class="meta_date"><?php echo get_the_date(); ?></span> <span class="meta_comment"><a href=""><?php comments_popup_link( 'Оставете коментар', '1 Comment', '% Comments' ); ?></a></span><span class="meta_more"><a>Публикувано от:  <?php the_author(); ?></a></span></div>
                          <p><?= wp_trim_words( get_the_content(), 25, '...' );?></p>
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
  </section>
<?php
get_footer();
?>