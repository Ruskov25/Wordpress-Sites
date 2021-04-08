<?php 
	$colors = [
		'White' => '#FFFFFF',
		'Black' => '#000000',
		'Cyan' => '#00FFFF',
		'Olive' => '#808000',
		'Green' => '#008000',
		'Maroon' => '#800000',
		'Brown' => '#A52A2A',
		'Orange' => '#FFA500',
		'Red' => ' 	#FF0000',
		'Grey' => '#C0C0C0'
	];
?>
<div class="wrap">
	<h2>Допълнителни настройки</h2>
	<form method="post" action="options.php">
	<?php settings_fields( 'group-name' ) ?>
	<label for="menu-color"><b>Цвят на менюто: </b><label>
	<select name="menu-color">
	<?php
	foreach($colors as $colorName => $colorCode)
	{
		?>
		<option value="<?php echo $colorCode; ?>" <?php if(get_option('menu-color')===$colorCode) {echo "selected";} ?>><?php echo $colorName; ?></option>
		<?php
	}
	?>
		</select>
		<br>
	<label for="font-color"><b>Цвят на текста: </b><label>
	<select name="font-color">
	<?php
	foreach($colors as $colorName => $colorCode)
	{
		?>
		<option value="<?php echo $colorCode; ?>" <?php if(get_option('font-color')===$colorCode) {echo "selected";} ?>><?php echo $colorName; ?></option>
		<?php
	}
	?>
		</select>
		<br>
	<label for="footer-text"><b>Текст в футъра: </b><label>
	<input type="text" name="footer-text" value="<?php echo get_option('footer-text'); ?>" style="width:500px;">
	<?php submit_button(); ?>
	</form>
</div>