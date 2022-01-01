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
      ob_start();
?>

<!DOCTYPE php>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>OyunOyun</title>
		<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />


		<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">

		<link rel="stylesheet" href="style.css">
		

	</head>


	<body class="slider-collapse">

		
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
						<a href="#" class="login-button">Giriş/Kayıt Ol</a>
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
				</div> <!-- .container -->
			</div> <!-- .site-header -->

			<div class="home-slider">
				<ul class="slides">
					<li data-bg-image="dummy/<?php echo $slides[0]; ?>" >
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title"><?php echo $isimler[0]; ?></h2>
								<small class="slide-subtitle"><?php echo $fiyatlar[0]; ?> ₺</small>
								
								<p class="slide-text"><?php echo substr($aciklamalar[0],0,292); ?>...</p>
								
								<a href="cart.php" class="button">Sepete ekle</a>								
							</div>
							
							<a href="single.php?index=0"><img src="dummy/<?php echo $images[0]; ?>" class="slide-image"></a>
						</div>
					</li>
					<li data-bg-image="dummy/<?php echo $slides[1]; ?>">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title"><?php echo $isimler[1]; ?></h2>
								<small class="slide-subtitle"><?php echo $fiyatlar[1]; ?> ₺</small>
								
								<p class="slide-text"><?php echo substr($aciklamalar[1],0,292); ?>...</p>
								
								<a href="cart.php" class="button">Sepete ekle</a>
							</div>

							<a href="single.php?index=1"><img src="dummy/<?php echo $images[1]; ?>" class="slide-image"></a>
						</div>
					</li>
					<li data-bg-image="dummy/<?php echo $slides[2]; ?>">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title"><?php echo $isimler[2]; ?></h2>
								<small class="slide-subtitle"><?php echo $fiyatlar[2]; ?> ₺</small>
								
								<p class="slide-text"><?php echo substr($aciklamalar[2],0,292); ?>...</p>
								
								<a href="cart.php" class="button">Sepete ekle</a>
							</div>

							<a href="single.php?index=2"><img src="dummy/<?php echo $images[2]; ?>" class="slide-image"></a>
						</div>
					</li>
				</ul> <!-- .slides -->
			</div> <!-- .home-slider -->

			<main class="main-content">
				<div class="container">
					<div class="page">
						<section>
							<header>
								<h2 class="section-title">Yeni Oyunlar</h2>
								<a href="#" class="all">Tümüne Bak</a>
							</header>

							<div class="product-list">
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=2"><img src="dummy/<?php echo $images[2]; ?>" alt="Game 1"></a>							
										</div>
										<h3 class="product-title"><a href="single.php?index=2"><?php echo $isimler[2]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[2]; ?> ₺</small>
										<p><?php echo substr($aciklamalar[2],0,86); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php" class="button muted">Detayları Oku</a>
									</div>
								</div> <!-- .product -->

								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=3"><img src="dummy/<?php echo $images[3]; ?>" alt="Game 2"></a>
										</div>
										<h3 class="product-title"><a href="single.php?index=3"><?php echo $isimler[3]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[3]; ?> ₺</small>
										<p><?php echo substr($aciklamalar[3],0,86); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php" class="button muted">Detayları Oku</a>
									</div>
								</div> <!-- .product -->

								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=4"><img src="dummy/<?php echo $images[4]; ?>" alt="Game 2"></a>
										</div>
										<h3 class="product-title"><a href="single.php?index=4"><?php echo $isimler[4]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[4]; ?> ₺</small>
										<p><?php echo substr($aciklamalar[4],0,86); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php" class="button muted">Detayları Oku</a>
									</div>
								</div> <!-- .product -->

								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=5"><img src="dummy/<?php echo $images[5]; ?>" alt="Game 2"></a>
										</div>
										<h3 class="product-title"><a href="single.php?index=5"><?php echo $isimler[5]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[5]; ?> ₺</small>
										<p><?php echo substr($aciklamalar[5],0,86); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php" class="button muted">Detayları Oku</a>
									</div>
								</div> <!-- .product -->

							</div> <!-- .product-list -->

						</section>

						<section>
							<header>
								<h2 class="section-title">Promosyon</h2>
								<a href="#" class="all">Tümüne Bak</a>
							</header>

							<div class="product-list">
								
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=6"><img src="dummy/<?php echo $images[6]; ?>" alt="Game 2"></a>
										</div>
										<h3 class="product-title"><a href="single.php?index=6"><?php echo $isimler[6]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[6]; ?> ₺</small>
										<small class="Lowprice">%10</small>
										<p><?php echo substr($aciklamalar[6],0,86); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php" class="button muted">Detayları Oku</a>
									</div>
								</div> <!-- .product -->
								
								
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=7"><img src="dummy/<?php echo $images[7]; ?>" alt="Game 2"></a>
										</div>
										<h3 class="product-title"><a href="single.php?index=7"><?php echo $isimler[7]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[7]; ?> ₺</small>
										<small class="Lowprice">%8</small>
										<p><?php echo substr($aciklamalar[7],0,86); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php" class="button muted">Detayları Oku</a>
									</div>
								</div> <!-- .product -->
								
								
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=8"><img src="dummy/<?php echo $images[8]; ?>" alt="Game 2"></a>
										</div>
										<h3 class="product-title"><a href="single.php?index=8"><?php echo $isimler[8]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[8]; ?> ₺</small>
										<small class="Lowprice">%15</small>
										<p><?php echo substr($aciklamalar[8],0,86); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php" class="button muted">Detayları Oku</a>
									</div>
								</div> <!-- .product -->
								
								
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=9"><img src="dummy/<?php echo $images[9]; ?>" alt="Game 2"></a>
										</div>
										<h3 class="product-title"><a href="single.php?index=9"><?php echo $isimler[9]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[9]; ?> ₺</small>
										<small class="Lowprice">%10</small>
										<p><?php echo substr($aciklamalar[9],0,86); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php" class="button muted">Detayları Oku</a>
									</div>
								</div> <!-- .product -->
								
							</div> <!-- .product-list -->

						</section>
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
			<a href="index-logged.php" class="close"><i class="fa fa-times"></i></a><!-- kapatınca atacak yer -->
			<div class="row">
				<div class="col-md-6">
					<h2 class="section-title">Giriş Yap</h2>
					<form method="post" action="">   <!-- index-logged.html -->
						<input type="text" id="username1" name="username1" placeholder="Kullanıcı Adı...">
						<input type="password" id="password1" name="password1" placeholder="Şifre...">
						<input type="submit" id="submit1" name="submit1" value="Giriş Yap">
					</form>
				</div> <!-- .column -->
				<div class="col-md-6">
					<h2 class="section-title">Hesap Oluştur</h2>
					<form method="post" action=""> <!-- index-logged.html -->
						<input type="text" id="username2" name="username2" placeholder="Kullanıcı Adı...">
						<input type="email" id="email2" name="email2" placeholder="Email Adresi...">
						<input type="password" id="password2" name="password2" placeholder="Şifre...">
						<input type="password" placeholder="Şifre Onay...">
						<input type="submit" id="submit2" name="submit2" value="Kayıt Ol">
					</form>
				</div> <!-- .column -->
			</div> <!-- .row -->
		</div> <!-- .auth-popup -->
		
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>

	</body>




<?php 


include_once 'database.php';

if(isset($_POST["submit2"]))
{
	$name=$_POST['username2'];
	$password=$_POST['password2'];
	$email=$_POST['email2'];

	$res= mysqli_query($link," SELECT * FROM users WHERE name='$name'");
	$res1=mysqli_num_rows($res);

	if($res1==1)
	{
		echo '<script> window.onload = function()
			{
				alert("Bu isim zaten kullanılıyor, lütfen başka isim giriniz.");
			}</script>';

	}
	else{
		$insert= mysqli_query($link, "INSERT INTO users VALUES ('$name' ,'$password','$email')");

		if($insert)
		{

			echo '<script> window.onload = function()
				{
					alert("Başarıyla kayıt yapıldı, Lütfen giriş yapın");
				}</script>';

		}

	}	
}

session_start();

if(isset($_POST['submit1']))
{
	$name=$_POST['username1'];
	$password=$_POST['password1'];

	$res= mysqli_query($link,"SELECT * FROM users WHERE name='$name' AND password='$password'");
	$res1=mysqli_num_rows($res);

	if($res1==1)
	{
		$_SESSION['username']=$name;
		//echo '<script> window.onload = function()
		//	{
		//		alert("Başarıyla giriş yapıldı.");
				
		//	}</script>';
		header("location:http://localhost/oyunoyun/index-logged.php");			
	}
	else
	{
		echo '<script> window.onload = function()
			{
				alert("Giriş yapılamadı, şifre veya mail hatalı.");
				
			}</script>';
	}
}

?>



</html>

<?php ob_end_flush(); ?>