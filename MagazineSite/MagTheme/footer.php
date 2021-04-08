<footer id="footer">
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="single_footer_top wow fadeInDown">
            <h2>Връзки</h2>
            <ul class="labels_nav">
              <li><a href="#slider">Слайдер</a></li>
              <li><a href="#last_news">Последни новини</a></li>
              <li><a href="#sport">Спорт</a></li>
              <li><a href="#fashion">Мода</a></li>
              <li><a href="#games">Игри</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInRight" >
            <h2>За нас</h2>
            <p>Новинарската агенция newsExpress разполага с екип от над 35 човека, включително видео отдел, които ще подготвят за Вас денонощно внушителен набор от информация..</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_left">
            <p>Copyright &copy; 2020 <a>Veselin</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_right">
            <?=get_option('footer-text')?>
          <div class="col-lg-4 col-md-12 footer-social">
            <a href="<?=get_option('facebook-link')?>"><i class="fa fa-facebook"></i></a>
            <a href="<?=get_option('twitter-link')?>"><i class="fa fa-twitter"></i></a>
            <a href="<?=get_option('youtube-link')?>"><i class="fa fa-youtube"></i></a>
            <a href="<?=get_option('rss-link')?>"><i class="fa fa-rss"></i></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php
  wp_footer();
?>  
</body>
</html>