<?php 

include "koneksi.php";
$nama_alat_musik = $_POST['nama_alat_musik'];
$merek = $_POST['merek'];
$jenis_alatmusik = $_POST['jenis_alatmusik'];
$produksi = $_POST['produksi'];

$quer="INSERT INTO `tbl_alatmusik` VALUES ('','$merek','$nama_alat_musik','$jenis_alatmusik','$produksi')";

  $sqlinsert=mysqli_query($conn, $quer);

  if ($sqlinsert) {
    if(isset($_POST['md'])){
      header("location:../?page=data-alatmusik&simpan=sukses");
    }else{
      header("location:../?page=tambah-alat-musik&simpan=sukses");
    }
    
  }else {
    if(isset($_POST['md'])){
      header("location:../?page=data-alatmusik&simpan=gagal");
    }else{
      header("location:../?page=tambah-alat-musik&simpan=gagal");
    }
      
  }
	




   


?>