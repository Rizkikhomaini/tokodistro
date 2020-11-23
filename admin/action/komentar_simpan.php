<?php
include "koneksi.php";
// error_reporting(0);
// ini_set('display_errors', '0');
$nama=$_POST['nama'];
$email=$_POST['email'];
$komentar=$_POST['komentar'];
date_default_timezone_set('Asia/Jakarta');
$tgl=date("Y-m-d h:i:s");

  $query="INSERT INTO tbl_komentar values('','$nama','$email','$komentar','$tgl')";
  $sqlinsert=mysqli_query($conn, $query);
  if ($sqlinsert) {
  	?><script type="text/javascript">alert('Komentar terkirim, Terimakasih.')</script><?php
    echo '<meta http-equiv="refresh" content="0; url=http:../../index.php?#footer" />';
  }else{
  	?><script type="text/javascript">alert('Komentar gagal dikirim.')</script><?php
  	echo '<meta http-equiv="refresh" content="0; url=../../index.php?#footer" />';
  }


?>
