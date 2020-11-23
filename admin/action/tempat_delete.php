<?php
include "koneksi.php";
error_reporting(0);
ini_set('display_errors', '0');

$id = $_GET['id_detailtoko'];
$sql = "DELETE FROM tbl_gambar WHERE id_detailtoko = '$id'";
$hasil = mysqli_query($conn, $sql);
    if($hasil){
        //echo "sukses";
      header("location:../?page=tambah-gambar&id=$id&hapus=sukses");
    }
    else{
        //echo "gagal";
      header("location:../?page=tambah-gambar&id=$i&hapus=gagal");
    }
 ?>
