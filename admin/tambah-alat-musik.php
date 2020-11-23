    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tambah Alat Musik
            <small></small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
             <div class="col-md-12">
              <div class="box box-success">

             
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Alat musik</h3>
                </div>
                <!-- /.box-header -->
               
                <div class="box-body">
                 <?php

echo"<form enctype=multipart/form-data method=post action=action/tambah-alat-musik.php>"; ?>
 
                <div class="form-group">
                  <label>Nama Alat Musik</label>
                  <input name="nama_alat_musik" id="nama_alat_musik" type="text" value="" class="alatmusik form-control" placeholder="nama alat musik" required="" style="width:80%;">
                </div>
                    
                <div class="form-group">
                  <label>Merek Alat Musik</label>
                  <input name="merek" id="merek" type="text" class="form-control" placeholder="Merek Alat Musik" required="" style="width:80%;">
                </div>     

               
                <div class="form-group">
                  <label>Jenis Alat Musik</label>
                  <input name="jenis_alatmusik" id="jenis_alatmusik" type="text" class="form-control" placeholder="Jenis Alat Musik" required="" style="width:80%;">
                </div>            

                <div class="form-group">
                  <label>Produksi Alat Musik</label>
                  <input name="produksi" id="produksi" type="text" class="form-control" placeholder="Produksi Alat Musik" required="" style="width:80%;">
                </div>       
                <!-- /.box-body -->

                <div class="box-footer">
                  
                   <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i>&nbsp;Simpan</button>   
                <a href="" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
                </div>
                </div>
              </div>
          
              <!-- /.box -->
            </div>
          </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>