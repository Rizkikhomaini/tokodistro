<div class="row row-inline-block small-spacing">
  <div class="col-xs-12">
    <div class="box-content">
       <h4 class="box-title"></h4>
       <br>
      <div class="dropdown js__drop_down">
      <a class="btn btn-xs btn-primary btn-bordered" href="?page=tambah-toko" ><i class="fa fa-plus"></i></a>
        
     
        <!-- /.sub-menu -->
      </div>
           <div class="table-responsive">
      <!-- /.dropdown js__dropdown -->
      <table id="example" class="table table-striped table-bordered display" >
        <thead>
          <tr>
           <tr>
                      <th width="5%">No</th>
                      <th width="25%">Nama Toko</th>
                      <th width="27%">Alamat</th>
                      <th width="35%">Longitude</th>
                      <th width="35%">Latitude</th>
                      <th width="27%">No Telpon</th>
                      <th width="10%">Email</th>
                      <th width="10%">Pemilik</th>
                      <th width="10%">Medsos</th>
                      <th width="10%">Jam Buka</th>
                      <th width="10%">Jam Tutup</th>
                      <?php if ($_SESSION['level'] == "Admin"){ ?>
                      <th> - </th>
                    <?php } ?>
                    </tr>
          </tr>
        </thead>

        <tbody>
            <?php
            include 'action/koneksi.php';
            $no=1;
            $query=mysqli_query($conn,"SELECT * from tbl_toko");
            while($r=mysqli_fetch_assoc($query)){
            
            ?>
          <tr style="background: white">
            <td><?php echo $no ?></td>
         
                      <td><?php echo $r['nama_toko'] ?></td>
                      <td><?php echo $r['alamat'] ?></td>
                      <td><?php echo $r['Lat'] ?></td>
                      <td><?php echo $r['Lng'] ?></td>
                      <td><?php echo $r['no_telp'] ?></td>
                      <td><?php echo $r['email'] ?></td>
                      <td><?php echo $r['Pemilik'] ?></td>
                      <td><?php echo $r['medsos'] ?></td>
                      <td><?php echo $r['buka'] ?></td>
                      <td><?php echo $r['tutup'] ?></td>

             <!--td>               
               <a href='?page=tambah-detail-alatmusik&id=<?php //echo $r['id_toko'] ?>' class=" btn btn-success btn-xs" ><i class="ico fa fa-home"></i> Tambah Alat Musik</a>
            </td-->
               <?php if ($_SESSION['level'] == "Admin"){ ?>
                 <td>
            <a href="action/toko_hapus.php?id_toko=<?php echo $r['id_toko'] ?>" class="delete btn btn-circle  btn-danger btn-xs" ><i class="ico fa fa-trash"></i></a>
            &nbsp;<a href='?page=edit_toko&id=<?php echo base64_encode($r['id_toko']) ?>' class="btn btn-circle  btn-success btn-xs" ><i class="ico fa fa-edit"></i></a>
            </td>
          <?php } ?>

          </tr><?php $no++; } ?>
        </tbody>
      </table></div>
    </div>
    <!-- /.box-content -->
  </div>

</div>
