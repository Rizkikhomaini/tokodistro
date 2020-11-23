<?php
include"koneksi.php";
$ruangan = $_GET['ruangan'];
$kamar = mysqli_query($conn, "SELECT tbl_kamar.*, tbl_class.* FROM tbl_kamar inner Join tbl_class on tbl_kamar.kd_class=tbl_class.kd_class WHERE tbl_kamar.kd_class='$ruangan' and status='R' order by kd_kamar ASC");
$rkamar=mysqli_num_rows($kamar);
if ($rkamar>0) {
  echo "<option></option>";
  while($k = mysqli_fetch_array($kamar)){
      echo "<option value=\"".$k['kd_kamar']."-".$k['harga']."\">".$k['kd_kamar']."</option>\n";
  }
}
else if ($rkamar=0) {
  echo'<div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Pilih Kamar</label>
    <div class="col-sm-9">
    <select disabled name="kd_kamar" class="required form-control" required="">';
  echo "<option class='d'>-- Kamar Penuh --</option>";
  echo '</select>
  </div>
</div>';
}
else {
  echo'<div class="form-group">
    <label for="jurusan" class="col-sm-2 control-label">Pilih Kamar</label>
    <div class="col-sm-9">
    <select disabled name="kd_kamar" class="required form-control" id="kamar" required="">';
  echo "<option class='d'>-- Pilih Tipe Kamar --</option>";
  echo '</select>
  </div>
</div>';
}

?>
