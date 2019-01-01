<header id="header"><!--header-->
	
	
	<div class="header-middle"><!--header-middle-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="logo pull-left">
						<a href="<?php echo base_url(); ?>home-page"><img src="<?php echo base_url() ?>asset/site/images/home/logo.png" alt="" /></a>
					</div>
					
				</div>
				<div class="col-sm-8">
					<div class="shop-menu pull-right">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo base_url();?>account"><i class="fa fa-user"></i> Account</a></li>
							
							<li><a href="<?php echo base_url();?>checkout"<i class="fa fa-crosshairs"></i> Checkout</a></li>
							<li><a href="<?php base_url();?>show-cart"><i class="fa fa-shopping-cart"></i> Cart(<?php echo $this->cart->total_items(); ?>) </a></li>
							
							<?php
								$customer_id = $this->session->userdata('customer_id');
								if($customer_id) {
							?>

								<li><a href="<?php echo base_url();?>logout"><i class="fa fa-lock"></i> Logout</a></li>
								<li><a href="#"><?php echo $this->session->userdata('customer_name');?></a></li>

							<?php } else { ?>

								<li><a href="<?php echo base_url();?>checkout"><i class="fa fa-lock"></i> Login</a></li>

							<?php } ?>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-middle-->

	<div class="header-bottom"><!--header-bottom-->
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="mainmenu pull-left">
						<ul class="nav navbar-nav collapse navbar-collapse">
							<li><a href="<?php echo base_url(); ?>home-page" class="active">Home</a></li>
							
							<li><a href="<?php echo base_url(); ?>contact" ">Contact</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</div><!--/header-bottom-->
</header><!--/header-->