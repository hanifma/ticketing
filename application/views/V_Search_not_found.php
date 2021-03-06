<!DOCTYPE html>
<html lang="en">
<head>
<title>HF FLIGHTS</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="JONFLIGHT" />
	<meta name="keywords" content="JONFLIGHT" />
	<meta name="author" content="JONFLIGHT" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/cs-select.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/cs-skin-border.css">
	
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/seat.css">


	<!-- Modernizr JS -->
	<script src="<?php echo base_url() ?>_assets/js/modernizr-2.6.2.min.js"></script>
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">


		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href=""><img src="images/logo.png" alt="">HF FLIGHTS</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="<?php echo base_url() ?>Home<?php echo base_url() ?>">Home</a></li>

								<?php if ( $this->session->userdata('user') ): ?>
								<li class="main_nav_item"><a href="<?php echo base_url() ?>reservation">Pesananku</a></li>
								<li class=" main_nav_item"><a><?php echo $this->session->userdata('user')['username'] ?></a></li>
								<li class="main_nav_item"><a href="<?php echo base_url() ?>account/logout">Keluar</a></li>
								
								<?php else: ?>
								<li class="main_nav_item"><a href="<?php echo base_url() ?>account/signin">Masuk</a></li>
								<li class="main_nav_item"><a href="<?php echo base_url() ?>account/signup">Buat Akun</a></li>
								<?php endif; ?>
							</ul>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>

						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
        <div class="flight-wrapper">
<div class="search-flight-title animated fadeIn">
	<!-- get data from get -->
	<h4>
		<span class="glyphicon glyphicon-plane"></span>
		Perjalanan dari
		<b>
			<?php echo $_GET['rute_from'] ?>
		</b> ke
		<b>
			<?php echo $_GET['rute_to'] ?>
		</b>
	</h4>


	<p>
		<b>
			<?php
	// convert date to month day using date function php
		$date = strtotime($_GET['depart_date']);
		echo date("D d M Y", $date);
		?>
		</b>
	</p>

	<p>
		<b>
			<span>
				<?php echo $_GET['passengers'] ?> Penumpang, </span>
			<span>
				Kelas <?php echo $_GET['flight_class'] ?> </span>
		</b>
	</p>

</div>


<div class="search-flight animated fadeInUp">
    <div class="search-header">
        <div class="col-lg-3">
			<h6>Pesawat</h6>
		</div>
		<div class="col-lg-2">
			<h6>Berangkat</h6>
		</div>
		<div class="col-lg-2">
			<h6>Sampai</h6>
		</div>
		<div class="col-lg-2">
			<h6>Lama Perjalanan</h6>
		</div>
		<div class="col-lg-3">
			<h6>Harga</h6>
		</div>
    </div>
    <div class="notfound">
        <h2>Rute Tidak Tersedia</h2>
        <h4><span onclick='window.location.href="<?php echo base_url() ?>"' class="choose-btn">Cari Rute Lain</span></h4>
    </div>


</div>
</div>
	

	</div>

	<!-- Search -->


	<!-- Intro -->
	
	

				<!-- Intro Item -->

				

	<!-- CTA -->

	
	<script src="<?php echo base_url() ?>_assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url() ?>_assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url() ?>_assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url() ?>_assets/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url() ?>_assets/js/sticky.js"></script>

	<!-- Stellar -->
	<script src="<?php echo base_url() ?>_assets/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="<?php echo base_url() ?>_assets/js/hoverIntent.js"></script>
	<script src="<?php echo base_url() ?>_assets/js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url() ?>_assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url() ?>_assets/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="<?php echo base_url() ?>_assets/js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="<?php echo base_url() ?>_assets/js/classie.js"></script>
	<script src="<?php echo base_url() ?>_assets/js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="<?php echo base_url() ?>_assets/js/main.js"></script>
	<script>
		document.getElementById('current_url').value = window.location.href;
	</script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>

</html>
