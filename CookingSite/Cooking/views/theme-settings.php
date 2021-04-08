<?php 
	$colors = [
		'White' => '#FFFFFF',
		'Black' => '#000000',
		'Cyan' => '#00FFFF',
		'Grey' => '#C0C0C0',
		'Brown' => '#A52A2A',
		'Red' => ' 	#FF0000',
	];
?>
<div class="wrap">
	<h2>Настройки</h2>
	<form method="post" action="options.php">
	<?php settings_fields( 'group-name' ) ?>
		<br>
	<label for="font-color-hover"><b>Цвят на страниците при hover: </b><label>
	<select name="font-color-hover">
	<?php
	foreach($colors as $colorName => $colorCode)
	{
		?>
		<option value="<?php echo $colorCode; ?>" <?php if(get_option('font-color-hover')===$colorCode) {echo "selected";} ?>><?php echo $colorName; ?></option>
		<?php
	}
	?>
		</select>
		<br>
	<label for="footer-text"><b>Копирайт текст: </b><label>
	<input type="text" name="footer-text" value="<?php echo get_option('footer-text'); ?>" style="width:500px;">
	<?php submit_button(); ?>
	</form>
</div>