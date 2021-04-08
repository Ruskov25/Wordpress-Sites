<?php 
	get_header();
	the_post();
?>
<style>
	.promoted_text a:hover{
		color: #FFF;
	}
</style>
<div class="row" style="background-color: rgb(230,230,230); margin-bottom: 10px; color: #fff;">
<div class="col-lg-6 col-md-6 col-sm6">
	<h1 class="promoted_text"><a href="<?=get_permalink()?>"><?= the_title()?></a></h1>
        <div class="images"><a href="<?=get_permalink()?>"><img src="<?=get_the_post_thumbnail_url() ?>" style="width: 80%; margin-left: 10%; margin-bottom: 5%;"></a></div>
</div>
<div class="col-lg-6 col-md-6 col-sm6">
        <p style="font-size: 15px; color: #FFF;" ><?php echo the_content(); ?></p>
</div>
</div>
<?php 
	get_footer();
?>