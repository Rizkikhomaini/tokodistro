    <?php


include ('action/koneksi.php');

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
                      ?>


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
         <section class="content-header">
      <h1>
         Ubah Password
      
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
  
        <li class="active">Ubah Password</li>
      </ol>
    </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-sm-10">
             <?php

echo"
<form enctype=multipart/form-data method=post action=action/ganti_password.php>";
?>
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Ubah Password</h3>
                </div>
                <!-- /.box-header -->
              
                <div class="box-body">
                  <div class="form-group">
                    <label>Password Lama</label>
                    <input name="password_old" type="text" class="form-control" placeholder="Password Lama" style="width:50%;" >
                  </div>
                 <div class="form-group">
                    <label>Password Baru</label>
                    <input name="password_new" type="text" class="form-control" placeholder="Password Baru" style="width:50%;">
                  </div>
                  <div class="form-group">
                    <label>Ulangi Password</label>
                    <input name="password_conf" type="text" class="form-control" placeholder="Password Lama" style="width:50%;">
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button name="update" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Ganti Password</button>
                <a href="" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
                </div>
              </div>
            
              <!-- /.box -->
              </form>
            </div>
          </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>