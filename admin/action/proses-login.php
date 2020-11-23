<?php
session_start();
include_once("koneksi.php");

	$user = $_POST['username'];
	$password = md5($_POST['password']);

	$sqlquery = "SELECT * FROM tbl_user WHERE username='$user' and password='$password'";
	$sql = mysqli_query($conn, $sqlquery) or die("database error:". mysqli_error($conn));
	$cek = mysqli_fetch_array($sql);
    $row=mysqli_num_rows($sql);
	if($row>0){
    //if ($cek['status']=='Y') {
  		$_SESSION['username']=$user;
  		$_SESSION['password']=$password;
  		$_SESSION['level']= $cek['level'];
      $_SESSION['foto']= $cek['foto'];
      $_SESSION['id']=$cek['id_user'];
  		// echo $user;
  		header("location:../index.php?login=sukses");
   // }else {

  		//header("location:../login.php?login=aktif");
    //}
	} else {
		header("location:../../login.php?login=gagal"); // wrong details
	}


?>
