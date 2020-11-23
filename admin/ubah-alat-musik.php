    <?php
//session_start();

include ('action/koneksi.php');
//$username = $_SESSION['username'];

 $id=base64_decode($_GET['id']); 
 //echo $id;
    //baris dibawah ini disesuaikan dengan nama tabel dan idtabelnya

   $sql=mysqli_query($conn,"SELECT * FROM tbl_alatmusik where id_alatmusik = '$id'  ");

  $data = mysqli_fetch_object($sql);
?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Ubah Alat Musik 
            <small></small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
             <div class="col-md-12">
              <div class="box box-success">

             
                <div class="box-header with-border">
                  <h3 class="box-title">Ubah Alat Musik</h3>
                </div>
                <!-- /.box-header -->
               
                <div class="box-body">

<form enctype='multipart/form-data' method='post' action='action/alatmusik-edit.php' >

                <div class="form-group">
                  <label>Nama Alat Musik</label>
                  <input name="nama_alat_musik" id="nama_alat_musik" type="text" value="<?php echo $data->nama_alatmusik; ?>" class="alatmusik form-control" placeholder="nama alat musik"  required="" style="width:80%;">
                </div>
                    
                <div class="form-group">
                  <label>Merek Alat Musik</label>
                  <input name="merek" id="merek" type="text"  value="<?php echo $data->merek; ?>" class="form-control" placeholder="Merek Alat Musik" required="" style="width:80%;">
                </div>     

               
                <div class="form-group">
                  <label>Jenis Alat Musik</label>
                  <input name="jenis_alatmusik" id="jenis_alatmusik" type="text" class="form-control" placeholder="Jenis Alat Musik"  value="<?php echo $data->jenis_alatmusik; ?>" required="" style="width:80%;">
                </div>            

                <div class="form-group">
                  <label>Produksi Alat Musik</label>
                  <input name="produksi" id="produksi" type="text" class="form-control"  value="<?php echo $data->produksi; ?>" placeholder="Produksi Alat Musik" required="" style="width:80%;">
                </div>       
               
                  <input name="id_alatmusik" type="text" value="<?php echo $data->id_alatmusik; ?>" hidden='true' >
              
                <!-- /.box-body -->

                <div class="form-group">
                  
                   <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i>&nbsp;Ubah</button>   
                <a href="" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a></div>
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