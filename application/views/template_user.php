<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Hotel Bro</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?=base_url()?>assets/css/main.css" />
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
		<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index"><b>Helmi</b><span>Chandra Santoso</span></a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="<?=base_url()?>index.php/dashboard_user">Home</a></li>
					<li><a href="<?=base_url()?>index.php/v_transaksi">Transaction</a></li>
					<li><a href="<?=base_url()?>index.php/logout">LogOut</a></li>
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			To use a video as your background, set data-video to the name of your video without
			its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
			formats to work correctly.
		-->
			<section id="banner" data-video="<?=base_url()?>images/banner">
				<div class="inner">
					<h1>HOTEL <b>BRO</b></h1>
					<p> <b>Extraordinary</b> Hotel.</p>
					<a href="#one" class="button special scrolly">Get Started</a>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div>
						<div class="box">
							<div class="image fit">
								<img src="<?=base_url()?>images/pic01.jpg" alt="" />
							</div>
							</div>
						</div></div>
					</section>
			<section id="main-conetnt">
				<?php 
				$this->load->view($konten); ?>
			</section>

		<!-- Footer -->
			


		<!-- Scripts -->
			<script src="<?=base_url()?>assets/js/jquery.scrolly.min.js"></script>
			<script src="<?=base_url()?>assets/js/jquery.scrollex.min.js"></script>
			<script src="<?=base_url()?>assets/js/skel.min.js"></script>
			<script src="<?=base_url()?>assets/js/util.js"></script>
			<script src="<?=base_url()?>assets/js/main.js"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	</body>
</html>