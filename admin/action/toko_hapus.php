<?php
include "koneksi.php";
error_reporting(0);
ini_set('display_errors', '0');

$id = $_GET['id_toko'];
$sql = "DELETE FROM tbl_toko WHERE id_toko = '$id'";
$hasil = mysqli_query($conn, $sql);
    if($hasil){
        //echo "sukses";
      header("location:../?page=daftar-toko&hapus=sukses");
    }
    else{
        //echo "gagal";
      header("location:../?page=daftar-toko&hapus=gagal");
    }
 ?>
