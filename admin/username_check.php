 <?php

    require 'action/koneksi.php';

    if (isset($_POST['user'])) {

  $username = mysqli_real_escape_string($conn, $_POST['user']);
$sql = "select * from tb_user where username = '$username'";
$process = mysqli_query($conn, $sql);
$num = mysqli_num_rows($process);
if($num == 0){
    echo $username_result=" ✔ Nik masih tersedia";
}else{
    echo  $username_result=" ❌ Nik tidak tersedia / Nik Sudah Terpakai";
}

    }
    ?>