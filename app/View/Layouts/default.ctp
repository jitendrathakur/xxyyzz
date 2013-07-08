<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Jitendra Thakur');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php //echo $cakeDescription ?>:
		<?php echo 'Jitendra Thakur'; ?>
	</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="generator" content="Cakephp 2.2" />
<meta property="http://ogp.me/ns#locale" content="en_US" />
<meta property="http://ogp.me/ns#site_name" content="Jitendra Thakur" />
<meta property="http://ogp.me/ns#type" content="website" />
<meta property="http://ogp.me/ns#title" content="Jitendra Thakur" />
<meta property="http://ogp.me/ns#description" content="Dynamic and Challanging Developer" />
<meta property="og:url" content="http://www.jitendrathakur.com" />

	
		<link href="skins/skin-default.css" rel="stylesheet">
		
		<!-- Integrated Adobe Edge Fonts starts here -->
		<script src="http://use.edgefonts.net/squada-one:n4.js"></script>
		<script src="http://use.edgefonts.net/bebas-neue:n4.js"></script>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap.min', 'bootstrap-responsive.min', 'font-awesome', 'font-awesome-ie7', 'prettyPhoto', 'style', 'skin-default', 'netError'));
		echo $this->Html->script(array('jquery.latest.min', 'jquery.prettyPhoto', 'custom',));
			

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

	
</head>
<body>
	<div id="container" class="container">
		<div id="header">
			
		</div>
	

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		
		<div id="footer">
			<?php /*echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);*/
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
