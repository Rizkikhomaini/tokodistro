<?php
include "koneksi.php";
error_reporting(0);
ini_set('display_errors', '0');

$id = $_GET['id_alatmusik'];
$sql = "DELETE FROM tbl_alatmusik WHERE id_alatmusik= '$id'";
$hasil = mysqli_query($conn, $sql);
    if($hasil){
        //echo "sukses";
      header("location:../?page=data-alat-musik&hapus=sukses");
    }
    else{
        //echo "gagal";
      header("location:../?page=data-alat-musik&hapus=gagal");
    }
 ?>
