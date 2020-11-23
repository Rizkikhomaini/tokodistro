<?php 

	include "koneksi.php";
 $id = $_POST['id']; 
 $nama_user = $_POST['nama_user'];
$username = $_POST['username'];
$level = $_POST['level'];

  $lokasi_file = $_FILES['gambar']['tmp_name'];
  $tipe_file   = $_FILES['gambar']['type'];
  $nama_file   = $_FILES['gambar']['name'];
  $direktori   = "../img/$nama_file";
  // end of code B
  
  if (!empty($lokasi_file)) {
    copy($lokasi_file,$direktori);

if($_POST['password'] != "" && $nama_file != ""){
$password = md5($_POST['password']);
$quer="UPDATE `tbl_user` SET 
      `nama`='$nama_user',`username`='$username',
      `password`='$password',`foto`='$nama_file',`level`='$level'
    WHERE `id_user`='$id'";
}else{
  if($_POST['password'] == "" && $nama_file == ""){
    $quer="UPDATE `tbl_user` SET 
        `nama`='$nama_user',`username`='$username',`level`='$level'
      WHERE `id_user`='$id'";
  }else if($_POST['password'] == "" && $nama_file != ""){
    $quer="UPDATE `tbl_user` SET 
        `nama`='$nama_user',`username`='$username',`foto`='$nama_file',`level`='$level'
      WHERE `id_user`='$id'";
  }else if($nama_file == "" && $_POST['password'] != ""){
    $quer="UPDATE `tbl_user` SET 
        `nama`='$nama_user',`username`='$username',`foto`='$nama_file',`level`='$level',`password`='$password'
      WHERE `id_user`='$id'";
  }
}

  $sqlinsert=mysqli_query($conn, $quer);

  if ($sqlinsert) {
      header("location:../?page=daftar_user&edit=sukses");
  }else {
      header("location:../?page=daftar_user&edit=gagal");
  }

}



   

?>