    <?php
    include "action/koneksi.php"; 
    $id = $_GET['id'];

    $data1=mysqli_fetch_assoc(mysqli_query($conn, "select * from tbl_toko where id_toko = '$id'"));

    ?>
    
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

echo"<form enctype=multipart/form-data method=post action=action/tambah-detail-alat-musik.php>"; ?>
               
                <div class="form-group">
                    <label>Nama Toko</label>
                    <input name="nama_toko" type="text" value="<?php echo $data1['nama_toko']; ?>" class="form-control" placeholder="nama toko" readonly="true" required="" style="width:80%;">
                </div>

                <input name="id_toko" type="text" value="<?php echo $_GET['id']; ?>" hidden="true">
                <input name="id_alatmusik" id="id_alatmusik" type="text" hidden="true">

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

                <div class="form-group">
                  <label>Harga Alat Musik</label>
                  <input name="harga" id="harga" type="number" class="form-control" placeholder="Harga Alat Musik" required="" style="width:80%;">
                </div> 

                <div class="form-group">
                  <label>Keterangan Alat Musik</label>
                  <textarea name="ket" id="ket" type="text" class="form-control"></textarea>
                </div>    
                <!-- /.box-body -->

                <div class="box-footer">
                  
                   <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i>&nbsp;Simpan</button>   
                <a href="" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
                </div>
                <br><br>
                <h3>Tabel Data Detail Alat Musik</h3>
                <table id="example" class="table table-striped table-bordered display" >
                  <thead>
                    <tr>
                     <tr>
                                <th width="5%">No</th>
                                <th width="25%">Nama Alat Musik</th>
                                <th width="27%">Merek</th>
                                <th width="35%">Jenis Alat Musik</th>
                                <th width="35%">Produksi</th>
                                <th width="27%">Harga</th>
                                <th width="10%">Keterangan</th>
                                <th > Tambah Gambar </th>
                                <th> - </th>
                              </tr>
                    </tr>
                  </thead>

                  <tbody>
                      <?php
                      include 'action/koneksi.php';
                      $no=1;
                      $query=mysqli_query($conn,"SELECT * from tbl_detailtoko where id_toko='$_GET[id]'");
                      while($r=mysqli_fetch_assoc($query)){
                      $rr=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from tbl_alatmusik where id_alatmusik='$r[id_alatmusik]'"));
                      ?>
                    <tr style="background: white">
                      <td><?php echo $no ?></td>
                   
                                <td><?php echo $rr['nama_alatmusik'] ?></td>
                                <td><?php echo $rr['merek'] ?></td>
                                <td><?php echo $rr['jenis_alatmusik'] ?></td>
                                <td><?php echo $rr['produksi'] ?></td>
                                <td>Rp. <?php echo $r['harga'] ?></td>
                                <td><?php echo $r['keterangan'] ?></td>

                       <td>               
                         <a href='?page=tambah-gambar&id=<?php echo $r['id_detailtoko'] ?>' class=" btn btn-success btn-xs" ><i class="ico fa fa-home"></i> Tambah Gambar</a>
                      </td>
                         
                           <td>
                      <a href='action/tempat_delete2.php?id_detailtoko=<?php echo $r['id_detailtoko'] ?>&id_toko=<?php echo $_GET['id'] ?>' class="delete btn btn-circle  btn-danger btn-xs" ><i class="ico fa fa-trash"></i></a>
                      &nbsp;<a href='?page=edit-alat-musik&id_detailtoko=<?php echo base64_encode($r['id_detailtoko']) ?>&id_toko=<?php echo $_GET['id'] ?>' class="btn btn-circle  btn-success btn-xs" ><i class="ico fa fa-edit"></i></a>
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

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Data Alat Musik</h4>
        </div>
        <div class="modal-body">
        <table id="example" class="table table-striped table-bordered display" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Alat Musik</th>
            <th>Jenis Alat Musik</th>
            <th>Merek</th>
            <th>Produksi</th>
            <th>--</th>
          </tr>
        </thead>
        <tbody>
            <?php
            include 'action/koneksi.php';
            $no=1;
              $query=mysqli_query($conn,"SELECT * from tbl_alatmusik order by id_alatmusik DESC");

            while($data=mysqli_fetch_assoc($query)){
            ?>
          <tr id="data" onClick="masuk(this,'<?php echo $data['id_alatmusik']; ?>,<?php echo $data['nama_alatmusik']; ?>,<?php echo $data['jenis_alatmusik']; ?>,<?php echo $data['merek']; ?>,<?php echo $data['produksi']; ?>')" href="javascript:void(0)">
          <td><?php echo $no; ?></td>
            <td><?php echo $data['nama_alatmusik'] ?></td>
            <td><?php echo $data['jenis_alatmusik'] ?></td>
            <td><?php echo $data['merek'] ?></td>
            <td><?php echo $data['produksi'] ?></td>
            <td>
            <a href='action/alat-musik-hapus.php?id=<?php echo $data['id_alatmusik'] ?>' class="delete btn btn-circle  btn-danger btn-xs" ><i class="ico fa fa-trash"></i></a>
            &nbsp;<a href='?page=ubah-alat-musik&id=<?php echo base64_encode($data['id_alatmusik']) ?>' class="btn btn-circle  btn-success btn-xs" ><i class="ico fa fa-edit"></i></a>
            </td>
          </tr><?php $no++; } ?>
        </tbody>
      </table>
</div>
</div>
</div>
</div>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript">
  $(".alatmusik").focusin(function() {
    $("#myModal").modal('show'); // ini fungsi untuk menampilkan modal
  });

  function masuk(txt, data) {
    var a = data.split(",");
    document.getElementById('id_alatmusik').value = a[0];
    document.getElementById('nama_alat_musik').value = a[1];
    document.getElementById('merek').value = a[2];
    document.getElementById('jenis_alatmusik').value = a[3];
    document.getElementById('produksi').value = a[4];
    $("#myModal").modal('hide'); // ini berfungsi untuk menyembunyikan modal
  }
  
</script>