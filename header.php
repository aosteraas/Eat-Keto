<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
	<title><?php wp_title( '&raquo', true , 'right' ) ?></title>
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?> style="padding-top:70px;">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php bloginfo( 'wpurl' );?>">Eat Keto</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="#">page</a></li>
					<li><a href="#">page</a></li>
					<li><a href="#">page</a></li>
					<li><a href="#">page</a></li>
				</ul>
			</div>
		</div>
	</nav>