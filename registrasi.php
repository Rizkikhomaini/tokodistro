

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Toko</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/formregister.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-register100">
			<div class="wrap-register100">
				<div class="register100-form-title" style="background-image: url(img/store.jpg);">
					<span class="register100-form-title-1">
						Registrasi Admin Toko
					</span>
				</div>
				<?php //include "detail.php"; ?>

				<form class="register100-form validate-form" method="post" action="admin/action/simpan-regis.php">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Nama Belum diisi">
						<span class="label-input100">Nama</span>
						<input class="input100" type="text" name="nama" placeholder="Masukan Nama Admin Toko">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Nama Belum diisi">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Masukan Nama">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Kata Sandi Belum diisi">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Masukan Kata Sandi">
						<span class="focus-input100"></span>
					</div>

					

					<div class="container-register100-form-btn">
						<button class="register100-form-btn" type="submit" method="post" >
							Registrasi
						</button>
					</div>

					<div class="flex-sb-m w-full p-b-30" style="padding-top: 15px">
							<a href="login.php" ><i class="fa fa-home"></i> Kembali ke Login</font></a>
					</div>


					<div class="flex-sb-m w-full p-b-30" style="padding-top: 15px">
							<a href="index.php" ><i class="fa fa-arrow-circle-left"></i> Back To Website</font></a>
					</div>

				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/register.js"></script>

</body>
</html>