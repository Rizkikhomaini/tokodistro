<?php 

include "koneksi.php";

$toko = $_POST['nama_toko'];
$lat = $_POST['lat'];
$long = $_POST['long'];
$no_telp = $_POST['no_telp'];
$jam_buka = $_POST['jam_buka'];
$jam_tutup = $_POST['jam_tutup'];
$alamat = $_POST['alamat'];
$pemilik = $_POST['pemilik'];
$id_toko = $_POST['id_toko'];
$medsos = $_POST['medsos'];
$email = $_POST['email'];
$id_user = $_POST['id_user'];
$tipe = $_POST['tipe'];


   $quer="UPDATE `tbl_toko` SET 
      `nama_toko`='$toko',`alamat`='$alamat',`no_telp`='$no_telp',`email`='$email',`Lat`='$lat',`Lng`='$long',`Pemilik`='$pemilik',`medsos`='$medsos',`buka`='$jam_buka',`tutup`='$jam_tutup',`id_user`='$id_user'
    WHERE `id_toko`='$id_toko'";
  $sqlinsert=mysqli_query($conn, $quer);

  if ($sqlinsert) {
  	if($_POST['ss']=="User"){
      header("location:../?page=edit_toko&id=$id_toko&edit=sukses");
  	}else{
  	  header("location:../?page=daftar-toko&edit=sukses");
  	}
  }else {
  	if($_POST['ss']=="User"){
      header("location:../?page=edit_toko&id=$id_toko&edit=gagal");
  	}else{
  	  header("location:../?page=daftar-toko&edit=gagal");
  	}
  }


?>