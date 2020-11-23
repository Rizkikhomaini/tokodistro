    <?php
//session_start();

include ('action/koneksi.php');
//$username = $_SESSION['username'];
?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tambah Admin
            <small>Sistem Informasi Geografis</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
             <div class="col-md-12">
              <div class="box box-success">

             
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Admin</h3>
                </div>
                <!-- /.box-header -->
               
                <div class="box-body">
                 <?php

echo"
<form enctype=multipart/form-data method=post action=action/user_simpan.php>";
?>
               
                        <div class="form-group">
                    <label>Nama Admin</label>
                    <input name="nama_user" type="text" class="form-control" placeholder="Nama User" required="" style="width:80%;">
                    </div>
              

                <div class="form-group">
                  <label>User Name</label>
                  <input name="username" type="text" class="form-control" placeholder="User Name" required="" style="width:80%;">
                </div>
                

                <div class="form-group">
                    <label>Passowrd</label>
                     <input name="password" type="text" class="form-control" placeholder="Passowrd" required="" style="width:80%;">
                </div>

                <div class="form-group">
                    <label>Level</label>
                     <select name="level" type="text" class="form-control" placeholder="Level" required="" style="width:80%;">
                        <option>+PIlih Level+</option>
                        <option value="User">User</option>
                        <option value="Admin">Admin</option>
                     </select>
                </div>
               

                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="gambar" class="form-control" required="" style="width:50%;">
                    <p class="help-block">Ukuran Gambar ( size 32 x 37 pixels ).</p>
                  </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  
                   <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i>&nbsp;SIMPAN</button>   
                <a href="" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
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