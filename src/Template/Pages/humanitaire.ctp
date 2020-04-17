<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>cabiner humanitaire</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="/humanitaire/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">

	<header id="header" class="alt">
				<h1><a href="index.html"></a></h1>
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
				<li><a href="/">Acceuil</a></li>
					<li><a href="/Pages/humanitaires">Joshua consulting</a></li>
					<li><a href="/#services">Services</a></li>
					<li><a href="/#contact">Contact</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<h2>Cabinet humanitaire </h2>
				<h3>et de développement international</h3>
                <h4>Nos action</h4>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">
				<?php foreach ($articles as  $article) {?>
					
				
					<article class="feature left">
						<span class="image"><img src="/articles/<?=$article['image']?>" alt="" /></span>
						<div class="content">
							<h2><?=$article['name']?></h2>
							<p><?=$this->Text->truncate(
    $article['description'],
    300,
    ['ellipsis' => '...',
    'exact' => true,
    'html' => true

    ]
);?> </p>
							<ul class="actions">
							<?php if (empty($article['url'])) :?>
						
								<li>
									<a href="/Pages/detail/<?=$article->id?>" class="button alt">Voir plus</a>
								</li>

								<?php else : ?>
								<li>
									<a href="https:<?=$article->url?>" class="button alt">Voir plus</a>
								</li>
<?php endif;?>
							</ul>
						</div>
					</article>
					<?php } ?>
					
				</div>
			</section>

		<!-- Two -->
			

		<!-- Three -->
			

		<!-- Four -->
		

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					
				</div>
			</footer>

		<!-- Scripts -->
			<script src="/humanitaire/assets/js/jquery.min.js"></script>
			<script src="/humanitaire/assets/js/skel.min.js"></script>
			<script src="/humanitaire/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="/humanitaire/assets/js/main.js"></script>

	</body>
</html>