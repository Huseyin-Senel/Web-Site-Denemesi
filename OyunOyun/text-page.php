<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>OyunOyun | Hakkımızda</title>
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
						<a href="cart.php" class="cart"><i class="icon-cart"></i> 0  Sepetim</a>
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
							<a href="#">Ev</a>
							<span>Hakkımızda</span>
						</div>
					</div>
				</div> <!-- .container -->
			</div> <!-- .site-header -->
			<main class="main-content">
				<div class="container">
					<div class="page">
						
						<h2>Oyunlara Anında Erişin</h2>
						<p>AAA oyunlardan bağımsız yapımcı oyunlarına kadar 30.000 kadar oyuna ev sahipliği yapıyoruz. Özel indirimlerin, otomatik güncellemelerin ve diğer özelliklerin tadını çıkarın.<a href="index.php"> mağzaya göz atın </a>hızlı gönderim sayesinde 1 saat içinde ürün anahtarı E-posta adresinize gönderilir, keyfini çıkarın. Aldığınız bütün oyunlara anında erişim kolaylığı garantisi veriyoruz.</p>

						<h2>Kolay Satın Alım</h2>
						<p>Mağazamızda desteklenen 30.000'den fazla oyun ve 100'den fazla ödeme yöntemiyle ödemelerinizi istediğiniz şekilde yapabilirsiniz. Ayrıca mağzamıza özel indirimler sayesinde istediğiniz oyunu çok ucuza bulabilirsiniz. Dijital olarak anında satın alın.</p>
						<ol>
							<li>Doğrulanmış ürün anahtarları ve güvenli E-posta.</li>
							<li>Dünyanın her yerine açık sipariş.</li>
							<li>Hızlı gönderim, 1 saat içinde Elektronik olarak iletilir.</li>
							<li>Acil destek sistemi, anında geri dönüş.</li>
						</ol>

						<div class="row">
							<div class="col-md-3">
								<div class="feature">
									<div class="feature-icon">
										<i class="icon-box-check"></i>
									</div>
									<h3 class="feature-title">Güvenli İletim</h3>
									<p>1 saat içinde elektronik posta ile güvenli gönderim.</p>
								</div> <!-- .feature -->
							</div> <!-- .column -->
							<div class="col-md-3">
								<div class="feature">
									<div class="feature-icon">
										<i class="icon-plane-globe"></i>
									</div>
									<h3 class="feature-title">Dünya Çapında</h3>
									<p>Dünyanın her yerine elektronik posta ile kolay gönderim.</p>
								</div> <!-- .feature -->
							</div> <!-- .column -->
							<div class="col-md-3">
								<div class="feature">
									<div class="feature-icon">
										<i class="icon-car"></i>
									</div>
									<h3 class="feature-title">Hızlı Teslimat</h3>
									<p>1 saat içinde kesin gönderim ve iade garantisi</p>
								</div> <!-- .feature -->
							</div> <!-- .column -->
							<div class="col-md-3">
								<div class="feature">
									<div class="feature-icon">
										<i class="icon-customer-service"></i>
									</div>
									<h3 class="feature-title">7/24 Destek</h3>
									<p>Herhangi bir sorun olduğunda telefon ve E-posta ile anında 7/24 destek.</p>
								</div> <!-- .feature -->
							</div> <!-- .column -->
						</div> <!-- .row -->

						<h2>7/24 Destek</h2>
						<p>Herhangi bir sorununuz olursa anında mail ve telefon ile dönüş, hızlı çözüm, anında iade ve geri bildirim.Eğer ürünümüzden memnun kalmazsanız koşulsuz şartsız iade garantisi</p>
						
					</div>
				</div> <!-- .container -->
			</main> <!-- .main-content -->

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