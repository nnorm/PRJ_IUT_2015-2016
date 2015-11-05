<?php
/*HEADER
@package wordpress
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<div id="header">		
		<h1><a href="<?php bloginfo('index.php'); ?>"><?php bloginfo('MehdNet'); ?></a></h1>
		<?php bloginfo('description'); ?>
		<?php wp_head(); ?>
		<link rel="stylesheet" type="text/css" href="style.css">
	</div>
</head>

