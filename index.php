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
		<title>SIG Toko Distro</title>

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
			<link rel="stylesheet" href="css/owl.carousel.min.css">
    		<link rel="stylesheet" href="asset/css/owl.theme.default.min.css">
    		<link rel="stylesheet" href="asset/css/animate.css">
    		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
		    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

		    <link rel="stylesheet" href="asset/css/animate.css">
		    
		    <link rel="stylesheet" href="asset/css/owl.carousel.min.css">
		    <link rel="stylesheet" href="asset/css/owl.theme.default.min.css">
		    <link rel="stylesheet" href="asset/css/magnific-popup.css">

		    <link rel="stylesheet" href="asset/css/aos.css">

		    <link rel="stylesheet" href="asset/css/ionicons.min.css">

		    <link rel="stylesheet" href="asset/css/bootstrap-datepicker.css">
		    <link rel="stylesheet" href="asset/css/jquery.timepicker.css">

		    
		    <link rel="stylesheet" href="asset/css/flaticon.css">
		    <link rel="stylesheet" href="asset/css/icomoon.css">
		    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		    <script src="https://kit.fontawesome.com/5900d8956d.js" crossorigin="anonymous"></script>

		</head>
		<body>

			  <header id="header">
			    <div class="container">
			    	<div class="row header-top align-items-center">
			    		<div class="col-lg-4 col-sm-4 menu-top-left">
			    			 <span style="font-size: 25px">
			    				
			    			</span>
			    		</div>
			    		<div class="col-lg-4 menu-top-middle justify-content-center d-flex">
							<a href="index.php">
								<img class="img-fluid" src="img/bucek.png" width="300" height="400" >	
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
				          <li><a href="#persebaran">Persebaran Toko Distro</a></li>
				          <li><a href="#daftar">Daftar Toko Distro</a></li>
				          <li><a href="#cari">Cari Toko Distro</a></li>
				          <li><a href="#tentang">Tentang</a></li>		
				          <!--li><a href="#footer">Contact</a></li-->	        
				          <li><a href="login.php">login</a></li>
				            </ul>
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->



			<!-- Start Beranda-->
			<section class="banner-area relative section-gap2" id="banner">
				<div class="overlay overlay-bg"></div>		
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-12 col-md-12">
							<h1 class="text-uppercase">
								 <br>
								<br>

							</h1>
							<p class="text-white text-uppercase pt-33 pb-33">
								
							</p>
						</div>												
					</div>
				</div>
			</section>
			<!-- End Beranda -->

<!-- Start persebaran toko distro -->
			<section class="persebaran-area section-gap" id="persebaran">
				<div class="container">
					<div class="row d-flex">
						<div class="menu-content pb-70 col-lg-12">
							<div class="title">
								
								<?php
								if(isset($_GET['id']) || isset($_POST['toko'])){
									//if($_GET['id']){
										include "detail.php";
									//}
								}else{ ?>
								<h1 class="mb-10">Persebaran Toko Distro</h1>
								<p>di Kota Bandar Lampung</p><?php
									include "peta.php"; 
								} 
								?>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="table-wrap col-lg-12">
												
						</div>
					</div>
				</div>	
			</section>
			<!-- End persebaran toko alat musik -->

			<!-- Start daftar toko alat musik -->

			<section class="daftar-area section-gap" id="daftar">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Daftar Toko Distro</h1>
								<p>di Kota Bandar Lampung</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="table-wrap col-lg-12">
							<table class="daftar-table table table-bordered">
								  <thead class="thead-light">
								    <tr>
								      <th class="head" scope="col">Nama Toko</th>
								      <!-- <th class="head" scope="col">Rating</th>	-->							   
								      <th class="head" scope="col">Alamat</th>
								      <th class="head" scope="col">No. Telp</th>
								      <th class="head" scope="col">Buka</th>
								      <th class="head" scope="col">Tutup</th>
								      <!--th class="head" scope="col">Tipe</th-->
								      <th class="head" scope="col">Lihat</th>
								      
								    </tr>
								  </thead>
								  <tbody>
								  <?php
								  include "admin/action/koneksi.php";
								  $sql = mysqli_query($conn, "select * from tbl_toko");
								  while($data=mysqli_fetch_assoc($sql)){
								  ?>
								    <tr>
								      <th class="name" scope="row"><?php echo $data['nama_toko']; ?></th>
								      <!-- <td><?php echo $data['rating']; ?></td> -->	      
								      <td><?php echo $data['alamat']; ?></td>				      
								      <td><?php echo $data['no_telp']; ?></td>				      
								      <td><?php echo $data['buka']; ?></td>				      
								      <td><?php echo $data['tutup']; ?></td>
								      
								      <td><a href="?id=<?php echo  $data['id_toko']; ?>#detail">Lihat</a></td>			      
								    </tr>	
								    <?php } ?>					    						   
								  </tbody>
							</table>							
						</div>
					</div>
				</div>
					
			</section>
			<!-- End daftar toko alat musik -->
			
			<!-- Start cari toko alat musik -->

			<section class="convert-area section-gap" id="cari">
				<div class="container">
					<div class="convert-wrap">
						<div class="row d-flex justify-content-center">
							<div class="menu-content pb-70 col-lg-8">
								<div class="title text-center">
									<h1 class="text-white mb-10">Cari Toko Distro</h1>
									<p class="text-white">di Kota Bandar Lampung.</p>
								</div>
							</div>
						</div>						

						<form action="index.php?#detail.php" method="post">
						<div class="row justify-content-center align-items-start">
							<div class="col-lg-3 col-md-6 cols-img">
								<input type="text" name="toko" placeholder="Masukan Nama Toko" class="form-control mb-20">
							</div>
							<div class="col-lg-3 col-md-6 cols">	
								<button type="submit" class="primary-btn header-btn text-uppercase">Cari</button>
							</div>
						</div>
						</form>						
					</div>
				</div>	
			</section>
			<!-- End cari toko alat musik -->


			<!-- Start callto Area -->
			<section class="callto-area section-gap2 relative" id="tentang">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10 ">
							<h1 class="text-white">Tentang</h1>
							<p class="text-white pt-20 pb-20">
								Sistem Informasi Geografis Toko Distro di Kota Bandar Lampung Berbasis Web adalah <br>Sistem yang dapat memberikan kemudahan bagi masyarakat sebagai pengguna dalam <br>menerima informasi mengenai toko Distro di Bandar Lampung.<br> Sistem ini dapat melakukan pemetaan toko Distro di Bandar Lampung dengan <br>detail lokasi,  jadwal buka atau tutup, <br>serta keterangan lainnya mengenai toko  Distro tersebut, yang berguna bagi <br>masyarakat Kota Bandar Lampung maupun di luar Kota Bandar Lampung. Dengan demikian dapat <br>memudahkan masyarakat sebagai pengguna untuk dapat melihat informasi <br>mengenai toko Distro yang ada di Bandar Lampung.
							</p>
							<a class="primary-btn" href="#footer">Kritik & Saran</a>							
						</div>
					</div>
				</div>	
			</section>
			<!-- End callto Area -->
			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap" id="footer">
				<div class="container">
					<div class="row justify-content-center">						
						<div class="row text-center">
							<div>
								<h3>Contact Us</h3>
							
								<p class="number">
									0819-0882-9443 <br>
									AHMAD IKHSAN
								</p>
							</div>
						</div>																		
					</div>
					<br>
						<?php include "contact.php"; ?>
					<div class="footer-bottom row">
						<p class="footer-text m-0 col-lg-6">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			Universitas Teknokrat Indonesia 2019 | Ahmad Ikhsan
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
			<?php if(isset($_GET['id']) || isset($_POST['toko'])){ }else{ ?>
        	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoilQqu_Iz-1B_zzqvbxJB3HC8ScFjZ8E&callback=initMap" async defer></script>
        	<?php } ?>

            
<!--script type="text/javascript" src="js/jquery.min.js"></script-->
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="asset/js/owl.carousel.min.js"></script>
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
			<script src="js/jquery.counterup.min.js"></script>			
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
			<script src="js/code.jquery.com/star.js"></script>
  <script src="asset/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="asset/js/popper.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
  <script src="asset/js/jquery.easing.1.3.js"></script>
  <script src="asset/js/jquery.waypoints.min.js"></script>
  <script src="asset/js/jquery.stellar.min.js"></script>
  <script src="asset/js/owl.carousel.min.js"></script>
  <script src="asset/js/jquery.magnific-popup.min.js"></script>
  <script src="asset/js/aos.js"></script>
  <script src="asset/js/jquery.animateNumber.min.js"></script>
  <script src="asset/js/bootstrap-datepicker.js"></script>
  <script src="asset/js/scrollax.min.js"></script>
  <script src="asset/js/main.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		</body>
	</html>



