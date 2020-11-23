<?php 

	include "koneksi.php";
$id = $_POST['id'];

mysqli_query($conn,"
		DELETE FROM  `tbl_user` where id_user = '$id' 
	");

	header("Location:../?page=daftar_user");

?>