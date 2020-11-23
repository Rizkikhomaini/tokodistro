<?php 

include "koneksi.php";
$id_toko = $_POST['id_toko'];
$id_alatmusik = $_POST['id_alatmusik'];
$harga = $_POST['harga'];
$ket = $_POST['ket'];

$quer="INSERT INTO `tbl_detailtoko` VALUES ('','$id_toko','$id_alatmusik','$harga','$ket')";

  $sqlinsert=mysqli_query($conn, $quer);

  if ($sqlinsert) {
    if(isset($_POST['md'])){
      header("location:../?page=data-alatmusik&simpan=sukses");
    }else{
      header("location:../?page=tambah-detail-alatmusik&id=$id_toko&simpan=sukses");
    }
    
  }else {
    if(isset($_POST['md'])){
      header("location:../?page=data-alatmusik&simpan=gagal");
    }else{
      header("location:../?page=tambah-detail-alatmusik&id=$id_toko&simpan=gagal");
    }
      
  }
	




   


?>