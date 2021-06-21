@extends('layouts.masterdetailvo')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Detail Virtual Office</title>
</head>
<body>
<main>		

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/office.jpg" class="d-block w-100 slider" alt="" width="60" height="1000">
        <div class="carousel-caption d-none d-md-block">
         <h3>PT. Graha Pena Jawa Pos</h3>
          <p>Jl. Ahmad Yani No.88 Ketintang Surabaya</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/ofc.jpg" class="d-block w-100 slider"  alt="" width="960" height="900">
        <div class="carousel-caption d-none d-md-block">
          <h3>PT. Lintas Media Telekomunikasi</h3>
          <p>Citra Harmoni Blok A2-32 - Kec. Taman Sepanjang - Surabaya</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/kantor.jpg" class="d-block w-100 slider" alt="" width="960" height="900">
        <div class="carousel-caption d-none d-md-block">
          <h3>PT. Giftstarindo</h3>
          <p>Jl. Letjen Soetojo No. 140A Kav. 12A-12B - Ruko Niaga Sentosa - Medaeng - Waru - Sidoarjo - Surabaya</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
			
			<!--/hero_in-->
			
			<nav class="secondary_nav sticky_horizontal_2">
				<div class="container">
					<ul class="clearfix">
						<li><a href="#description" class="active">Deskripsi</a></li>
						<li><a href="#reviews">Ulasan</a></li>
						<li><a href="#sidebar">Reservasi</a></li>
					</ul>
				</div>
			</nav>
	
			<div class="container margin_60_35">
					<div class="row">
						<div class="col-lg-8">
							<section id="description">
								<div class="detail_title_1">
									<h1>Samudra Virtual Office</h1>
									<!-- <a class="address" href="https://www.google.com/maps/search/graha+pena+surabaya/@-7.320289,112.7297005,17z/data=!3m1!4b1?hl=id">PT. Graha Pena Jawa Pos Surabaya</a> -->
								</div>
						
								<p>Sebuah "ruang kerja" yang berlokasi di dunia internet, tempat seorang individu dapat menyelesaikan tugas-tugas yang diperlukan untuk melaksanakan bisnis profesional atau pribadi tanpa memiliki "fisik" lokasi usaha</p>
								<h5 class="add_bottom_15">Fasilitas</h5>
								<div class="row add_bottom_30">
									<div class="col-md-6">
										<ul class="bullets">
											<li>Meeting Room / Video Conference</li>
					 						<li>Receptionist</li>
											<li>Voicemailbox</li>
											<li>Free WiFi</li>
										</ul>
									</div>
								
								</div>
								<!-- /row -->						
								<div class="opening">
									<div class="ribbon">
										<span class="open">Sedang Buka</span>
									</div>
									<i class="icon_clock_alt"></i>
									<h4>Jam Kerja</h4>
									<div class="row">
										<div class="col-md-6">
											<ul>
												<li>Senin <span>9 AM - 5 PM</span></li>
												<li>Selasa <span>9 AM - 5 PM</span></li>
												<li>Rabu <span>9 AM - 5 PM</span></li>
												<li>Kamis <span>9 AM - 5 PM</span></li>
											</ul>
										</div>
										<div class="col-md-6">
											<ul>
												<li>Jumat <span>9 AM - 5 PM</span></li>
												<li>Sabtu <span>9 AM - 5 PM</span></li>
												<li>Minggu <span>Libur</span></li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /opening -->
								
								<hr>

								<br>
								<br>
								<br>
								
								<div class="card bg-light mb-3" style="max-width: 50rem; text-align:center;">
  <div class="card-header"><h5>Harga Sewa Samudra Virtual Office</h5></div>
  <div class="card-body">
    
	<p class="card-text">Per Tahun 	<strong>Rp. 6.000.000,-</strong></p>
	<p class="card-text">Per Bulan 	<strong>Rp. 650.000,-</strong></p>
  </div></div>
   
  <br>
  <br>
  <br>


								<hr>
								<!-- <h3>Pilihan Rekomendasi</h3> -->

								<div class="box-gallery">
								<div class="content-gallery">
								<div class="container-all-foto">
			
			<h2>Galeri</h2>
			<div class="galeri">
<div class="container-foto">
<img src="https://bit.ly/2PvlS8Z" alt="" class="foto">
</div>
<div class="container-foto">
<img src="https://bit.ly/2PXNumM" alt="" class="foto">
</div>
<div class="container-foto">
<img src="https://bit.ly/2KbUszm" alt="" class="foto">
</div>
<div class="container-foto">
<img src="https://bit.ly/2FnhYul" alt="" class="foto">
</div>
<div class="container-foto">
<img src="https://bit.ly/2FznWrU" alt="" class="foto">
</div>
<div class="container-foto">
<img src="https://bit.ly/2zd3HLf" alt="" class="foto">
</div>
</div>
</div>
</div>
</div>
		
								
			<!-- /row -->
			<div class="container margin_60_35">
			<div class="main_title_3">
				<span></span>
				<h2>Pilihan Rekomendasi</h2>
				<a href="{{'seeall'}}">Lihat Selengkapnya</a>
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-3">
					<a href="{{'descco'}}" class="grid_item small">
						<figure>
							<img src="img/infiniti.jpg" alt="" width="400" height="150" >
							<div class="info">
								<h3>Infiniti Office</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="{{'descco'}}" class="grid_item small">
						<figure>
							<img src="img/vantage.jpg" alt="" width="400" height="150">
							<div class="info">
								<h3>Vantage Office</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="{{'descco'}}" class="grid_item small">
						<figure>
							<img src="img/samudra.jpg" alt=""  width="400" height="150">
							<div class="info">
								<h3>Samudra Office</h3>
							</div>
						</figure>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="{{'booking'}}" class="grid_item small">
						<figure>
							<img src="img/soho.jpg" alt="" width="400" height="150">
							<div class="info">
								<h3>Sohonesia Office</h3>
							</div>
						</figure>
					</a>
				</div>
			</div>
								
							</section>
							<!-- /section -->
						
							<section id="reviews">
								<h2>Ulasan</h2>
								<div class="reviews-container add_bottom_30">
									<div class="row">
										<div class="col-lg-3">
											<div id="review_summary">
												<strong>8.5</strong>
												<em>Superb</em>
												<small>Berdasarkan 4 ulasan</small>
											</div>
										</div>
										<div class="col-lg-9">
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>5 bintang</strong></small></div>
											</div>
											<!-- /row -->
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>4 bintang 	</strong></small></div>
											</div>
											<!-- /row -->
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>3 bintang</strong></small></div>
											</div>
											<!-- /row -->
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>2 bintang</strong></small></div>
											</div>
											<!-- /row -->
											<div class="row">
												<div class="col-lg-10 col-9">
													<div class="progress">
														<div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
												<div class="col-lg-2 col-3"><small><strong>1 bintang</strong></small></div>
											</div>
											<!-- /row -->
										</div>
									</div>
									<!-- /row -->
								</div>
	
								<div class="reviews-container">
	
									<div class="review-box clearfix">
										<figure class="rev-thumb"><img src="img/avatar1.jpg" alt="">
										</figure>
										<div class="rev-content">
											<div class="rating">
												<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
											</div>
											<div class="rev-info">
												Admin – April 03, 2016:
											</div>
											<div class="rev-text">
												<p>
													Terserah apa aja
												</p>
											</div>
										</div>
									</div>
									<!-- /review-box -->
									<div class="review-box clearfix">
										<figure class="rev-thumb"><img src="img/avatar2.jpg" alt="">
										</figure>
										<div class="rev-content">
											<div class="rating">
												<i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
											</div>
											<div class="rev-info">
												Ahsan – April 01, 2016:
											</div>
											<div class="rev-text">
												<p>
													Isi sendiri aja ya
												</p>
											</div>
										</div>
									</div>
									<!-- /review-box -->
									<div class="review-box clearfix">
										<figure class="rev-thumb"><img src="img/avatar3.jpg" alt="">
										</figure>
										<div class="rev-content">
											<div class="rating">
												<i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
											</div>
											<div class="rev-info">
												Sara – March 31, 2016:
											</div>
											<div class="rev-text">
												<p>
													Ini isinya komentar
												</p>
											</div>
										</div>
									</div>
									<!-- /review-box -->
								</div>
								<!-- /review-container -->
							</section>
							<!-- /section -->
							<hr>
	
								<div class="add-review">
									<h5>Tinggalkan Komentar</h5>
									<form>
										<div class="row">
											<div class="form-group col-md-6">
												<label>Nama Lengkap *</label>
												<input type="text" name="name_review" id="name_review" placeholder="" class="form-control">
											</div>
											<div class="form-group col-md-6">
												<label>Email *</label>
												<input type="email" name="email_review" id="email_review" class="form-control">
											</div>
											<div class="form-group col-md-6">
												<label>Nilai </label>
												<div class="custom-select-form">
												<select name="rating_review" id="rating_review" class="wide">
													<option value="1">1 (terendah)</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5" selected>5 (medium)</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10 (tertinggi)</option>
												</select>
												</div>	
											</div>
											<div class="form-group col-md-12">
												<label>Komentar Anda</label>
												<textarea name="review_text" id="review_text" class="form-control" style="height:130px;"></textarea>
											</div>
											<div class="form-group col-md-12 add_top_20 add_bottom_30">
												<input type="submit" value="Kirim" class="btn_1" id="submit-review">
											</div>
										</div>
									</form>
								</div>
						</div>
						<!-- /col -->
						<aside class="col-lg-4" id="sidebar">
							<div class="box_detail booking">
								<div class="price">
									<h5 class="d-inline">Reservasi yuk!</h5>
									<div class="score"><span>Baik<em>350 Ulasan</em></span><strong>7.0</strong></div>
								</div>
	
								<div class="form-group" id="input-dates">
									<input class="form-control" type="text" name="dates" placeholder="Tanggal">
									<i class="icon_calendar"></i>
								</div>
	
								<div class="panel-dropdown">
									<a href="#">Tamu <span class="qtyTotal">1</span></a>
									<div class="panel-dropdown-content right">
										<div class="qtyButtons">
											<label>Dewasa</label>
											<input type="text" name="qtyInput" value="1">
										</div>
										<div class="qtyButtons">
											<label>Anak-anak</label>
											<input type="text" name="qtyInput" value="0">
										</div>
									</div>
								</div>
	
								<div class="form-group clearfix">
									<div class="custom-select-form">
										<select class="wide">
											<option>Waktu</option>	
											<option>Siang</option>
											<option>Malam</option>
										</select>
									</div>
								</div>

								<div class="form-group clearfix">
									<div class="custom-select-form">
										<select class="wide">
											<option>Kabupaten/Kota</option>	
											<option>Kota Surabaya</option>
											<option>Kota Malang</option>
											<option>Kota Jakarta</option>
											<option >Kota Bandung</option>
										</select>
									</div>
								</div>

								<div class="wrapper">
							<a class="button" href="#">Bayar!</a>
						</div> 

						<!-- Filter: https://css-tricks.com/gooey-effect/ -->
						<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
							<defs>
								<filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
									<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
									<feComposite in="SourceGraphic" in2="goo" operator="atop"/>
								</filter>
							</defs>
						</svg>
								<!-- <a href="checkout.html" class=" add_top_30 btn_1 full-width purchase">Purchase</a>
								<a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Add to wishlist</a>
								<div class="text-center"><small>No money charged in this step</small></div> -->
							</div>
							<ul class="share-buttons">
								<li><a class="fb-share" href="#0"><i class="social_facebook"></i> Bagikan</a></li>
								<li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
								<li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Bagikan</a></li>
							</ul>
						</aside>
						
							</div>
							
					</div>
					
					<!-- /row -->
			</div>
			<!-- /container -->
			
		</main>
		<!--/main-->
</body>
</html>
@stop