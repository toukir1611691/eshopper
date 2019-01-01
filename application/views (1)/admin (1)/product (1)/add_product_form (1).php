

<!DOCTYPE html>
<html lang="en">
<head>

<!-- start: Meta -->
<meta charset="utf-8">
<title><?php echo $title; ?> | E-Shopper</title>
<meta name="description" content="Bootstrap Metro Dashboard">
<meta name="author" content="Dennis Ji">
<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<!-- end: Meta -->

<!-- start: Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- end: Mobile Specific -->

<!-- start: CSS -->
<link id="bootstrap-style" href="<?php echo base_url() ?>asset/admin_login/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>asset/admin_login/css/bootstrap-responsive.min.css" rel="stylesheet">
<link id="base-style" href="<?php echo base_url() ?>asset/admin_login/css/style.css" rel="stylesheet">
<link id="base-style-responsive" href="<?php echo base_url() ?>asset/admin_login/css/style-responsive.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
<!-- end: CSS -->


<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link id="ie-style" href="<?php echo base_url() ?>asset/admin_login/css/ie.css" rel="stylesheet">
<![endif]-->

<!--[if IE 9]>
<link id="ie9style" href="<?php echo base_url() ?>asset/admin_login/css/ie9.css" rel="stylesheet">
<![endif]-->

<!-- start: Favicon -->
<link rel="shortcut icon" href="<?php echo base_url() ?>asset/admin_login/img/favicon.ico">
<!-- end: Favicon -->




</head>

<body>
<!-- start: Header -->
<div class="navbar">
<div class="navbar-inner">
<div class="container-fluid">
	<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</a>
	<a class="brand" href="index.html"><span>Metro</span></a>
					
	<!-- start: Header Menu -->
	<div class="nav-no-collapse header-nav">
		<ul class="nav pull-right">
			<li class="dropdown hidden-phone">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
					<i class="halflings-icon white warning-sign"></i>
				</a>
				<ul class="dropdown-menu notifications">
					<li class="dropdown-menu-title">
						<span>You have 11 notifications</span>
						<a href="#refresh"><i class="icon-repeat"></i></a>
					</li>	
					<li>
						<a href="#">
							<span class="icon blue"><i class="icon-user"></i></span>
							<span class="message">New user registration</span>
							<span class="time">1 min</span> 
						</a>
					</li>
					<li>
						<a href="#">
							<span class="icon green"><i class="icon-comment-alt"></i></span>
							<span class="message">New comment</span>
							<span class="time">7 min</span> 
						</a>
					</li>
					<li>
						<a href="#">
							<span class="icon green"><i class="icon-comment-alt"></i></span>
							<span class="message">New comment</span>
							<span class="time">8 min</span> 
						</a>
					</li>
					<li>
						<a href="#">
							<span class="icon green"><i class="icon-comment-alt"></i></span>
							<span class="message">New comment</span>
							<span class="time">16 min</span> 
						</a>
					</li>
					<li>
						<a href="#">
							<span class="icon blue"><i class="icon-user"></i></span>
							<span class="message">New user registration</span>
							<span class="time">36 min</span> 
						</a>
					</li>
					<li>
						<a href="#">
							<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
							<span class="message">2 items sold</span>
							<span class="time">1 hour</span> 
						</a>
					</li>
					<li class="warning">
						<a href="#">
							<span class="icon red"><i class="icon-user"></i></span>
							<span class="message">User deleted account</span>
							<span class="time">2 hour</span> 
						</a>
					</li>
					<li class="warning">
						<a href="#">
							<span class="icon red"><i class="icon-shopping-cart"></i></span>
							<span class="message">New comment</span>
							<span class="time">6 hour</span> 
						</a>
					</li>
					<li>
						<a href="#">
							<span class="icon green"><i class="icon-comment-alt"></i></span>
							<span class="message">New comment</span>
							<span class="time">yesterday</span> 
						</a>
					</li>
					<li>
						<a href="#">
							<span class="icon blue"><i class="icon-user"></i></span>
							<span class="message">New user registration</span>
							<span class="time">yesterday</span> 
						</a>
					</li>
					<li class="dropdown-menu-sub-footer">
						<a>View all notifications</a>
					</li>	
				</ul>
			</li>
			<!-- start: Notifications Dropdown -->
			<li class="dropdown hidden-phone">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
					<i class="halflings-icon white tasks"></i>
				</a>
				<ul class="dropdown-menu tasks">
					<li class="dropdown-menu-title">
						<span>You have 17 tasks in progress</span>
						<a href="#refresh"><i class="icon-repeat"></i></a>
					</li>
					<li>
						<a href="#">
							<span class="header">
								<span class="title">iOS Development</span>
								<span class="percent"></span>
							</span>
							<div class="taskProgress progressSlim red">80</div> 
						</a>
					</li>
					<li>
						<a href="#">
							<span class="header">
								<span class="title">Android Development</span>
								<span class="percent"></span>
							</span>
							<div class="taskProgress progressSlim green">47</div> 
						</a>
					</li>
					<li>
						<a href="#">
							<span class="header">
								<span class="title">ARM Development</span>
								<span class="percent"></span>
							</span>
							<div class="taskProgress progressSlim yellow">32</div> 
						</a>
					</li>
					<li>
						<a href="#">
							<span class="header">
								<span class="title">ARM Development</span>
								<span class="percent"></span>
							</span>
							<div class="taskProgress progressSlim greenLight">63</div> 
						</a>
					</li>
					<li>
						<a href="#">
							<span class="header">
								<span class="title">ARM Development</span>
								<span class="percent"></span>
							</span>
							<div class="taskProgress progressSlim orange">80</div> 
						</a>
					</li>
					<li>
						<a class="dropdown-menu-sub-footer">View all tasks</a>
					</li>	
				</ul>
			</li>
			<!-- end: Notifications Dropdown -->
			<!-- start: Message Dropdown -->
			<li class="dropdown hidden-phone">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
					<i class="halflings-icon white envelope"></i>
				</a>
				<ul class="dropdown-menu messages">
					<li class="dropdown-menu-title">
						<span>You have 9 messages</span>
						<a href="#refresh"><i class="icon-repeat"></i></a>
					</li>	
					<li>
						<a href="#">
							<span class="avatar"><img src="<?php echo base_url() ?>asset/admin_login/img/avatar.jpg" alt="Avatar"></span>
							<span class="header">
								<span class="from">
									Dennis Ji
									</span>
								<span class="time">
									6 min
								</span>
							</span>
							<span class="message">
								Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
							</span>  
						</a>
					</li>
					<li>
						<a href="#">
							<span class="avatar"><img src="<?php echo base_url() ?>asset/admin_login/img/avatar.jpg" alt="Avatar"></span>
							<span class="header">
								<span class="from">
									Dennis Ji
									</span>
								<span class="time">
									56 min
								</span>
							</span>
							<span class="message">
								Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
							</span>  
						</a>
					</li>
					<li>
						<a href="#">
							<span class="avatar"><img src="<?php echo base_url() ?>asset/admin_login/img/avatar.jpg" alt="Avatar"></span>
							<span class="header">
								<span class="from">
									Dennis Ji
									</span>
								<span class="time">
									3 hours
								</span>
							</span>
							<span class="message">
								Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
							</span>  
						</a>
					</li>
					<li>
						<a href="#">
							<span class="avatar"><img src="<?php echo base_url() ?>asset/admin_login/img/avatar.jpg" alt="Avatar"></span>
							<span class="header">
								<span class="from">
									Dennis Ji
									</span>
								<span class="time">
									yesterday
								</span>
							</span>
							<span class="message">
								Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
							</span>  
						</a>
					</li>
					<li>
						<a href="#">
							<span class="avatar"><img src="<?php echo base_url() ?>asset/admin_login/img/avatar.jpg" alt="Avatar"></span>
							<span class="header">
								<span class="from">
									Dennis Ji
									</span>
								<span class="time">
									Jul 25, 2012
								</span>
							</span>
							<span class="message">
								Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
							</span>  
						</a>
					</li>
					<li>
						<a class="dropdown-menu-sub-footer">View all messages</a>
					</li>	
				</ul>
			</li>
			<!-- end: Message Dropdown -->
			<li>
				<a class="btn" href="#">
					<i class="halflings-icon white wrench"></i>
				</a>
			</li>
			<!-- start: User Dropdown -->
			<li class="dropdown">
				<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
					<i class="halflings-icon white user"></i> Dennis Ji
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li class="dropdown-menu-title">
						<span>Account Settings</span>
					</li>
					<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
					<li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
				</ul>
			</li>
			<!-- end: User Dropdown -->
		</ul>
	</div>
	<!-- end: Header Menu -->
	
</div>
</div>
</div>
<!-- start: Header -->



<div class="container-fluid-full">
<div class="row-fluid">

<?php
$message = $this->session->message;
if(isset($message)) {
	echo $message;
	$this->session->unset_userdata('message');
}
?>

	
<!-- start: Main Menu -->
<?php echo $sidebar; ?>
<!-- end: Main Menu -->



<!-- start: Content -->


<div id="content" class="span10">



<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
		<form class="form-horizontal" action="<?php echo base_url();?>product/save_product" method="post" enctype="multipart/form-data">

			
			
				<fieldset>
				<div class="control-group">
					<label class="control-label" for="typeahead">Product Name </label>
					<div class="controls">
					<input type="text" name="product_name" value="" >
					
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="typeahead">Product Short Description </label>
					<div class="controls">
					<input type="text" name="product_short_desc" value="" >
					
					</div>
				</div>
										
				<div class="control-group hidden-phone">
					<label class="control-label" for="textarea2">Product Long Description</label>
					<div class="controls">
					<textarea name="product_long_desc" class="cleditor" id="textarea2" rows="3"></textarea>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="selectError3">Product Category</label>
					<div class="controls">
						<select id="selectError3" name="product_category">
						<option > Select Category </option>
						<?php foreach ($category_info as $category) { ?>
							
							<option value="<?php echo $category->category_id;?>">
								<?php echo $category->category_name; ?>
							</option>

						<?php } ?>

					
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="typeahead">Product Price </label>
					<div class="controls">
					<input type="text" name="product_price" value="" >
					
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="typeahead">Product quantity </label>
					<div class="controls">
					<input type="text" name="product_quantity" value="" >
					
					</div>
				</div>


				<div class="control-group">
					<label class="control-label" for="typeahead">Product Image</label>
					<div class="controls">
						<input type="file" name="product_image" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
					</div>
				</div>

				<div class="control-group hidden-phone">
					<label class="control-label" for="textarea2">Product Status</label>
					<div class="controls">
						<select name="product_status">
							<option>---Select Status---</option>
							<option value="1">Published</option>
							<option value="0">Unpublished</option>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="typeahead">Top Product</label>
					<div class="controls">
					<input type="checkbox" name="top_product"  >
					
					</div>
				</div>

				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Add Product</button>
					
				</div>
				</fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->



</body>
</html>
