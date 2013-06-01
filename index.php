<!doctype html>
<html lang="en">
	<head>
		<title>WD103 - Web Design &amp; Development (HTML &amp; CSS)</title>

		<meta charset="utf-8">
		<meta name="author" content="Fontaine Cook">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css">
		<!-- <link rel="stylesheet" href="bootstrap/css/docs.css"> -->
		<link rel="stylesheet" href="css/global.css">
	</head>
	<body>
		<div id="page" class="container">
			<div id="page-inner" class="row">

				<?php include('includes/nav.php'); ?>

				<div class="hero-unit">
					<h1>Frontend Basics</h1>
					<p>WD103 - Web Design and Development</p>
				</div>

				<div id="myCarousel" class="carousel slide">
					<?php # Slide Indicators ?>
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>

					<?php # Carousel Items ?>
					<div class="carousel-inner">
						<div class="active item"><img src="img/slide1.jpg"></div>
						<div class="item"><img src="img/slide2.jpg"></div>
						<div class="item"><img src="img/slide3.jpg"></div>
						<div class="item"><img src="img/slide4.jpg"></div>
					</div>

					<?php # Carousel Navigation ?>
					<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div>
			</div><!--page-inner-->
		</div><!--page-->

		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$('.carousel').carousel({
				interval: 2000
			})
		</script>
	</body>
</html>
