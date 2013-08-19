<!DOCTYPE html>
<html lang="en">
<head>
<?php
		 foreach($js as $file){
				echo "\n\t\t";
				?><script src="<?php echo $file; ?>"></script><?php
		 } echo "\n\t";
?>
<?php

		 foreach($css as $file){
		 	echo "\n\t\t";
			?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
		 } echo "\n\t";
?>
<?php
		if(!empty($meta))
			foreach($meta as $name=>$content){
				echo "\n\t\t";
				?><meta name="<?php echo $name; ?>" content="<?php echo is_array($content) ? implode(", ", $content) : $content; ?>" /><?php
		 }
	?>
	<style type="text/css">

	</style>
</head>
<body>
<div>
	<a href="<?php echo site_url(); ?>">Home</a> |
	<a href="<?php echo site_url('example/example_1'); ?>">Example 1</a> |
	<a href="<?php echo site_url('example/example_2'); ?>">Example 2</a> |
	<a href="<?php echo site_url('example/example_3'); ?>">Example 3</a> |
	<a href="<?php echo site_url('example/example_4'); ?>">Example 4</a>
</div>
<?php echo $output;?>
</body>
</html>