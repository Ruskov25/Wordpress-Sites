  <footer class="tm-footer text-center">
        <?php dynamic_sidebar('sidebar') ?>
      <p>Copyright &copy; 2021 <?=get_option('footer-text')?></p>
    </footer>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script>
    $(document).ready(function(){
      // Handle click on paging links
      $('.tm-paging-link').click(function(e){
        e.preventDefault();
        
        var page = $(this).text().toLowerCase();
        $('.tm-gallery-page').addClass('hidden');
        $('#tm-gallery-page-' + page).removeClass('hidden');
        $('.tm-paging-link').removeClass('active');
        $(this).addClass("active");
      });
    });
  </script>
  <?php
    wp_footer();
  ?>
</body>
</html>