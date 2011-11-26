<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Trabalhando com cakePhp" />
		<meta name="author" content="Ricardo Fideles" />
		
		<title> AndroidConf</title>
		<link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
		<!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> ![endif]-->
		
		<?php echo $this->Html->css('styles') ?>
		<?php echo $this->Html->css('css3') ?>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<?php echo $this->Html->script('script') ?>
		
	</head>
	<body>
		<div id="container">
			<header>
				<?php echo $this->Html->image('logo.png'); ?>
				<?php echo $this->element('menu') ?>
			</header>
			
			<div class="holder_content">
				<?php echo $content_for_layout ?>
			</div>
		</div>
		<?php echo $this->element('footer') ?>
	</body>
</html>