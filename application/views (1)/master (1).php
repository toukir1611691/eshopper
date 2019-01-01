<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $title; ?> | E-Shopper</title>
<link href="<?php echo base_url() ?>asset/site/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>asset/site/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>asset/site/css/prettyPhoto.css" rel="stylesheet">
<link href="<?php echo base_url() ?>asset/site/css/price-range.css" rel="stylesheet">
<link href="<?php echo base_url() ?>asset/site/css/animate.css" rel="stylesheet">
<link href="<?php echo base_url() ?>asset/site/css/main.css" rel="stylesheet">
<link href="<?php echo base_url() ?>asset/site/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="<?php echo base_url() ?>asset/site/js/html5shiv.js"></script>
<script src="<?php echo base_url() ?>asset/site/js/respond.min.js"></script>
<![endif]-->       
<link rel="shortcut icon" href="<?php echo base_url() ?>asset/site/images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>asset/site/images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>asset/site/images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>asset/site/images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>asset/site/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

<?php echo $header; ?>


<?php echo $slider; ?>



<section>
	<div class="container">
		<div class="row">
			<?php
				if($left_sidebar != NULL) {
			?>
			<div class="col-sm-3">
			
			<?php echo $left_sidebar; ?>

			</div>
				<?php } ?>
			<div class="col-sm-9 padding-right">
				<!--features_items-->
				<?php echo $featured_product;?>
				<!--features_items-->
				
				<!--Recommended_items-->
				<?php echo $recommended_items;?>
				<!--Recommended_items-->
				
			</div>
		</div>
	</div>
</section>

<footer id="footer"><!--Footer-->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="companyinfo">
						<h2><span>e</span>-shopper</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="col-sm-3">
						<div class="video-gallery text-center">
							<a href="#">
								<div class="iframe-img">
									<img src="<?php echo base_url() ?>asset/site/images/home/iframe1.png" alt="" />
								</div>
								<div class="overlay-icon">
									<i class="fa fa-play-circle-o"></i>
								</div>
							</a>
							<p>Circle of Hands</p>
							<h2>24 DEC 2014</h2>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="video-gallery text-center">
							<a href="#">
								<div class="iframe-img">
									<img src="<?php echo base_url() ?>asset/site/images/home/iframe2.png" alt="" />
								</div>
								<div class="overlay-icon">
									<i class="fa fa-play-circle-o"></i>
								</div>
							</a>
							<p>Circle of Hands</p>
							<h2>24 DEC 2014</h2>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="video-gallery text-center">
							<a href="#">
								<div class="iframe-img">
									<img src="<?php echo base_url() ?>asset/site/images/home/iframe3.png" alt="" />
								</div>
								<div class="overlay-icon">
									<i class="fa fa-play-circle-o"></i>
								</div>
							</a>
							<p>Circle of Hands</p>
							<h2>24 DEC 2014</h2>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="video-gallery text-center">
							<a href="#">
								<div class="iframe-img">
									<img src="<?php echo base_url() ?>asset/site/images/home/iframe4.png" alt="" />
								</div>
								<div class="overlay-icon">
									<i class="fa fa-play-circle-o"></i>
								</div>
							</a>
							<p>Circle of Hands</p>
							<h2>24 DEC 2014</h2>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="address">
						<img src="<?php echo base_url() ?>asset/site/images/home/map.png" alt="" />
						<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="footer-widget">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="single-widget">
						<h2>Service</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#">Online Help</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Order Status</a></li>
							<li><a href="#">Change Location</a></li>
							<li><a href="#">FAQ’s</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="single-widget">
						<h2>Quock Shop</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#">T-Shirt</a></li>
							<li><a href="#">Mens</a></li>
							<li><a href="#">Womens</a></li>
							<li><a href="#">Gift Cards</a></li>
							<li><a href="#">Shoes</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="single-widget">
						<h2>Policies</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privecy Policy</a></li>
							<li><a href="#">Refund Policy</a></li>
							<li><a href="#">Billing System</a></li>
							<li><a href="#">Ticket System</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="single-widget">
						<h2>About Shopper</h2>
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#">Company Information</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Store Location</a></li>
							<li><a href="#">Affillate Program</a></li>
							<li><a href="#">Copyright</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3 col-sm-offset-1">
					<div class="single-widget">
						<h2>About Shopper</h2>
						<form action="#" class="searchform">
							<input type="text" placeholder="Your email address" />
							<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
							<p>Get the most recent updates from <br />our site and be updated your self...</p>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
				<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
			</div>
		</div>
	</div>
	
</footer><!--/Footer-->



<script src="<?php echo base_url() ?>asset/site/js/jquery.js"></script>
<script src="<?php echo base_url() ?>asset/site/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asset/site/js/jquery.scrollUp.min.js"></script>
<script src="<?php echo base_url() ?>asset/site/js/price-range.js"></script>
<script src="<?php echo base_url() ?>asset/site/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url() ?>asset/site/js/main.js"></script>
</body>
</html>}