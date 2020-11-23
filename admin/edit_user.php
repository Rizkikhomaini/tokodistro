 <?php 
 include ('action/koneksi.php');
  
  if(isset($_POST['id']) || isset($_GET['id'])) {
   if(isset($_GET['id'])){
      $id=$_GET['id'];
    }else{
      $id=$_POST['id'];
    } 
    //baris dibawah ini disesuaikan dengan nama tabel dan idtabelnya
 

   $sql=mysqli_query($conn,"SELECT * FROM tbl_user where id_user = '$id'  ");

    $data = mysqli_fetch_object($sql);


$pw = md5(utf8_decode('$data->password'));
  } else {
    $aksi = "tambah";
  }?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">

          <div class="row">
             <div class="col-md-12">
              <div class="box box-success">

             
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Data</h3>
                </div>
                <!-- /.box-header -->
               
                <div class="box-body">
                 <?php

echo"
<form enctype=multipart/form-data method=post action=action/user_edit.php>";
?>
               
                        <div class="form-group">
                    <label>Nama User</label>
                    <input name="nama_user" type="text" class="form-control" placeholder="Nama User" required="" style="width:80%;" value= "<?php echo $data->nama ?>" >
                    </div>
               <input name="id" type="hidden" class="form-control"  style="width:80%;" value= "<?php echo $data->id_user ?>" >

                <div class="form-group">
                  <label>User Name</label>
                  <input name="username" type="text" class="form-control" placeholder="User Name" required="" style="width:80%;" value= "<?php echo $data->username ?>">
                </div>
                

                <div class="form-group">
                    <label>Password (Isi password jika ingin mengubah password.)</label>
                     <input name="password" type="text" class="form-control" placeholder="Password" required="" style="width:80%;" value= "">

                  </div>
              <?php if(isset($_GET['id']) && $_SESSION['level']=="Admin"){ ?>
               <div class="form-group">
                    <label>Level</label>
                     <select name="level" type="text" class="form-control" placeholder="Level" required="" style="width:80%;">
                        <option>+PIlih Level+</option>
                        <option <?php if($data->level == "User"){ echo "selected" ; } ?> value="User">User</option>
                        <option <?php if($data->level == "Admin"){ echo "selected" ; } ?> value="Admin">Admin</option>
                     </select>
                </div>
                <?php }else{ ?>
                  <input type="text" name="level" value= "<?php echo $data->level; ?>" hidden="true" >
                <?php } ?>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="gambar" class="form-control" value= "<?php echo $data->foto ?>" required="" style="width:50%;">
                    <p class="help-block">Ukuran Gambar ( size 32 x 37 pixels ).</p>
                  </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  
                   <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i>&nbsp;Edit Data</button>   
                <a href="?page=daftar_user" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
                 </form>
                </div>
              </div>
          
              <!-- /.box -->
            </div>
          </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>