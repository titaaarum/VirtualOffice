<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>Coworking Space</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/> 	 

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

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
            <nav id="menu" class="main-menu">
                <ul>
                    <li><span><a href="#beranda">Beranda</a></span>
                    </li>
                    <li><span><a href="#layanan">Layanan</a></span>
                        <ul>
                            <li>
                                <span><a href="#0">Virtual Office</a></span>
                            </li>
                            <li>
                                <span><a href="#0">Co-working Space</a></span>
                            </li>
                            
                            <li>
                                <span><a href="#0">Ruang Meeting</a></span>
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
    <br>
    <br>
    <br>
	<main>
	


		<div id="results">
		<div class="container">
		<form>
						<div class="row no-gutters custom-search-input-2">
							<div class="col-md-5">
								<select class="wide">
										<option>Kota/Kabupaten</option>
										<option >Kota Surabaya</option>
										<option>Kota Malang</option>
										<option>Kota Jakarta</option>
										<option>Kota Bandung</option>
								</select>
							</div>
							
							<div class="col-md-5">
								<select class="wide">
									<option>Semua Kategori</option>	
									<option>Ruang Meeting</option>
									<option>Virtual Office</option>
									<option>Co-working Space</option>
								</select>
							</div>
							<div class="col-md-2">
								<input type="submit" value="Cari">
							</div>
						</div>
						<!-- /row -->
					</form>
					</div>
	   	</div>
	   	<!-- /results -->
	   		
		<div class="filters_listing version_2  sticky_horizontal">
			<div class="container">
			
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->
		
		<div class="collapse" id="collapseMap">
			<div id="map" class="map"></div>
		</div>
		<!-- /Map -->
		
		<div class="container margin_60_35">
			<div class="row">
				<aside class="col-lg-3" id="sidebar">
					<div id="filters_col">
						<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filter</a>
						<div class="collapse show" id="collapseFilters">
							<div class="filter_type">
								<h6>Kategori</h6>
								<ul>
									<li>
										<label class="container_check">Co-working Space <small>245</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">Ruang Meeting <small>43</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">Virtual Office <small>13</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
								</ul>
							</div>
							
							<div class="filter_type">
								<h6>Penilaian</h6>
								<ul>
									<li>
										<label class="container_check">Sangat Baik 9+ <small>102</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">Baik 8+ <small>122</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">Cukup Baik 7+ <small>54</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">Cukup 6+ <small>23</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
								</ul>
							</div>

							<div class="filter_type">
								<h6>Harga</h6>
								<ul>
									<li>
										<label class="container_check">Rp. 0 - Rp. 50.000 <small>74</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">Rp. 51.000 - Rp. 100.000 <small>98</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">Rp. 101.000 - Rp. 150.000 <small>54</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check"> >Rp. 150.000 <small>23</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
								</ul>
							</div>

							<div class="filter_type">
								<h6>Kapasitas</h6>
								<ul>
									<li>
										<label class="container_check">1-5 orang <small>102</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">6-15 orang <small>122</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check">15-50 orang <small>54</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
									<li>
										<label class="container_check"> >50 orang <small>23</small>
										  <input type="checkbox">
										  <span class="checkmark"></span>
										</label>
									</li>
								</ul>
							</div>
						</div>
						<!--/collapse -->
					</div>
					<!--/filters col-->
				</aside>
				<!-- /aside -->

				<div class="col-lg-9">
					<div class="strip list_view">
						<div class="row no-gutters">
							<div class="col-lg-5">
								<figure>
									<a href="{{'detailco'}}"><img src="img/jogjaco.jpg" class="img-fluid" alt=""><div class="read_more"><span>Baca Selengkapnya</span></div></a>
									
								</figure>
							</div>
							<div class="col-lg-7">
								<div class="wrapper">
									<a href="#0" class="wish_bt"></a>
									<h3><a href="{{'detailco'}}">Sinergi Co-Working Space</a></h3>
									<a class="address" href="https://www.google.co.id/maps/place/Sinergi+Coworking+Space/@-7.7795975,110.3866067,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a59cf34fe12df:0xe0fbbf81bda890bc!8m2!3d-7.7795975!4d110.3887954">Lihat pada Peta</a>
									<br>
									<p>
									Sinergi Coworking Space merupakan salah satu Coworking populer di Kota Jogjakarta. 
                                    Tidak hanya itu, di Sinergi juga terdapat coffee shop, jadi kalian bisa mengerjakan tugas ditemani 
                                    secangkir kopi.
                                    Terdiri dari 3 jenis ruangan yang tersedia, yaitu : .....
									</p>
								</div>
								<ul>
									<li><span class="loc_open">Buka</span></li>
									<li><div class="score"><span>Snagat Baik<em>350 Ulasan</em></span><strong>8.9</strong></div></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /strip list_view -->
					<div class="strip list_view">
						<div class="row no-gutters">
							<div class="col-lg-5">
								<figure>
									<a href="{{'detailco'}}"><img src="img/ngalup.jpg" class="img-fluid" alt=""><div class="read_more"><span>Baca Selengkapnya</span></div></a>
								</figure>
							</div>
							<div class="col-lg-7">
								<div class="wrapper">
									<a href="#0" class="wish_bt"></a>
									<h3><a href="{{'detailco'}}}">Ngalup.co</a></h3>
									<a class="address" href="https://www.google.co.id/maps/place/Ngalup+Coworking+Space/@-7.9309156,112.6252779,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd629fb35c9b5ab:0xd0b3301c0563c39b!8m2!3d-7.9309209!4d112.6274666">Lihat pada Peta</a>
									<br>
									<p>
									Menyediakan tempat bekerja lengkap dengan fasilitas yang mendukung untuk para pekerja remote, internet dan kopi. Bisnis coworking space cepat merambah ke kota-kota besar, salah satunya Malang. Di sini Ngalup hadir menyediakan tempat berkolaborasi untuk arek-arek Malang, khususnya di dunia digital.

Ngalup seperti layaknya co-working space hadir dengan desain tempat yang nyaman lengkap dengan fasilitas ...
									</p>
									
								</div>
								<ul>
									<li><span class="loc_open">Buka</span></li>
									<li><div class="score"><span>Baik<em>350 Ulasan</em></span><strong>7.0</strong></div></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /strip list_view -->
					<div class="strip list_view">
						<div class="row no-gutters">
							<div class="col-lg-5">
								<figure>
									<a href="{{'detailco'}}}"><img src="img/jktco.jpg" class="img-fluid" alt=""><div class="read_more"><span>Baca Selengkapnya</span></div></a>
								</figure>
							</div>
							<div class="col-lg-7">
								<div class="wrapper">
									<a href="#0" class="wish_bt"></a>
									<h3><a href="{{'detailco'}}">Kedasi Co-working Space</a></h3>
									<a class="address" href="https://www.google.co.id/maps/place/KEDASI+Co-Working+Space+Tanjung+Duren/@-6.1819194,106.7853267,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f6f6bb200f3f:0x3914a0e42e121aed!8m2!3d-6.1819247!4d106.7875154">Lihat pada Peta</a>
									<br>
									<p>
									coworking space yang menawarkan konsep, layanan serta fasilitas yang lengkap di Jakarta Barat bernama KEDASI. Ruangan yang baru saja diresmikan Januari 2016 ini bisa menjadi alternatif 
									bagi pelaku startup yang membutuhkan ruangan kerja dengan harga terjangkau di kawasan Jakarta Barat...
									</p>
								</div>
								<ul>
									<li><span class="loc_closed">Tutup</span></li>
									<li><div class="score"><span>Baik<em>350 Ulasan</em></span><strong>7.0</strong></div></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /strip list_view -->
					<div class="strip list_view">
						<div class="row no-gutters">
							<div class="col-lg-5">
								<figure>
									<a href="{{'detailco'}}"><img src="img/bdgco.jpg" class="img-fluid" alt=""><div class="read_more"><span>Baca Selengkapnya</span></div></a>
									
								</figure>
							</div>
							<div class="col-lg-7">
								<div class="wrapper">
									<a href="#0" class="wish_bt"></a>
									<h3><a href="{{'detailco'}}">Ruang Reka</a></h3>
									<a class="address" href="https://www.google.co.id/maps/place/Ruangr%C3%A9ka+Coworking+Space+Bandung/@-6.8884287,107.6127713,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e6fd6d0f33ef:0x93a0a0a1f0627c1a!8m2!3d-6.888434!4d107.61496">Lihat pada Peta</a>
									<p>
									Ruangreka adalah business incubator dan coworking space. Kami menciptakan ruang untuk para entrepreneur agar dapat belajar, bekerja dan berkolaborasi ...
									</p>
									
								</div>
								<ul>
									<li><span class="loc_closed">Tutup</span></li>
									<li><div class="score"><span>Sangat Baik<em>350 Reviews</em></span><strong>9.0</strong></div></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /strip list_view -->



					<p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Muat Selengkapnya</a></p>
				</div>
				<!-- /col -->
			</div>		
		</div>
		<!-- /container -->
		
	</main>
	<!--/main-->
	
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