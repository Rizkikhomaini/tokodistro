    <?php
//session_start();

include ('action/koneksi.php');
$id = $_GET['id'];
$sql=mysqli_query($conn,"select * from tbl_toko where id_toko='$id' ");
$w = mysqli_fetch_object($sql);
?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tambah Gambar
            <small></small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
             <div class="col-md-12">
              <div class="box box-success">

             
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Gambar Toko</h3>
                </div>
                <!-- /.box-header -->
               
                <div class="box-body">
                 <?php

echo"
<form enctype=multipart/form-data method=post action=action/tambah-gambar-simpan.php>";
?>
               
                    <div class="form-group">
                    <label>Nama Wisata</label>
                    <input name="nama_hotel" type="text" value="<?php echo $w->nama_wisata; ?>" class="form-control" placeholder="nama hotel" required="" style="width:80%;">
                    </div>
                    <input name="id_wisata" type="text" value="<?php echo $w->id_wisata; ?>" hidden="true">

                <div class="form-group">
                  <label>Gambar</label>
                  <input name="file" type="file" class="form-control" placeholder="file" required="" style="width:80%;">
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