<?php 

	include "koneksi.php";
$nama_user = $_POST['nama_user'];
$username = $_POST['username'];

$password = md5($_POST['password']);



  $lokasi_file = $_FILES['gambar']['tmp_name'];
  $tipe_file   = $_FILES['gambar']['type'];
  $nama_file   = $_FILES['gambar']['name'];
  $direktori   = "../img/$nama_file";
  // end of code B
  
  if (!empty($lokasi_file)) {
    copy($lokasi_file,$direktori);

$quer="INSERT INTO `tbl_user`(`username`, `password`,`nama`, `foto`,`level`) 
    VALUES ('$username','$password','$nama_user','$nama_file','')";

  $sqlinsert=mysqli_query($conn, $quer);

  if ($sqlinsert) {
      header("location:../?page=tambah_user&simpan=sukses");
  }else {
      header("location:../?page=tambah_user&simpan=gagal");
  }
	
}




   


?>