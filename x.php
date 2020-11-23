	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>SIG Toko Alat Musik</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">

<body>

			  <header id="header">
			    <div class="container">
			    	<div class="row header-top align-items-center">
			    		<div class="col-lg-4 col-sm-4 menu-top-left">
			    			<span>
			    				BAGUS SANTOSO <br>
								13312268 <br>
			    			</span>
			    		</div>
			    		<div class="col-lg-4 menu-top-middle justify-content-center d-flex">
							<a href="index.php">
								<img class="img-fluid" src="img/logo.png" alt="">	
							</a>			    			
			    		</div>			    	
			    	</div>
			    </div>	
			    	<hr>
			    <div class="container">	
			    	<div class="row align-items-center justify-content-center d-flex">
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="?">Beranda</a></li>
				          <li><a href="#persebaran">Persebaran toko alat musik</a></li>
				          <li><a href="#daftar">daftar toko alat musik</a></li>
				          <li><a href="#cari">cari toko alat musik</a></li>
				          <li><a href="#tentang">Tentang</a></li>		
				          <li><a href="#footer">Contact</a></li>	        
				          <li><a href="login.php">login</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header>
	<?php
		include "detail.php";
	?>

	<a href="#a">ke atas</a>
			<!-- start footer Area -->		
			<footer class="footer-area section-gap" id="footer">
				<div class="container">
					<div class="row justify-content-center">						
						<div class="row text-center">
							<div>
								<h3>Contact Us</h3>
							
								<p class="number">
									0819-0882-9443 <br>
									Bagussantoso69@gmail.com
								</p>
							</div>
						</div>																		
					</div>
					<br>
						<?php include "contact.php"; ?>
					<div class="footer-bottom row">
						<p class="footer-text m-0 col-lg-6">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			Universitas Teknokrat Indonesia 2018 | Bagus Santoso
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
						<div class="footer-social col-lg-6">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->
			<?php if(isset($_GET['id'])){ }else{ ?>
        	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoilQqu_Iz-1B_zzqvbxJB3HC8ScFjZ8E&callback=initMap" async defer></script>
        	<?php } ?>
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>			
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
</body>
</html>