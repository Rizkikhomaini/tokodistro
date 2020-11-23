<?php
include "koneksi.php";
 $fileName = $_FILES['file']['name'];
 $size	= $_FILES['file']['size'];
 $id = $_POST['id_detailtoko'];
 //echo $size;
  // Simpan ke Database
 if($id == ""){
 	?><script type="text/javascript">alert("gagal");</script><?php
 }else{
if( $size <= 1024000){
	  $sql = "insert into tbl_gambar values ('','$id','$fileName')";
	  $sqlinsert=mysqli_query($conn, $sql);
	  // Simpan di Folder Gambar
	  move_uploaded_file($_FILES['file']['tmp_name'], "../../gambar/".$_FILES['file']['name']);
	  
	  if ($sqlinsert){
	      header("location:../?page=tambah-gambar&id=$id&simpan=sukses");
	  }else {
	      header("location:../?page=tambah-gambar&id=$id&simpan=gagal");
	  }
}else{
	header("location:../?page=tambah-gambar&id=$id&simpan=gagal");
}
}
 ?>