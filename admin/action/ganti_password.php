<?php
session_start();
if(!isset($_SESSION)) 
    { 
       header("Location:login.php");
    } 
    else{
      // session_destroy();
      // header("Location:login.php");

        $id=$_SESSION["id_user"];
        $nama = $_SESSION['nama'];
$foto = $_SESSION['foto'];
    }
include ('../inc/config.php');

$id = $_SESSION['id_user'];
$password_old   = md5($_POST['password_old']); //Password lama
    $password_new   = md5($_POST['password_new']); //Password baru
    $password_conf  = md5($_POST['password_conf']);

    //baris dibawah ini disesuaikan dengan nama tabel dan idtabelnya
   $sql=$mysqli->query("SELECT * FROM tbl_user where id_user = '$id' ");

    $data = mysqli_fetch_object($sql);
   
   $ff = $data->password ;
    if($password_old == $data->password)
{

    if($password_new == $password_conf){


        $mysqli->query( "UPDATE `tbl_user` SET 
      `password`='$password_conf'
    WHERE `id_user`='$id' ");

 echo "<script>alert('Password Berhasil Di Ubah Silakan Login Menggunakan Password Baru ... ');window.location='../login.php';</script>";
    }
    else{
         echo "<script>alert('Gagal mengganti password! Password tidak sama!');window.location='../?mod=_ganti_password';</script>";
    }
   

}
else{
        //die(var_dump($pass));
     

            echo "<script>alert('Gagal mengganti password! Password tidak terdaftar! ');window.location='../?mod=_ganti_password';</script>";
        }
        

?>