<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
	include_once("pages/functions.php"); 
 ?>
	<div id="carousel" class="carousel slide">
		<ol class="carousel-indicators">
			<li class="active" data-target="#carousel" data-slide-to="0"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
		</ol>
		<!-- слайды -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="images/63.jpg" alt="">
				<div class="carousel-caption">
					<h3>Travel</h3>
					<p>Follow your dream</p>
				</div>
			</div>
			<div class="item">
				<img src="images/64.jpg" alt="">
				<div class="carousel-caption">
					<h3>Travel</h3>
					<p>Follow your dream</p>
				</div>
			</div>
			<div class="item">
				<img src="images/65.jpg" alt="">
				<div class="carousel-caption">
					<h3>Travel</h3>
					<p>Follow your dream</p>
				</div>
			</div>

		</div> 
		<!-- стрелки переключения слайдов -->
		<a href="#carousel" class="left carousel-control" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a href="#carousel" class="right carousel-control" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>
	<div class="navbar navbar-default navbar-static-top">
		<div class="container"> 
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu" >
					<span class="sr-only">Открыть навигацию</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"></a>
			</div>
			<div class="collapse navbar-collapse" id="responsive-menu">
				<ul class="nav navbar-nav">
					<li><a href="adminpanel.php?menu=1">Countries</a></li>
					<!-- <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Пункт 2 <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Пункт 1</a></li>
							<li><a href="#">Пункт 2</a></li>
							<li><a href="#">Пункт 3</a></li>
							<li class="divider"></li>
							<li><a href="#">Пункт 4</a></li>
						</ul>
					</li> -->
					<li><a href="adminpanel.php?menu=2">Cities</a></li>
					<li><a href="adminpanel.php?menu=3">Hotels</a></li>
					<li><a href="adminpanel.php?menu=4">Users</a></li>
				</ul>

			</div>

		</div>

	</div>
	<div class="">
		<div class="container">
		
			<div class="row">

			</div>
		
			<div class="row " >
				<?php 
				if (isset($_GET["menu"])) {
					$menu=$_GET["menu"];
					if ($menu==1) {
						include_once ("pages/fcountries.php");
					}
					if ($menu==2) {
						include_once ("pages/fcities.php");
					}
					if ($menu==3) {
						include_once ("pages/fhotels.php");
					}
					if ($menu==4) {
						include_once ("pages/fusers.php");
					}
				}
				?>
			</div>
			<div class="row">

			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>