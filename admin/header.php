
<div class="main-menu" style="background-color:#b1bbe4; color:#fff">
	<header class="header">
		<a href="?page=home" class="logo"><i class="ico mdi mdi-home-outline"></i>SIG</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
		<div class="user">
			<a href="#" class="avatar">
			<?php
			if($_SESSION['foto'] != ""){
				$foto = "img/".$_SESSION['foto'];
			}else{
				$foto = "assets/images/iconuser.png";
			}
			?>
			<img src="<?php echo $foto; ?>" alt=""><span class="status online"></span>

			</a>
			<h5 class="name"><a href="?page=edit_user&id=<?php echo $_SESSION['id']; ?>"><?php echo $user['nama'] ?></a></h5>
			<h5 class="position"><?php echo $user['level'] ?></h5>
			<!-- /.name -->
			<div class="control-wrap js__drop_down">
				<i class="fa fa-caret-down js__drop_down_button"></i>
				<div class="control-list">
					<div class="control-item"><a href="?page=edit_user&id=<?php echo $_SESSION['id']; ?>"><i class="fa fa-user"></i> Profile</a></div>
					<!-- <div class="control-item"><a href="#"><i class="fa fa-gear"></i> Settings</a></div> -->
					<div class="control-item"><a href="action/proses-logout.php"><i class="fa fa-sign-out"></i> Log out</a></div>
				</div>
				<!-- /.control-list -->
			</div>
			<!-- /.control-wrap -->
		</div>
		<!-- /.user -->
	</header>
	<!-- /.header -->
	<div class="content" >

		<div class="navigation" >
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect" href="index.php"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Beranda</span></a>
				</li>
				<?php
if (!empty($_SESSION['username']) ) {
		if ($_SESSION['level'] == "Admin" or $_SESSION['level'] == "User") {
				?>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-home-map-marker"></i><span>Toko Distro</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="?page=tambah-toko">Tambah Toko</a></li>
						<li><a href="?page=daftar-toko">Daftar Toko</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
				<?php if ($_SESSION['level'] == "Admin"){ ?>
				 <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-star"></i><span>Data Rating</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="?page=tambah-rating">Tambah Rating</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
			     
				
				 <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-user"></i><span>Data Admin</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="?page=tambah_user">Tambah Admin</a></li>
						<li><a href="?page=daftar_user">Daftar Admin</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
				<li>
					<a class="waves-effect" href="?page=komentar"><i class="menu-icon mdi mdi-book-open"></i><span>Komentar</span></a>
				</li>
				<?php 
					}else{ 
						$idu = $_SESSION['id'];
						$tk = mysqli_fetch_assoc(mysqli_query($conn, "select * from tbl_toko where id_user = '$idu'"));
				?>
				
				<hr>
				<li>
					<a class="waves-effect" href="../index.php"><i class="menu-icon mdi mdi-home"></i><span>Back To Web</span></a>
				</li>
			

				<?php } } } ?>

				<!--<li>
					<a class="waves-effect" href="?page=data-paket"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Detai</span></a>
				</li>
				<li>
					<a class="waves-effect" href="?page=data-paket"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Pelunasan</span></a>
				</li-->

				<!-- <li>
					<a class="waves-effect" href="?page=data-singkatan"><i class="menu-icon mdi mdi-book-open"></i><span>Data Singkatan</span></a>
				</li>
        <li>
					<a class="waves-effect" href="?page=data-obat"><i class="menu-icon mdi mdi-collage"></i><span>Data Obat</span></a>
				</li> -->

			</ul>
			<!-- /.menu js__accordion -->
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar" style="background-color:#0080B3; color:#fff">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">SIG - TOKO DISTRO DI KOTA BANDAR LAMPUNG</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">

		<a href="action/proses-logout.php" class="logout ico-item mdi mdi-logout "></a>
	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->
