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
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>OyunOyun | Oyunlar</title>
		<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />


		<link href="http://fonts.googleapis.com/css?family=Roboto:100,400,700|" rel="stylesheet" type="text/css">
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
							<h1 class="site-title">Oyun Oyun</h1>
							<small class="site-description">Daha ucuzu yok</small>
						</div>
					</a> <!-- #branding -->

					<div class="right-section pull-right">
						<a href="cart.php" class="cart"><i class="icon-cart"></i> 0  Sepetim</a>
						<a href="#">Hesab??m</a>
						<a href="index.php">????k???? Yap<small>(<?php echo $_SESSION['username']?>)</small></a>
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
							<span>T??m Oyunlar</span>
						</div>
					</div>

				</div> <!-- .container -->
			</div> <!-- .site-header -->
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="filter-bar">
							<div class="filter">
								<span>
									<label>S??rala:</label>
									<select name="#">
										<option value="#">Pop??lerlik</option>
										<option value="#">Y??ksek Puan</option>
										<option value="#">D??????kten Y??kse??e</option>
										<option value="#">Y??ksekten D????????e</option>
									</select>
								</span>
								<span>
									<label>T??r</label>
									<select name="#">
										<option value="#">T??m??</option>
										<option value="#">Aksiyon</option>
										<option value="#">Yar????</option>
										<option value="#">Strateji</option>
										<option value="#">Macera</option>
										<option value="#">Rol Yapma</option>
										<option value="#">Platform</option>
										<option value="#">Sava??</option>
									</select>
								</span>
								<!--<span>
									<label>G??ster:</label>
									<select name="#">
										<option value="#">8</option>
										<option value="#">16</option>
										<option value="#">24</option>
									</select>
								</span> -->
							</div> <!-- .filter -->

							<div class="pagination">
								<a href="#" class="page-number"><i class="fa fa-angle-left"></i></a>
								<span class="page-number current">1</span>
								<!--<span><a href="#" class="page-number">2</a>
								<a href="#" class="page-number">3</a>
								<a href="#" class="page-number">...</a>
								<a href="#" class="page-number">12</a>-->
								<a href="#" class="page-number"><i class="fa fa-angle-right"></i></a>
							</div> <!-- .pagination -->
						</div> <!-- .filter-bar -->
						
						<div class="product-list">
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=0"><img src="dummy/<?php echo $images[0]; ?>" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="#"><?php echo $isimler[0]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[0]; ?> ???</small>
										<p><?php echo substr($aciklamalar[0],0,55); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php?index=0" class="button muted">Detaylar?? Oku</a>
									</div>
								</div> <!-- .product -->

								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=1"><img src="dummy/<?php echo $images[1]; ?>" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="#"><?php echo $isimler[1]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[1]; ?> ???</small>
										<p><?php echo substr($aciklamalar[1],0,55); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php?index=1" class="button muted">Detaylar?? Oku</a>
									</div>
								</div> <!-- .product -->

								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=2"><img src="dummy/<?php echo $images[2]; ?>" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="#"><?php echo $isimler[2]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[2]; ?> ???</small>
										<p><?php echo substr($aciklamalar[2],0,55); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php?index=2" class="button muted">Detaylar?? Oku</a>
									</div>
								</div> <!-- .product -->

								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=3"><img src="dummy/<?php echo $images[3]; ?>" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="#"><?php echo $isimler[3]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[3]; ?> ???</small>
										<p><?php echo substr($aciklamalar[3],0,55); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php?index=3" class="button muted">Detaylar?? Oku</a>
									</div>
								</div> <!-- .product -->
								
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=4"><img src="dummy/<?php echo $images[4]; ?>" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="#"><?php echo $isimler[4]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[4]; ?> ???</small>
										<small class="Lowprice">%10</small>
										<p><?php echo substr($aciklamalar[4],0,55); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php?index=4" class="button muted">Detaylar?? Oku</a>
									</div>
								</div> <!-- .product -->
								
								
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=5"><img src="dummy/<?php echo $images[5]; ?>" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="#"><?php echo $isimler[5]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[5]; ?> ???</small>
										<small class="Lowprice">%8</small>
										<p><?php echo substr($aciklamalar[5],0,55); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php?index=5" class="button muted">Detaylar?? Oku</a>
									</div>
								</div> <!-- .product -->
								
								
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=6"><img src="dummy/<?php echo $images[6]; ?>" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="#"><?php echo $isimler[6]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[6]; ?> ???</small>
										<small class="Lowprice">%15</small>
										<p><?php echo substr($aciklamalar[6],0,55); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php?index=6" class="button muted">Detaylar?? Oku</a>
									</div>
								</div> <!-- .product -->
								
								
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.php?index=7"><img src="dummy/<?php echo $images[7]; ?>" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="#"><?php echo $isimler[7]; ?></a></h3>
										<small class="price"><?php echo $fiyatlar[7]; ?> ???</small>
										<small class="Lowprice">%10</small>
										<p><?php echo substr($aciklamalar[7],0,55); ?>...</p>
										<a href="cart.php" class="button">Sepete ekle</a>
										<a href="single.php?index=7" class="button muted">Detaylar?? Oku</a>
									</div>
								</div> <!-- .product -->
								
						</div> <!-- .product-list -->

						<div class="pagination-bar">
							<div class="pagination">
								<a href="#" class="page-number"><i class="fa fa-angle-left"></i></a>
								<span class="page-number current">1</span>
								<!--<a href="#" class="page-number">2</a>
								<a href="#" class="page-number">3</a>
								<a href="#" class="page-number">...</a>
								<a href="#" class="page-number">12</a>-->
								<a href="#" class="page-number"><i class="fa fa-angle-right"></i></a>
							</div> <!-- .pagination -->
						</div>
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
									<li><a href="#">Site Haritas??</a></li>
									<li><a href="text-page.php">Hakk??m??zda</a></li>
									<li><a href="#">SSS</a></li>
									<li><a href="#">Gizlilik Politikas??</a></li>
									<li><a href="#">??leti??im</a></li>
								</ul>
							</div> <!-- .widget -->
						</div> <!-- column -->
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">T??ketici Hizmetleri</h3>
								<ul class="no-bullet">
									<li><a href="#">G??venlik</a></li>
									<li><a href="#">Shipping &amp; D??n????ler</a></li>
									<li><a href="#">Shipping</a></li>
									<li><a href="#">Sipari?? &amp; Returns</a></li>
									<li><a href="#">Grup Sat??????</a></li>
								</ul>
							</div> <!-- .widget -->
						</div> <!-- column -->
						<div class="col-md-2">
							<div class="widget">
								<h3 class="widget-title">Hesab??m</h3>
								<ul class="no-bullet">
									<li><a href="#">Giri?? Yap/Kay??t Ol</a></li>
									<li><a href="#">Ayarlar</a></li>
									<li><a href="#">Sepet</a></li>
									<li><a href="#">Sipari?? Takibi</a></li>
									<li><a href="#">????k???? Yap</a></li>
								</ul>
							</div> <!-- .widget -->
						</div> <!-- column -->
						<div class="col-md-6">
							<div class="widget">
								<h3 class="widget-title">B??ltenimize Kat??l??n</h3>
								<form action="#" class="newsletter-form">
									<input type="text" placeholder="Emailinizi girin...">
									<input type="submit" value="Kat??l">
								</form>
							</div> <!-- .widget -->
						</div> <!-- column -->
					</div><!-- .row -->

					<div class="colophon">
						<div class="copy">Copyright 2014 OyunOyun. Designed by H??seyin ??enel. All rights reserved. :)</div>
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
					<h2 class="section-title">Giri?? Yap</h2>
					<form action="#">
						<input type="text" placeholder="Kullan??c?? Ad??...">
						<input type="password" placeholder="??ifre...">
						<input type="submit" value="Giri?? Yap">
					</form>
				</div> <!-- .column -->
				<div class="col-md-6">
					<h2 class="section-title">Hesap Olu??tur</h2>
					<form action="#">
						<input type="text" placeholder="Kullan??c?? Ad??...">
						<input type="text" placeholder="Email Adresi...">
						<input type="submit" value="Kay??t Ol">
					</form>
				</div> <!-- .column -->
			</div> <!-- .row -->
		</div> <!-- .auth-popup -->
		
	</body>

</html>