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
$nama_dokter = $_POST['nama_dokter'];
$spesialis = $_POST['spesialis'];
$jenis_kelamin = $_POST['jenis_kelamin'];


 $query="INSERT INTO `tbl_d_spesialis`
		VALUES ('','$nama_dokter','$spesialis','$jenis_kelamin','$id')";
  $sqlinsert=mysqli_query($conn, $query);

  if ($sqlinsert) {
      header("location:../?page=daftar-dokter&simpan=sukses");
  }else {
      header("location:../?page=daftar-dokter&simpan=gagal");
  }

?>

