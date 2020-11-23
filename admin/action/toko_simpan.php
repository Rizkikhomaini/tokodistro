<?php 

if(!isset($_SESSION)) 
    { 
       header("Location:login.php");
    } 
    else{
      // session_destroy();
      // header("Location:login.php");

        $id=$_SESSION["id_user"];
  

    }

include "koneksi.php";
$nama_toko = $_POST['nama_toko'];
$email = $_POST['email'];
$lat = $_POST['lat'];
$long = $_POST['long'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$medsos = $_POST['medsos'];
$pemilik = $_POST['pemilik'];
$jam_buka = $_POST['jam_buka'];
$jam_tutup = $_POST['jam_tutup'];
$id_user = $_POST['id_user'];
$tipe = $_POST['tipe'];



 $query="INSERT INTO `tbl_toko`
		VALUES ('','$nama_toko','$alamat','$no_telp','$email','$lat','$long','$pemilik','$medsos','$jam_buka','$jam_tutup','$id_user','$tipe')";
  $sqlinsert=mysqli_query($conn, $query);

  if ($sqlinsert) {
      header("location:../?page=tambah-toko&simpan=sukses");
  }else {
      header("location:../?page=tambah-toko&simpan=gagal");
  }

?>

