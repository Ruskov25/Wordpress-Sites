<?php 
	get_header();
	the_post();
?>
    <div class="home">
      <div class="row" style="margin: 0px; margin-top: 150px; margin-bottom: 70px; color: #FFF; background-color: rgba(12,35,38,0.7);">
        <div class="col-sm-7">
        	<a href="<?=get_permalink()?>"><h3 style="color: #FFF; text-align: center;"><?= the_title()?></h3></a>
        	<p><?php echo get_the_content(); ?></p>     
        </div>
	     <div class="col-sm-5">
	      		<h2 class="blog_head" style="text-align: center; display: block;">Времето днес</h2>
	        <div class="col-sm-6" style="float: left;"> 
	            	<ul>
	            		<li>
	            			<?php dynamic_sidebar('rightbar2') ?>
	              		</li>
	             	</ul>
	     	</div>
	        <div class="col-sm-6" style="float: right;"> 
	            	<ul>
	            		<li>
	            			<?php dynamic_sidebar('rightbar') ?>
	              		</li>
	             	</ul>
	        </div>
	    </div>
        </div>
	</div>
<?php 
	get_footer();
?>