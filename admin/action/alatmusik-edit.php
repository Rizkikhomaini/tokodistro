<?php 

	include "koneksi.php";
$id = $_POST['id_alatmusik']; 
$nama_alatmusik = $_POST['nama_alat_musik'];
$merek  = $_POST['merek'];
$jenis_alatmusik = $_POST['jenis_alatmusik'];
$produksi  = $_POST['produksi'];


 $quer="UPDATE `tbl_alatmusik` SET 
      `nama_alatmusik`='$nama_alatmusik',`merek`='$merek', `jenis_alatmusik`='$jenis_alatmusik',
      `produksi`='$produksi'
    WHERE `id_alatmusik`='$id'";

  $sqlinsert=mysqli_query($conn, $quer);

  if ($sqlinsert) {
      header("location:../?page=data-alat-musik&edit=sukses");
  }else {
      header("location:../?page=data-alat-musik&edit=gagal");
  }




   

?>