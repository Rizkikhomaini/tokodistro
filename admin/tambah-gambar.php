    <?php
    include "action/koneksi.php"; 
    $id = $_GET['id'];
    $data1=mysqli_fetch_assoc(mysqli_query($conn, "select * from vw_detail where id_detailtoko = '$id'"));

    ?>
    <style type="text/css">
      .modal-backdrop {
          /* bug fix - no overlay */    
          display: none;    
          overflow: auto;
      }
      .modal-content{
        padding-top: 60px;
        width: 800px;
      }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tambah Gambar Alat Musik
            <small></small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
             <div class="col-md-12">
              <div class="box box-success">

             
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Gambar Alat musik</h3>
                </div>
                <!-- /.box-header -->
               
                <div class="box-body">
                <form method="POST" action="action/tambah-gambar.php" enctype="multipart/form-data" >
               
                <div class="form-group">
                    <label>Nama Toko</label>
                    <input name="nama_toko" type="text" value="<?php echo $data1['nama_toko']; ?>" class="form-control" placeholder="nama toko" readonly="true" required="" style="width:80%;">
                </div>

                <input name="id_detailtoko" type="text" value="<?php echo $id; ?>" hidden="true">

                <div class="form-group">
                  <label>Nama Alat Musik</label>
                  <input name="nama_alat_musik" id="nama_alat_musik" type="text" value="<?php echo $data1['nama_alatmusik']; ?>" class="alatmusik form-control" placeholder="nama alat musik" required="" style="width:80%;">
                </div>
                    
                <div class="form-group">
                  <label>Merek Alat Musik</label>
                  <input name="merek" id="merek" type="text" class="form-control" placeholder="Merek Alat Musik" value="<?php echo $data1['merek']; ?>" required="" style="width:80%;">
                </div>     

               
                <div class="form-group">
                  <label>Jenis Alat Musik</label>
                  <input name="jenis_alatmusik" id="jenis_alatmusik" type="text" class="form-control" placeholder="Jenis Alat Musik" value="<?php echo $data1['jenis_alatmusik']; ?>" required="" style="width:80%;">
                </div>            

                <div class="form-group">
                  <label>Produksi Alat Musik</label>
                  <input name="produksi" id="produksi" type="text" class="form-control" placeholder="Produksi Alat Musik" value="<?php echo $data1['produksi']; ?>" required="" style="width:80%;">
                </div>    

                <div class="form-group">
                  <label>Gambar (Ukuran Maks = 1 MB)</label>
                  <input type="file" name="file" id="file" accept="image/*" class="form-control">
                </div>    
                <!-- /.box-body -->

                <div class="box-footer">
                  
                   <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i>&nbsp;Simpan</button>   
                <a href="" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
                </div>
                </form>
                <br><br>
                <h3>Tabel Data Gambar Alat Musik </h3>
                <table id="example" class="table table-striped table-bordered display" >
                  <thead>
                    <tr>
                     <tr>
                                <th width="5%">No</th>
                                <th>Nama Gambar</th>
                                <th>Gambar</th>
                                <th> - </th>
                              </tr>
                    </tr>
                  </thead>

                  <tbody>
                      <?php
                      include 'action/koneksi.php';
                      $no=1;
                      $query=mysqli_query($conn,"SELECT * from tbl_gambar where id_detailtoko='$_GET[id]'");
                      while($r=mysqli_fetch_assoc($query)){
                      ?>
                    <tr style="background: white">
                      <td><?php echo $no ?></td>
                   
                                <td><?php echo $r['gambar'] ?></td>
                                <td><img src="<?php echo "../gambar/".$r['gambar'] ?>" height="80px" width="110px"></td>
                         
                           <td>
                      <a href='action/tempat_delete.php?id_detailtoko=<?php echo $r['id_detailtoko'] ?>' class="delete btn btn-circle  btn-danger btn-xs" ><i class="ico fa fa-trash"></i></a>
                      </td>

                    </tr><?php $no++; } ?>
                  </tbody>
                </table>

                </div>
              </div>
          
              <!-- /.box -->
            </div>
          </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>