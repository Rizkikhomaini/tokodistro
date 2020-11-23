<?php 

	include "koneksi.php";
$nama_hotel = $_POST['nama_hotel'];
$alamat = $_POST['alamat'];
$nomor_telpon = $_POST['nomor_telpon'];

$quer="INSERT INTO `tbl_hotel`(`nama_hotel`, `alamat`,`no_telp`) 
    VALUES ('$nama_hotel','$alamat','$nomor_telpon')";

  $sqlinsert=mysqli_query($conn, $quer);

  if ($sqlinsert) {
    if(isset($_POST['md'])){
      header("location:../?page=data-hotel&simpan=sukses");
    }else{
      header("location:../?page=tambah-hotel&simpan=sukses");
    }
    
  }else {
    if(isset($_POST['md'])){
      header("location:../?page=data-hotel&simpan=gagal");
    }else{
      header("location:../?page=tambah-hotel&simpan=gagal");
    }
      
  }
	




   


?>