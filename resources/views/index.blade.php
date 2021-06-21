@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<main>
	<div id="beranda">
		<section class="hero_single version_2">
			<div class="wrapper">
				<div class="container">
				
					
					<h3 class="animated zoomIn">Cari Ruangan yang Anda Butuhkan Sekarang!</h3>
						<!-- <marquee behavior="alternate" direction="" >Temukan Ruangan terbaik dari seluruh Indonesia</marquee> -->
					<p></p>
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
		</section>
		<!-- /hero_single -->

		<div id="layanan">
		<div class="container-fluid margin_80_55"  data-aos="fade-up" >
			<div class="main_title_2">
				
				<span><em></em></span>
				
				<h2 >Layanan Kami</h2>
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">
				<div class="item">
					<div class="strip grid">
						<figure>
							<a href="{{'seeallmeet'}}" class="wish_bt"></a>
							<a href="{{'seeallmeet'}}"><img src="img/meeting.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>lihat selengkapnya</span></div></a>
							<small>Ruang Meeting</small>
						</figure>
						<div class="wrapper">
							<h3><a href="{{'seeallmeet'}}">Ruang Meeting</a></h3>
							<p>Melayani Kapasitas Hingga 50 Orang Mulai 50 Ribu / Pax</p>
							<!-- <a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"></a> -->
						</div>
						<ul>
							<!-- <li><span class="loc_open">Sedang Buka</span></li> -->
							<!-- <li><div class="score"><span>Nilai<em></em></span><strong>8.9</strong></div></li> -->
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="strip grid">
						<figure>
							<a href="{{'seeallvo'}}" class="wish_bt"></a>
							<a href="{{'seeallvo'}}"><img src="img/office.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>lihat selengkapnya</span></div></a>
							<small>Virtual Office</small>
						</figure>
						<div class="wrapper">
							<h3><a href="{{'seeallvo'}}">Virtual Office</a></h3>
							<p>Lobby untuk ruang tunggu tamu anda, layanan kebersihan dan pemeliharaan kantor.</p>
							<!-- <a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"></a> -->
						</div>
						<ul>
							<!-- <li><span class="loc_closed">Buka</span></li> -->
							<!-- <li><div class="score"><span>Nilai<em></em></span><strong>7.0</strong></div></li> -->
						</ul>
					</div>
				</div>
				<!-- /item -->
				<div class="item">
					<div class="strip grid">
						<figure>
							<a href="{{'seeall'}}" class="wish_bt"></a>
							<a href="{{'seeall'}}"><img src="img/space.jpg" class="img-fluid" alt="" width="400" height="266"><div class="read_more"><span>lihat selengkapnya</span></div></a>
							<small>Co-working Space</small>
						</figure>
						<div class="wrapper">
							<h3><a href="{{'seeall'}}">Co-working Space</a></h3>
							<p>Cara Bekerja Lebih Nyaman Mulai 15 ribu per hari.</p>
							<!-- <a class="address" href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"></a> -->
						</div>
						<ul>
							<!-- <li><span class="loc_open">Sedang Buka</span></li> -->
							<!-- <li><div class="score"><span>Nilai<em></em></span><strong>7.0</strong></div></li> -->
						</ul>
					</div>
				</div>
			</div>
			<!-- /carousel -->
			<div class="container">
				
			</div>
			<!-- /container -->
		</div>
		</div>
		<!-- /container -->
	</div>
		
<!-- <div class="bg_color_1">
	<div id="galeri">
			<div class="container margin_80_55">
				<div class="main_title_2">
					<span><em></em></span>
					<h2>Kota Besar di Indonesia</h2>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<a href="grid-listings-filterstop.html" class="grid_item">
							<figure>
								<img src="img/sby.jpg" alt="" width="400" height="255">
								<div class="info">
									<small>55 Lokasi</small>
									<h3>Surabaya</h3>
								</div>
							</figure>
						</a>
					</div>
					<!-- /grid_item -->
					<!-- <div class="col-lg-4 col-md-6">
						<a href="grid-listings-filterstop.html" class="grid_item">
							<figure>
								<img src="img/mlg.jpg" alt="" width="400" height="255">
								<div class="info">
									<small>43 Lokasi</small>
									<h3>Malang</h3>
								</div>
							</figure>
						</a>
					</div> -->
					<!-- /grid_item -->
					<!-- <div class="col-lg-4 col-md-6">
						<a href="grid-listings-filterstop.html" class="grid_item">
							<figure>
								<img src="img/jkt.jpg" alt="" width="400" height="255">
								<div class="info">
									<small>95 Lokasi</small>
									<h3>Jakarta</h3>
								</div>
							</figure>
						</a>
					</div> -->
					<!-- /grid_item -->
					<!-- <div class="col-lg-4 col-md-6">
						<a href="grid-listings-filterstop.html" class="grid_item">
							<figure>
								<img src="img/bdg.jpg" alt="" width="400" height="255">
								<div class="info">
									<small>63 Lokasi</small>
									<h3>Bandung</h3>
								</div>
							</figure>
						</a>
					</div> -->
					<!-- /grid_item -->
					<!-- <div class="col-lg-4 col-md-6">
						<a href="grid-listings-filterstop.html" class="grid_item">
							<figure>
								<img src="img/jogja.jpg" alt="" width="400" height="255">
								<div class="info">
									<small>47 Lokasi</small>
									<h3>Jogjakarta</h3>
								</div>
							</figure>
						</a>
					</div> -->
					<!-- /grid_item -->
					<!-- <div class="col-lg-4 col-md-6">
						<a href="grid-listings-filterstop.html" class="grid_item">
							<figure>
								<img src="img/bali.jpg" alt="" width="400" height="255">
								<div class="info">
									<small>48 Lokasi</small>
									<h3>Bali</h3>
								</div>
							</figure>
						</a>
					</div> -->
					<!-- /grid_item -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->	
		
		<!-- /bg_color_1 -->	
	</div>
</div> -->
		
		<div class="call_section pattern">
			<div class="wrapper">
				
				<div class="container margin_80_55" >
					<div class="main_title_2"  data-aos="fade-up">
						<span><em></em></span>
						<h2>Mengapa harus Virtual Office?</h2>
						
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-search"></i>
								<h3>Cari Lokasi</h3>
								<p>Terdapat di berbagai tempat dari seluruh Indonesia</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-info"></i>
								<h3>Fasilitas Lengkap</h3>
								<p>Setiap ruangan sudah dilengkapi berbagai fasilitas yang akan memberi kenyamanan kepada pelanggan</p>
								<span></span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box_how">
								<i class="pe-7s-like2"></i>
								<h3>Harga Jujur</h3>
								<p>Harga terjangkau dan tanpa tambahan biaya apapun</p>
							</div>
						</div>
					</div>
					<!-- /row -->
					<p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5"><a href="{{'register'}}" class="btn_1 rounded">Gabung Sekarang</a></p>
				
				</div>
			</div>
			<!-- /wrapper -->
		</div>
		<!--/call_section-->
		
		<div class="container margin_80_55">
			<div class="main_title_2"  data-aos="fade-up">
				<span><em></em></span>
				<h2>Testimoni</h2>
				
			</div>
			<div class="row">
				<div class="col-lg-6">
					<a class="box_news" href="#0">
						<figure><img src="img/kyo.jpg" alt="" >
						</figure>
						<ul>
							<li>Natasya Valencia</li>
							<li>20.11.2017</li>
						</ul>
						<h4>Sangat memuaskan</h4>
						<p>Menyediakan banyak pilihan sesuai kebutuhan pelanggan dengan harga terjangkau....</p>
					</a>
				</div>
				<!-- /box_news -->
				<div class="col-lg-6">
					<a class="box_news" href="#0">
						<figure><img src="img/lisa.png" alt="">
						</figure>
						<ul>
							<li>Lisa Manoban</li>
							<li>20.11.2017</li>
						</ul>
						<h4>Fasilitas Lengkap</h4>
						<p>Ruangan yang saya sewa sudah memiliki teknologi terbaru yang canggih dan juga lengkap....</p>
					</a>
				</div>
				<!-- /box_news -->
				<div class="col-lg-6">
					<a class="box_news" href="#0">
						<figure><img src="img/islan.jpg" alt="">
						</figure>
						<ul>
							<li>Kamu</li>
							<li>20.11.2017</li>
						</ul>
						<h4>Sangat Mudah</h4>
						<p>Saya membutuhkan ruangan untuk meeting mendadak dan saya menemukan melalui website ini....</p>
					</a>
				</div>
				<!-- /box_news -->
				<div class="col-lg-6">
					<a class="box_news" href="#0">
						<figure><img src="img/isyana.jpg" alt="" >
						</figure>
						<ul>
							<li>Anonymous</li>
							<li>20.11.2017</li>
						</ul>
						<h4>Lokasi Strategis</h4>
						<p>Banyak ditemukan kantor-kantor yang letaknya strategis.....</p>
					</a>
				</div>
				<!-- /box_news -->
			</div>
			<!-- /row -->
			<p class="btn_home_align"><a href="#0" class="btn_1 rounded">Lihat Selengkapnya</a></p>
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->
</body>
</html>
<script>
AOS.init({
	duration : 1200,
})
</script>

@stop
