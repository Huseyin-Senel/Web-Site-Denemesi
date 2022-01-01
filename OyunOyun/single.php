<?php
session_start();

		$index1 =0;
		if (isset($_GET['index'])) $index1=$_GET['index']; 


		include_once 'database.php';

$images=array();
$images3=array();
$images5=array();
$images6=array();
$images7=array();
$images8=array();
$images9=array();
$images10=array();

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
$img = mysqli_query($link, "SELECT resim1 FROM games ");
	while ($row1 = mysqli_fetch_array($img)) {     
		
		$images[$index]=$row1['resim1'];
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
$img3 = mysqli_query($link, "SELECT resim3 FROM games ");
	while ($row4 = mysqli_fetch_array($img3)) {     		
		$images3[$index]=$row4['resim3'];
      	$index++;
      }

$index=0;
$img5 = mysqli_query($link, "SELECT resim5 FROM games ");
	while ($row5 = mysqli_fetch_array($img5)) {     		
		$images5[$index]=$row5['resim5'];
      	$index++;
      }

$index=0;
$img6 = mysqli_query($link, "SELECT resim6 FROM games ");
	while ($row6 = mysqli_fetch_array($img6)) {     		
		$images6[$index]=$row6['resim6'];
      	$index++;
      }

$index=0;
$img7 = mysqli_query($link, "SELECT resim7 FROM games ");
	while ($row7 = mysqli_fetch_array($img7)) {     		
		$images7[$index]=$row7['resim7'];
      	$index++;
      }

$index=0;
$img8 = mysqli_query($link, "SELECT resim8 FROM games ");
	while ($row8 = mysqli_fetch_array($img8)) {     		
		$images8[$index]=$row8['resim8'];
      	$index++;
      }

$index=0;
$img9 = mysqli_query($link, "SELECT resim9 FROM games ");
	while ($row9 = mysqli_fetch_array($img9)) {     		
		$images9[$index]=$row9['resim9'];
      	$index++;
      }

$index=0;
$img10 = mysqli_query($link, "SELECT resim10 FROM games ");
	while ($row10 = mysqli_fetch_array($img10)) {     		
		$images10[$index]=$row10['resim10'];
      	$index++;
      }


//session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>OyunOyun | <?php echo $isimler[$index1]; ?></title>
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
							<a href="index.php">Ev</a>
							<a href="products.php">Tüm Oyunlar</a>
							<span><?php echo $isimler[$index1]; ?></span>
						</div>
					</div>
				</div> <!-- .container -->
			</div> <!-- .site-header -->
			
			<main class="main-content">
				<div class="container">
					<div class="page">
						
						<div class="entry-content">
							<div class="row">
								<div class="col-sm-6 col-md-4">
									<div class="product-images">
										<figure class="large-image">
											<a href="dummy/<?php echo $images3[$index1]; ?>"><img src="dummy/<?php echo $images[$index1]; ?>" alt=""></a>
										</figure>
										<div class="thumbnails">
											<a href="dummy/<?php echo $images5[$index1]; ?>"><img src="dummy/<?php echo $images6[$index1]; ?>" alt=""></a>
											<a href="dummy/<?php echo $images7[$index1]; ?>"><img src="dummy/<?php echo $images8[$index1]; ?>" alt=""></a>
											<a href="dummy/<?php echo $images9[$index1]; ?>"><img src="dummy/<?php echo $images10[$index1]; ?>" alt=""></a>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-8">
									<h2 class="entry-title"><?php echo $isimler[$index1]; ?></h2>
									<small class="price"><?php echo $fiyatlar[$index1]; ?> ₺</small>

									<p><?php echo substr($aciklamalar[$index1],0,2000); ?></P>

									<div class="addtocart-bar">
										<form action="cart.php">
											<label for="#">Adet</label>
											<select name="#">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
											</select>
											<input type="submit" value="Sepete Ekle">
										</form>

										<div class="social-links square">
											<strong>Paylaş</strong>
											<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
											<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
											<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
											<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<section>
							<header>
								<h2 class="section-title">Benzer Oyunlar</h2>
							</header>
							<div class="product-list">
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=1"><img src="dummy/<?php echo $images[1]; ?>" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="#"><?php echo $isimler[1]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[1]; ?> ₺</small>
										<p><?php echo substr($aciklamalar[1],0,86); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php?index=1" class="button muted">Detayları Oku</a>
									</div>
								</div> <!-- .product -->
							
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=2"><img src="dummy/<?php echo $images[2]; ?>" alt="Game 3"></a>
										</div>
										<h3 class="product-title"><a href="#"><?php echo $isimler[2]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[2]; ?> ₺</small>
										<p><?php echo substr($aciklamalar[2],0,86); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php?index=2" class="button muted">Detayları Oku</a>
									</div>
								</div> <!-- .product -->
							
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=3"><img src="dummy/<?php echo $images[3]; ?>" alt="Game 4"></a>
										</div>
										<h3 class="product-title"><a href="#"><?php echo $isimler[3]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[3]; ?> ₺</small>
										<p><?php echo substr($aciklamalar[3],0,86); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php?index=3" class="button muted">Detayları Oku</a>
									</div>
								</div> <!-- .product -->
							
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=4"><img src="dummy/<?php echo $images[4]; ?>" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="#"><?php echo $isimler[4]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[4]; ?> ₺</small>
										<p><?php echo substr($aciklamalar[4],0,86); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php?index=4" class="button muted">Detayları Oku</a>
									</div>
								</div> <!-- .product -->
								
							</div> <!-- .product-list --></section>

						
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