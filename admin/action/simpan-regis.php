
<?php
include "koneksi.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];


if (empty($nama)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../registrasi.php'>";
}else 
if(empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../registrasi.php'>";
}else 
if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=../../registrasi.php'>";
}else{
$cek_data = mysqli_query($conn, "SELECT * FROM tbl_user where (nama = '$nama' or username = '$username') and level = 'User'");
$hsl = mysqli_num_rows($cek_data);
if($hsl > 0){
  echo "<script>alert('Gagal Mendaftar, data sudah ada.')</script>";
  echo "<meta http-equiv='refresh' content='1 url=../../registrasi.php'>";
}else{
  $daftar = mysqli_query($conn, "INSERT INTO tbl_user (nama,username,password,level,foto) values ('$nama','$username',md5('$password'),'User','')");
  if ($daftar){
  echo "<script>alert('Berhasil Mendaftar')</script>";
  echo "<meta http-equiv='refresh' content='0.2 url=../../login.php'>";
  }else{
  echo "<script>alert('Gagal Mendaftar')</script>";
  echo "<meta http-equiv='refresh' content='0.2 url=../../registrasi.php'>";
  }
}
}
?>