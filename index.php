<?php
	$colors = [
		"#1abc9c", "#2ecc71", "#3498db", "#9b59b6", "#2ecc71", "#16a085", "#27ae60",
		"#2980b9", "#8e44ad", "#f1c40f", "#e67e22", "#e74c3c", "#f39c12", "#d35400",
		"#c0392b"
];
	$dir = "cv/custom/";
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
								<li><a href="themes.php" class="button" style="margin-right: 20px">Thèmes</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
				<div id="main">
					<?php foreach ($cvs as $cv): ?>
						<a href="cv/custom/<?= $cv ?>">
							<article class="thumb" style="background-color:<?= $colors[array_rand($colors)] ?>">
								<a href="cv/custom/<?= $cv ?>/" class="image"></a>
								<h2><?= $cv ?></h2>
								<!-- <a href="images/fulls/01.jpg" class="image"><img src="images/thumbs/01.jpg" alt="" /></a> -->
							</article>
						</a>
					<?php endforeach; ?>
				</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
	</body>
</html>
