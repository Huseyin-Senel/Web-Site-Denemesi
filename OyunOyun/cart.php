<?php
include_once 'database.php';

$images=array();
$slides=array();
$aciklamalar=array();
$fiyatlar=array();
$isimler=array();
$index=0;



$aciklama = mysqli_query($link, "SELECT aciklama FROM games ");
	while ($row = mysqli_fetch_array($aciklama)) {     
		
		$aciklamalar[$index]=$row['aciklama'];
      	$index++;
      }

$index=0;
$img = mysqli_query($link, "SELECT resim2 FROM games ");
	while ($row1 = mysqli_fetch_array($img)) {     
		
		$images[$index]=$row1['resim2'];
      	//echo "<img src='dummy/".$row['resim1']."' >"; 
      	//echo '<pre>'; print_r($row); echo '</pre>';
      	$index++;
      }

$index=0;
$isim = mysqli_query($link, "SELECT isim FROM games ");
	while ($row2 = mysqli_fetch_array($isim)) {     
		
		$isimler[$index]=$row2['isim'];
      	$index++;
      }

$index=0;
$fiyat = mysqli_query($link, "SELECT fiyat FROM games ");
	while ($row3 = mysqli_fetch_array($fiyat)) {     
		
		$fiyatlar[$index]=$row3['fiyat'];
      	$index++;
      }

$index=0;
$slide = mysqli_query($link, "SELECT resim4 FROM games ");
	while ($row4 = mysqli_fetch_array($slide)) {     
		
		$slides[$index]=$row4['resim4'];
      	//echo "<img src='dummy/".$row['resim1']."' >"; 
      	//echo '<pre>'; print_r($row); echo '</pre>';
      	$index++;
      }

//echo '<pre>'; print_r($images); echo '</pre>';
//echo '<pre>'; print_r($aciklamalar); echo '</pre>';
//echo '<pre>'; print_r($isimler); echo '</pre>';
//echo '<pre>'; print_r($fiyatlar); echo '</pre>';
      //echo substr($aciklamalar[0],0,86);//kutu
      //echo substr($aciklamalar[0],0,292);//slide//sepet
      //echo substr($aciklamalar[0],0,1337);//single
      //echo $isimler[0];
      //".$slides[0]."

      session_start();
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>OyunOyun | Sepet</title>
		<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />


		<link href="http://fonts.googleapis.com/css?family=Roboto:400,700|" rel="stylesheet" type="text/css">
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
						<a href="index.php">Çıkış Yap <small>(<?php echo $_SESSION['username']?>)</small></a>
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
							<a href="index-logged.php">Ev</a>
							<span>Sepet</span>
						</div>
					</div>
				</div> <!-- .container -->
			</div> <!-- .site-header -->
			<main class="main-content">
				<div class="container">
					<div class="page">
						
						<table class="cart">
							<thead>
								<tr>
									<th class="product-name">Oyun ismi</th>
									<th class="product-price">Fiyat</th>
									<th class="product-qty">Adet</th>
									<th class="product-total">Toplam</th>
									<th class="action"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="product-name">
										<div class="product-thumbnail">
											<img src="dummy/<?php echo $images[0]; ?>" alt="">
										</div>
										<div class="product-detail">
											<h3 class="product-title"><?php echo $isimler[0]; ?></h3>
											<p><?php echo substr($aciklamalar[0],0,292); ?>...</p>
										</div>
									</td>
									<td class="product-price"><?php echo $fiyatlar[0]; ?> ₺</td>
									<td class="product-qty">
										<select name="#">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
									</td>
									<td class="product-total"><?php echo $fiyatlar[0]; ?>₺</td>
									<td class="action"><a href="#"><i class="fa fa-times"></i></a></td>
								</tr>
								<tr>
									<td class="product-name">
										<div class="product-thumbnail">
											<img src="dummy/<?php echo $images[1]; ?>" alt="">
										</div>
										<div class="product-detail">
											<h3 class="product-title"><?php echo $isimler[1]; ?></h3>
											<p><?php echo substr($aciklamalar[1],0,292); ?>...</p>
										</div>
									</td>
									<td class="product-price"><?php echo $fiyatlar[1]; ?> ₺</td>
									<td class="product-qty">
										<select name="#">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
									</td>
									<td class="product-total"><?php echo $fiyatlar[1]; ?>₺</td>
									<td class="action"><a href="#"><i class="fa fa-times"></i></a></td>
								</tr>
								<tr>
									<td class="product-name">
										<div class="product-thumbnail">
											<img src="dummy/<?php echo $images[2]; ?>" alt="">
										</div>
										<div class="product-detail">
											<h3 class="product-title"><?php echo $isimler[2]; ?></h3>
											<p><?php echo substr($aciklamalar[2],0,292); ?>...</p>
										</div>
									</td>
									<td class="product-price"><?php echo $fiyatlar[2]; ?>₺</td>
									<td class="product-qty">
										<select name="#">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select>
									</td>
									<td class="product-total"><?php echo $fiyatlar[2]; ?>₺</td>
									<td class="action"><a href="#"><i class="fa fa-times"></i></a></td>
								</tr>
							</tbody>
						</table> <!-- .cart -->

						<div class="cart-total">
							<p><strong>Ara toplam:</strong><?php echo floatval($fiyatlar[1])+floatval($fiyatlar[0])+floatval($fiyatlar[2]); ?>₺</p>
							<p><strong>Kargo:</strong> Ücretsiz</p>
							<p class="total"><strong>Toplam</strong><span class="num"><?php echo floatval($fiyatlar[1])+floatval($fiyatlar[0])+floatval($fiyatlar[2]); ?>₺</span></p>
							<p>
								<a href="index-logged.php" class="button muted">Alışverişe devam et</a>
								<a href="pay.php" class="button">Bitir ve ödemeye geç</a>
							</p>
						</div> <!-- .cart-total -->
						
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