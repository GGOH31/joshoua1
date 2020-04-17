<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : FlowerClusters 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130612

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="/detai/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="/detai/fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><?=$article['name']?></h1>
		</div>
		
	</div>
</div>

<div id="page" class="container">
	<div id="content">
		<div class="title">
			<h2><?=$article['name']?> </h2>
			 </div>
		<a class="image image-full"><img src="/articles/<?=$article['image']?>" alt="" /></a>
		<p><?=$article['description']?> </p>
    <br><a href="/backend/Users/login" class="button big alt" style="background-color:blue;">Télécharger l'article</a>
	<a href="/#contact" class="button big alt" style="background-color:green;">Nous Contacter</a>
</div>
	<div id="sidebar">
		<div class="box1">
			<div class="title">
				<h2>Autre articles</h2>
			</div>
			<ul class="style1">
			<?php foreach ($articleAll as $articleA) {?>
				 <?php if (empty($articleA['url'])) :?>
				
		
				<li><a href="/Pages/detail/<?=$articleA->id?>"><?=$articleA['name']?></a></li>
			<?php else : ?>
			<!--<li><a href="https://<?=$article['url']?>" ><?=$articleA['name']?></a></li>-->

			<?php endif;?>
				<?php 	} ?>
				
			</ul>
		</div>
	
	</div>
</div>
<div id="footer-wrapper">
	<div id="footer" class="container">
		
	
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="#">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">Gedeongoh</a>.</p>

	
	</div>
</div>

</body>
</html>
