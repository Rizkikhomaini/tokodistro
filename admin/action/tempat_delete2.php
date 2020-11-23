<?php
include "koneksi.php";
error_reporting(0);
ini_set('display_errors', '0');

$id = $_GET['id_detailtoko'];
$idt = $_GET['id_toko'];
$sql = "DELETE FROM tbl_detailtoko WHERE id_detailtoko = '$id'";
$hasil = mysqli_query($conn, $sql);
    if($hasil){
        //echo "sukses";
      header("location:../?page=tambah-detail-alatmusik&id=$idt&hapus=sukses");
    }
    else{
        //echo "gagal";
      header("location:../?page=tambah-detail-alatmusik&id=$idt&hapus=gagal");
    }
 ?>
