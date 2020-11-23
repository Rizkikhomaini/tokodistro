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
$dokter = $_POST['dokter'];
$tempat = $_POST['tempat'];
$jam = $_POST['jam'];
$hari = $_POST['hari'];


 $query="INSERT INTO `tbl_detail_tempat_praktik`
		VALUES ('','$dokter','$tempat','$jam','$hari')";
  $sqlinsert=mysqli_query($conn, $query);

  if ($sqlinsert) {
      header("location:../?page=tempat-praktik-dokter&simpan=sukses");
  }else {
      header("location:../?page=tempat-praktik-dokter&simpan=gagal");
  }

?>

