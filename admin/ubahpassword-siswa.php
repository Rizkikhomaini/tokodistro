<?php
include 'action/koneksi.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query=mysqli_query($conn,"SELECT a.*,b.nama_kelas,c.id_user,c.username FROM tb_siswa AS a 
INNER JOIN tb_kelas AS b ON a.kelas=b.id
INNER JOIN tb_user AS c ON a.`nis`=c.`username` where c.id_user='$id'");
  while($data=mysqli_fetch_assoc($query)){
 ?>

<div class="row row-inline-block small-spacing">
  <div class="col-xs-12">
    <div class="box-content">
      <div class="col-md-6">
        <table class="table table-condensed" >
          <tr>
            <td style="width:40%">Nama</td>
            <td style="width:10%">:</td>
            <td style="width:40%"><?php echo $data['nama_lengkap']; ?></td>
          </tr>
          <tr>
            <td style="width:40%">Username</td>
            <td style="width:10%">:</td>
            <td style="width:40%"><?php echo $data['username']; ?></td>
          </tr>
         
        </table>
        <hr>
       
      </div>
 
  
      <div class="col-md-6">
        <form class="" action="action/ubah-pwsiswa.php" method="post">
        <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
            <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="form-group">
          <label for="nisn" class="col-sm-4 control-label">password lama</label>
          <div class="col-sm-8">
            <input type="password" id="#" name="pw_lama" required="" class="required form-control">
          </div>
        </div>
        <br>
        <div class="form-group"  >
          <label for="nisn" class="col-sm-4 control-label" style='margin-top:10px;'>password Baru</label>
          <div class="col-sm-8">
            <input type="password" id="#" name="pw_baru" required="" class="required form-control" style='margin-top:10px;'>
          </div>
        </div>
        <br>
        <div class="row">
          <br>
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr><td width="50%" align="left" valign="middle">
          <a href='?page=menu_siswa&id=<?php echo $id ?>'><font size="4dp"> <i class="fa fa-arrow-left"></i>Back </font></a>
        </td><td>
          <input style='float:right; margin-top:20px;' class="btn btn-primary" type="submit" name="Simpan" value="Simpan">
        </td></tr>
        </div>
        </form>
      </div>

    </div>
    <!-- /.box-content -->
  </div>

</div>
      <?php } }?>