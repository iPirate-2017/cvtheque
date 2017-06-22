<?php
	$dir = "cv/templates/";
	$cvs = [];
	if (is_dir($dir)) {
		if ($dh = opendir($dir)) {
			while (($iteration = readdir($dh)) !== false) {
				if(!is_file($iteration) && $iteration != "." && $iteration != "..") {
					$cvs[] = $iteration;
				}
			}
			closedir($dh);
		}
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>CVthèque - IPI Réunion</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><strong>CVthèque</strong> IPI Réunion</h1>
						<nav>
							<ul>
								<li><a href="#footer" class="button" style="margin-right: 20px">Thèmes</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
				<div id="main">
					<?php foreach ($cvs as $cv): ?>
						<article class="thumb" style="background-color:<?= $colors[array_rand($colors)] ?>">
							<h2><?= $cv ?></h2>
							<a href="cv/templates/<?= $cv ?>" class="image"><img src="cv/templates/"<?= $cv ?>"/"<?= $cv ?>".jpg" alt="" /></a>
						</article>
					<?php endforeach; ?>
				</div>

				<!-- Footer -->
					<!-- <footer id="footer" class="panel">
						<div class="inner split">
							<div>
								<section>
									<h2>Magna feugiat sed adipiscing</h2>
									<p>Nulla consequat, ex ut suscipit rutrum, mi dolor tincidunt erat, et scelerisque turpis ipsum eget quis orci mattis aliquet. Maecenas fringilla et ante at lorem et ipsum. Dolor nulla eu bibendum sapien. Donec non pharetra dui. Nulla consequat, ex ut suscipit rutrum, mi dolor tincidunt erat, et scelerisque turpis ipsum.</p>
								</section>
								<section>
									<h2>Follow me on ...</h2>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
										<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
										<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
									</ul>
								</section>
								<p class="copyright">
									&copy; Unttled. Design: <a href="http://html5up.net">HTML5 UP</a>.
								</p>
							</div>
						</div>
					</footer> -->

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<!-- <script src="assets/js/main.js"></script> -->

	</body>
</html>
