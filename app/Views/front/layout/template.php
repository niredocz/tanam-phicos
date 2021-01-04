<!doctype html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?= base_url() ?>/front-assets/img/logo.png">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/front-assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/front-assets/css/bootstrap-select.css">
	<link rel='stylesheet' type='text/css' href='<?= base_url(); ?>/front-assets/css/font-awesome.min.css' />
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/front-assets/css/camera.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/front-assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700' rel='stylesheet' type='text/css' />
	<title><?= $title; ?></title>
</head>

<body>
	<div class="page-container">
		<!-- Start Header -->
		<div class="header">
			<nav class="navbar container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.html" class="navbar-brand">
						<img src="<?= base_url() ?>/front-assets/img/logo.png" alt="Sapphire">Sapphire
					</a>
				</div>
				<div class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html">Home</a></li>
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">Pages <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class="dropdown-header">sliders</li>
								<li><a href="nivo-slider.html">Nivo slider</a></li>
								<li><a href="flexslider.html" class="ajax_right">Flexslider</a></li>
								<li><a href="index.html" class="ajax_right">Camera</a></li>
								<li class="divider"></li>
								<li class="dropdown-header">ecommerce</li>
								<li><a href="category.html">Category page</a></li>
								<li><a href="category_menu.html">Category page left menu</a></li>
								<li><a href="product.html" class="ajax_right">Product page</a></li>
								<li><a href="cart.html" class="ajax_right">Cart</a></li>
								<li><a href="checkout.html" class="ajax_right">Checkout</a></li>
								<li class="divider"></li>
								<li class="dropdown-submenu">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">Blog</a>
									<ul class="dropdown-menu">
										<li><a href="blog.html" class="ajax_right">Blog</a></li>
										<li><a href="blog-post.html" class="ajax_right">Blog post</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="contact.html" class="ajax_right">Contact</a></li>
					</ul>

					<ul class="nav navbar-right cart">
						<li class="dropdown">
							<a href="cart.html" class="dropdown-toggle" data-toggle="dropdown"><span>5</span></a>
							<div class="cart-info dropdown-menu">
								<table class="table">
									<thead>
									</thead>
									<tbody>
										<tr>
											<td class="image"><img alt="IMAGE" class="img-responsive" src="<?= base_url() ?>/front-assets/products/dress33.jpg"></td>
											<td class="name"><a href="project.html">Black Dress</a></td>
											<td class="quantity">x&nbsp;3</td>
											<td class="total">$130.00</td>
											<td class="remove"><img src="<?= base_url() ?>/front-assets/image/remove-small.png" alt="Remove" title="Remove"></td>
										</tr>
										<tr>
											<td class="image"><img alt="IMAGE" class="img-responsive" src="<?= base_url() ?>/front-assets/products/dress11.jpg"></td>
											<td class="name"><a href="project.html">Blue Dress</a></td>
											<td class="quantity">x&nbsp;3</td>
											<td class="total">$230.00</td>
											<td class="remove"><img src="<?= base_url() ?>/front-assets/image/remove-small.png" alt="Remove" title="Remove"></td>
										</tr>
									</tbody>
								</table>
								<div class="cart-total">
									<table>
										<tbody>
											<tr>
												<td><b>Sub-Total:</b></td>
												<td>$400.00</td>
											</tr>
											<tr>
												<td><b>Total:</b></td>
												<td>$400.00</td>
											</tr>
										</tbody>
									</table>
									<div class="checkout"><a href="cart.html" class="ajax_right">View Cart</a> | <a href="checkout.html" class="ajax_right">Checkout</a></div>
								</div>
							</div>
						</li>
					</ul>

					<form action="" class="navbar-form navbar-search navbar-right" role="search">
						<div class="input-group">
							<input type="text" name="search" placeholder="Search" class="search-query col-md-2"><button type="submit" class="btn btn-default icon-search"></button>
						</div>
					</form>
				</div>
			</nav>
		</div>
		<!-- End Header -->

		<!-- Start Main Content -->
		<?= $this->renderSection('content'); ?>
		<!-- End Main Content -->


		<!-- Start Footer -->
		<div class="footer black">
			<div class="container">
				<!-- <div class="arrow"><a href="#" class="caret">To Top</a></div> -->
				<div class="row">
					<div class="col-md-3">
						<div>
							<h3>Information</h3>
							<ul>
								<li><a href="about.html">About Us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms & Conditions</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div>
							<h3>Customer Service</h3>
							<ul>
								<li><a href="contact.html" class="ajax_right">Contact Us</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Site Map</a></li>
								<li><a href="#">Shipping</a></li>
							</ul>
						</div>
					</div>
					<!-- <div class="col-md-3 twitter">
					<div class="row">
						<h3>Follow us</h3>
						<script type="text/javascript" src="js/twitterFetcher_v9_min.js"></script>
						<ul id="twitter_update_list"><li class="col-md-2">Twitter feed loading</li></ul>
						<script>twitterFetcher.fetch('256524641194098690', 'twitter_update_list', 2, true, true, false);</script> 
					</div>				
				</div> -->
					<div class="col-md-3"></div>
					<div class="col-md-3 social">
						<div class="copy">Copyright &copy; nicole_89</div>
						<ul class="social-network">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer -->
	</div>

	<!-- script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='js/jquery-1.10.2.min.js'><\/script>")</script -->
	<script type="text/javascript" src="<?= base_url(); ?>/front-assets/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/front-assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/front-assets/js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/front-assets/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/front-assets/js/camera.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/front-assets/js/sapphire.js"></script>
	<script>
		$(document).ready(function() {
			jQuery('#slideshow0 > div').camera({
				alignment: "center",
				autoAdvance: true,
				mobileAutoAdvance: true,
				barDirection: "leftToRight",
				barPosition: "bottom",
				cols: 6,
				easing: "easeInOutExpo",
				mobileEasing: "easeInOutExpo",
				fx: "random",
				mobileFx: "random",
				gridDifference: 250,
				height: "auto",
				hover: true,
				loader: "pie",
				loaderColor: "#eeeeee",
				loaderBgColor: "#222222",
				loaderOpacity: 0.3,
				loaderPadding: 2,
				loaderStroke: 7,
				minHeight: "200px",
				navigation: true,
				navigationHover: true,
				mobileNavHover: true,
				opacityOnGrid: false,
				overlayer: true,
				pagination: true,
				pauseOnClick: true,
				playPause: true,
				pieDiameter: 38,
				piePosition: "rightTop",
				portrait: false,
				rows: 4,
				slicedCols: 12,
				slicedRows: 8,
				slideOn: "random",
				thumbnails: false,
				time: 7000,
				transPeriod: 1500,
				imagePath: '../image/'
			});
		});
	</script>
</body>

<!-- Mirrored from www.nicolethemes.com/sapphire-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 08:08:03 GMT -->

</html>