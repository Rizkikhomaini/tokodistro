<?php
include "koneksi.php";
error_reporting(0);
ini_set('display_errors', '0');

$id = $_GET['id'];
$sql = "DELETE FROM tbl_detail_tempat_praktik WHERE id_d_tempat = '$id'";
$hasil = mysqli_query($conn, $sql);
    if($hasil){
        //echo "sukses";
      header("location:../?page=tempat-praktik-dokter&hapus=sukses");
    }
    else{
        //echo "gagal";
      header("location:../?page=tempat-praktik-dokter&hapus=gagal");
    }
 ?>
