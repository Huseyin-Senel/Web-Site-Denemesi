<?php session_start(); ?>

<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>OyunOyun | Ödeme</title>
		<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />


		<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">


		<link rel="stylesheet" href="style.css">

	</head>


	<body>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>


		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.php" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">OyunOyun</h1>
							<small class="site-description">Daha ucuzu yok</small>
						</div>
					</a> <!-- #branding -->

					<div class="right-section pull-right">
						<a href="cart.php" class="cart"><i class="icon-cart"></i> 3  Sepetim</a>
						<a href="#">Hesabım</a>
						<a href="#">Çıkış Yap <small>(<?php echo $_SESSION['username']?>)</small></a>
					</div> <!-- .right-section -->

					<div class="main-navigation">
						<button class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item home current-menu-item"><a href="index.php"><i class="icon-home"></i></a></li>
							<li class="menu-item"><a href="products.php">Aksesuarlar</a></li>
							<li class="menu-item"><a href="products.php">Promosyonlar</a></li>
							<li class="menu-item"><a href="products.php">PC</a></li>
							<li class="menu-item"><a href="products.php">Playstation</a></li>
							<li class="menu-item"><a href="products.php">Xbox</a></li>
							<li class="menu-item"><a href="products.php">Wii</a></li>
						</ul> <!-- .menu -->
						<div class="search-form">
							<label><img src="images/icon-search.png"></label>
							<input type="text" placeholder="Ara...">
						</div> <!-- .search-form -->

						<div class="mobile-navigation"></div> <!-- .mobile-navigation -->
					</div> <!-- .main-navigation -->

					<div class="breadcrumbs">
						<div class="container">
							<a href="index.php">Ev</a>
							<a href="cart.php">Sepet</a>
							<span>Ödeme</span>
						</div>
					</div>
				</div> <!-- .container -->
			</div> <!-- .site-header -->


			<main class="main-content">
				<div class="container">
					<div class="page">

						<div class="row11">
  <div class="col-75">
    <div class="container11">
      <form action="index.php">

       
      	<img src="images/success.jpg">

      	<input type="submit" value="Alışverişe devam et" class="btn">
        
      </form>
    </div>
  </div>

</div>

					</div>
				</div>
			</main>


			<div class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Bilgi</h3>
								<ul class="no-bullet">
									<li><a href="#">Site Haritası</a></li>
									<li><a href="text-page.php">Hakkımızda</a></li>
									<li><a href="#">SSS</a></li>
									<li><a href="#">Gizlilik Politikası</a></li>
									<li><a href="#">İletişim</a></li>
								</ul>
							</div> <!-- .widget -->
						</div> <!-- column -->
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Tüketici Hizmetleri</h3>
								<ul class="no-bullet">
									<li><a href="#">Güvenlik</a></li>
									<li><a href="#">Shipping &amp; Dönüşler</a></li>
									<li><a href="#">Shipping</a></li>
									<li><a href="#">Sipariş &amp; Returns</a></li>
									<li><a href="#">Grup Satışı</a></li>
								</ul>
							</div> <!-- .widget -->
						</div> <!-- column -->
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Hesabım</h3>
								<ul class="no-bullet">
									<li><a href="#">Giriş Yap/Kayıt Ol</a></li>
									<li><a href="#">Ayarlar</a></li>
									<li><a href="#">Sepet</a></li>
									<li><a href="#">Sipariş Takibi</a></li>
									<li><a href="#">Çıkış Yap</a></li>
								</ul>
							</div> <!-- .widget -->
						</div> <!-- column -->
						<div class="col-md-6">
							<div class="widget">
								<h3 class="widget-title">Bültenimize Katılın</h3>
								<form action="#" class="newsletter-form">
									<input type="text" placeholder="Emailinizi girin...">
									<input type="submit" value="Katıl">
								</form>
							</div> <!-- .widget -->
						</div> <!-- column -->
					</div><!-- .row -->

					<div class="colophon">
						<div class="copy">Copyright 2014 OyunOyun. Designed by Hüseyin Şenel. All rights reserved. :)</div>
						<div class="social-links square">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</div> <!-- .social-links -->
					</div> <!-- .colophon -->
				</div> <!-- .container -->
			</div> <!-- .site-footer -->

		</div>

		<div class="overlay"></div>

		<div class="auth-popup popup">
			<a href="#" class="close"><i class="fa fa-times"></i></a>
			<div class="row">
				<div class="col-md-6">
					<h2 class="section-title">Giriş Yap</h2>
					<form action="#">
						<input type="text" placeholder="Kullanıcı Adı...">
						<input type="password" placeholder="Şifre...">
						<input type="submit" value="Giriş Yap">
					</form>
				</div> <!-- .column -->
				<div class="col-md-6">
					<h2 class="section-title">Hesap Oluştur</h2>
					<form action="#">
						<input type="text" placeholder="Kullanıcı Adı...">
						<input type="text" placeholder="Email Adresi...">
						<input type="submit" value="Kayıt Ol">
					</form>
				</div> <!-- .column -->
			</div> <!-- .row -->
		</div> <!-- .auth-popup -->

	</body>
</html>