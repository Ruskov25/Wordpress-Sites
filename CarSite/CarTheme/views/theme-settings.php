<?php 
	$colors = [
		'White' => '#FFFFFF',
		'Black' => '#000000',
		'Grey' => '#C0C0C0',
		'Red' => ' 	#FF0000',
		'Cyan' => '#00FFFF',
		'Brown' => '#A52A2A',
		'Orange' => '#FFA500',
	];
?>
<div class="wrap">
	<h2>Настройки на сайта</h2>
	<form method="post" action="options.php">
	<?php settings_fields( 'group-name' ) ?>
	<label for="font-color"><b>Цвят на елементите на менюто: </b><label>
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
	<label for="font-color-hover"><b>Цвят на текста при hover: </b><label>
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
	<?php submit_button(); ?>
	</form>
</div>