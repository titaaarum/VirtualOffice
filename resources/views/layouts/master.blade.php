<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>VirtualOffice</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="animate.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

	<!-- JAVASCRIPT AOS -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body>
		
	<div id="page">
		
	<header class="header menu_fixed">
		<div id="logo">
			<a href="index.html" title="VirtualOffice">
				<img src="img/logos.png" width="120" height="40" alt="" class="logo_normal">
				<img src="img/logos.png" width="120" height="40" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
			<li><a href="#sign-in-dialog" id="sign-in" class="login" title="Masuk">Masuk</a></li>
			
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu" >
			<ul>
				<li><span><a href="#beranda">Beranda</a></span>
				</li>
				<li><span><a href="#layanan">Layanan</a></span>
					<ul>
						<li>
							<span><a href="#0">Virtual Office</a></span>
							<ul>
								<li><a href="grid-listings-filterscol-search-aside.html">Sidebar+Search mobile 1</a></li>
								<li><a href="grid-listings-filterstop-search-aside.html">Full+Search mobile 1</a></li>
								<li><a href="grid-listings-filterscol.html">Sidebar+Search mobile 2</a></li>
								<li><a href="grid-listings-filterstop.html">Full+Search mobile 2</a></li>
								<li><a href="grid-listings-isotope.html">Full+Isotope filter</a></li>
							</ul>
						</li>
						<li>
							<span><a href="#0">Co-working Space</a></span>
							<ul>
								<li><a href="row-listings-filterscol-search-aside.html">Sidebar+Search mobile 1</a></li>
								<li><a href="row-listings-filterstop-search-aside.html">Full+Search mobile 1</a></li>
								<li><a href="row-listings-filterscol.html">Sidebar+Search mobile 2</a></li>
								<li><a href="row-listings-filterstop.html">Full+Search mobile 2</a></li>
								<li><a href="row-listings-isotope.html">Full+Isotope filter</a></li>
							</ul>
						</li>
						
						<li>
							<span><a href="#0">Ruang Meeting</a></span>
							<ul>
								<li><a href="detail-hotel.html">Detail page 1</a></li>
								<li><a href="detail-restaurant.html">Detail page 2</a></li>
								<li><a href="detail-shop.html">Detail page 3</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- <li><span><a href="#galeri">Galeri</a></span> -->
					
				</li>
				<li>
						<li><span><a href="#newsletter">Kontak</a></span>
						</li>
				
			</ul>
		</nav>
	</header>
	<!-- /header -->
	@yield('content')
	<footer class="plus_border">
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6" style="width: 700px;
     				margin: 500 auto;">
					<a data-toggle="collapse" data-target="#collapse_ft_1" aria-expanded="false" aria-controls="collapse_ft_1" class="collapse_bt_mobile"
					style="width: 800px;
     				margin: 0 auto;">
						<h3>Bantuan</h3>
						<div class="circle-plus closed">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</a>
					<div class="collapse show" id="collapse_ft_1">
						<ul class="links">
							<li><a href="#0">Tentang Kami</a></li>
							<li><a href="#0">Pertanyaan</a></li>
							<li><a href="#0">Akun Saya</a></li>
							<li><a href="#0">Buat Akun</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6" style="width: 100px;
     margin: 0 auto;">
					<a data-toggle="collapse" data-target="#collapse_ft_3" aria-expanded="false" aria-controls="collapse_ft_3" class="collapse_bt_mobile">
						<h3>Kontak</h3>
						<div class="circle-plus closed">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
					</a>
					<div class="collapse show" id="collapse_ft_3">
						<ul class="contacts">
							<li><i class="ti-home"></i>Gedung Graha Pena<br>Surabaya, Indonesia</li>
							<li><i class="ti-headphone-alt"></i>+62 8123480777(WhatsApp/Telp)</li>
							<li><i class="ti-email"></i><a href="#0">virtualoffice@gmail.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<a data-toggle="collapse" data-target="#collapse_ft_4" aria-expanded="false" aria-controls="collapse_ft_4" class="collapse_bt_mobile">
						<div class="circle-plus closed">
							<div class="horizontal"></div>
							<div class="vertical"></div>
						</div>
						<h3>Ikuti Kami</h3>
					</a>
					<div class="collapse show" id="collapse_ft_4">
						<div id="newsletter">
							<div id="message-newsletter"></div>
							<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
								<div class="form-group">
									<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Email">
									<input type="submit" value="Kirim" id="submit-newsletter">
								</div>
							</form>
						</div>
						<div class="follow_us">
							<ul>
								<li><a href="#0"><i class="ti-facebook"></i></a></li>
								<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
								<li><a href="#0"><i class="ti-google"></i></a></li>
								<li><a href="#0"><i class="ti-pinterest"></i></a></li>
								<li><a href="#0"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
			<div class="row">
				<div class="col-lg-6">
					<ul id="footer-selector">				
						<li><img src="img/cards_all.svg" alt=""></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul id="additional_links">
						<li><span>© 2019 VirtualOffice</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Masuk</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Masuk dengan Facebook</a>
				<a href="#0" class="social_bt google">Masuk dengan Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Kata Sandi</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Ingat Saya
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Lupa Kata Sandi?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Belum memiliki akun? <a href="register.html">Daftar</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Konfirmasi email di bawah ini</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>Kamu akan menerima email konfirmasi untuk mengatur ulang kata sandi</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
	<script src="js/functions.js"></script>
	<script src="assets/validate.js"></script>
	

</body>
</html>