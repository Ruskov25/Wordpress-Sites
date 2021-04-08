<?php 
/**
 * Template Name: News page
 */
	get_header();
?>
  <section id="mainContent">
    <div class="content_top">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="latest_slider">
            <div class="slick_slider" id="slider">
            <h3>Галерия</h3> 
              <?php dynamic_sidebar('smartslider_area_1'); ?>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="content_top_right">
            <ul class="featured_nav wow fadeInDown" id="last_news">
              <h3>Последни публикации</h3>
                <?php query_posts('showposts=4'); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <li><img src="<?=
              get_the_post_thumbnail_url() ?>" alt = "">
                <div class="title_caption"><a href="<?=get_permalink()?>"><?= the_title()?></a></div>
                <?php
                  endwhile;
                  endif;
                ?>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="content_middle">



    </div>
    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_category wow fadeInDown">
            <h2> <span id="sport" class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Спорт</a></h2>
            <?php query_posts('cat=3'); ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="business_category_left wow fadeInDown">
              <ul class="fashion_catgnav" style="margin-left: 20px;">
                <li>
                  <div class="catgimg2_container"> <a href="<?=get_permalink()?>"><img alt="" src="<?=
                    get_the_post_thumbnail_url() ?>"></a> </div>
                  <h2 class="catg_titile"><a href="<?=get_permalink()?>"><?= the_title()?></a></h2>
                  <div class="comments_box"> <span class="meta_date"><?php echo get_the_date(); ?></span> <span class="meta_comment"><a href="#"><?php comments_popup_link( 'Оставете коментар', '1 Comment', '% Comments' ); ?></a></span> <span class="meta_more"><a>Публикувано от:  <?php the_author(); ?></a></span> </div>
                  <p><?= wp_trim_words( get_the_content(), 20, '...' );?></p>
                </li>
              </ul>
            </div>           
            <?php
                  endwhile;
                  endif;
                ?>
          </div>
          <div class="games_fashion_area" style="margin-left: 5px;">
            <div class="games_category">
              <div class="single_category">
                <h2> <span id="games" class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Игри</a> </h2>
                  <?php query_posts('cat=5'); ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <ul class="fashion_catgnav wow fadeInDown">
                  <li>
                    <div class="catgimg2_container"> <a href="<?=get_permalink()?>"><img alt="" src="<?=
                    get_the_post_thumbnail_url() ?>"></a> </div>
                    <h2 class="catg_titile"><a href="<?=get_permalink()?>"><?= the_title()?></a></h2>
                    <div class="comments_box"> <span class="meta_date"><?php echo get_the_date(); ?></span> <span class="meta_comment"><a href="#"><?php comments_popup_link( 'Оставете коментар', '1 Comment', '% Comments' ); ?></a></span> <span class="meta_more"><a>Публикувано от:  <?php the_author(); ?></a></span> </div>
                    <p><?= wp_trim_words( get_the_content(), 20, '...' );?></p>
                  </li>
                </ul>
                <?php
                  endwhile;
                  endif;
                ?>
                </ul>
                <ul class="small_catg wow fadeInDown">
                    <li>
                      <?php query_posts('cat=6'); ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                      <div class="media wow fadeInDown"> <a class="media-left" href="<?=get_permalink()?>"><img src="<?=
                    get_the_post_thumbnail_url() ?>" alt=""></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="<?=get_permalink()?>"><?= the_title()?></a></h4>
                          <div class="comments_box"> <span class="meta_date"><?php echo get_the_date(); ?></span> <span class="meta_comment"><a href=""><?php comments_popup_link( 'Оставете коментар', '1 Comment', '% Comments' ); ?></a></span> </div>
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
            <div class="fashion_category">
              <div class="single_category">
                <div class="single_category wow fadeInDown">
                  <h2> <span id="fashion" class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Мода</a> </h2>
                  <?php query_posts('cat=4'); ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <ul class="fashion_catgnav wow fadeInDown">
                  <li>
                    <div class="catgimg2_container"> <a href="<?=get_permalink()?>"><img alt="" src="<?=
                    get_the_post_thumbnail_url() ?>"></a> </div>
                    <h2 class="catg_titile"><a href="<?=get_permalink()?>"><?= the_title()?></a></h2>
                    <div class="comments_box"> <span class="meta_date"><?php echo get_the_date(); ?></span> <span class="meta_comment"><a href="#"><?php comments_popup_link( 'Оставете коментар', '1 Comment', '% Comments' ); ?></a></span> <span class="meta_more"><a>Публикувано от:  <?php the_author(); ?></a></span> </div>
                    <p><?= wp_trim_words( get_the_content(), 20, '...' );?></p>
                  </li>
                </ul>
                <?php
                  endwhile;
                  endif;
                ?>
                  <ul class="small_catg wow fadeInDown">
                    <li>
                      <?php query_posts('cat=7'); ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                      <div class="media wow fadeInDown"> <a class="media-left" href="<?=get_permalink()?>"><img src="<?=
                    get_the_post_thumbnail_url() ?>" alt=""></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="<?=get_permalink()?>"><?= the_title()?></a></h4>
                          <div class="comments_box"> <span class="meta_date"><?php echo get_the_date(); ?></span> <span class="meta_comment"><a href=""><?php comments_popup_link( 'Оставете коментар', '1 Comment', '% Comments' ); ?></a></span> </div>
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
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">
          <div class="single_bottom_rightbar">
            <h2>Забелязано в Пловдив</h2>
            <ul class="small_catg popular_catg wow fadeInDown">
              <li>
                <?php dynamic_sidebar('rightbar') ?>            
              </li>
            </ul>
          </div>
          <div class="single_bottom_rightbar">
            <ul role="tablist" class="nav nav-tabs custom-tabs">
              <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="">Последни публикации</a></li>
              
            </ul>
            <div class="tab-content">
              <div id="mostPopular" class="tab-pane fade in active" role="tabpanel">
                <ul class="small_catg popular_catg wow fadeInDown">
                  <li>
                    <div class="media wow fadeInDown">
                      <div class="media-body">
                        <?php dynamic_sidebar('rightbar2') ?>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php 
	get_footer();
?>