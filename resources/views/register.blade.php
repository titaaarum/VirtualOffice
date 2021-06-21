<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>Daftar Akun Virtual Office</title>

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

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
	
</head>

<body id="register_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="login">
		<aside>
			<figure>
				<a href="index.html"><img src="img/logo_sticky.svg" width="165" height="35" alt="" class="logo_sticky"></a>
			</figure>
			<form autocomplete="off" action="{{url('/index')}}" method="POST">
				<div class="form-group">
					<label>Nama Depan</label>
					<input class="form-control" type="text">
					<i class="ti-user"></i>
				</div>
				<div class="form-group">
					<label>Nama Belakang</label>
					<input class="form-control" type="text">
					<i class="ti-user"></i>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input class="form-control" type="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Kata sandi</label>
					<input class="form-control" type="password" id="password1">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="form-group">
					<label>Konfirmasi Kata Sandi</label>
					<input class="form-control" type="password" id="password2">
					<i class="icon_lock_alt"></i>
				</div>
				<div id="pass-info" class="clearfix"></div>
				<a href="#0" class="btn_1 rounded full-width add_top_30">Daftar Sekarang!</a>
				<div class="text-center add_top_10">Sudah memiliki akun? <strong><a href="login.html">Masuk</a></strong></div>
			</form>
			<div class="copy">© 2019 VirtualOffice</div>
		</aside>
	</div>
	<!-- /login -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
	<script src="js/functions.js"></script>
	<script src="assets/validate.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/pw_strenght.js"></script>
	
	
  
</body>
</html>