<div class="row row-inline-block small-spacing">
  <div class="col-xs-12">
    <div class="box-content">
      <h4 class="box-title">Alat Musik</h4>
      <div class="dropdown js__drop_down">

	
        <button type="button" data-remodal-target="eremodal" class="btn btn-xs btn-primary btn-bordered" data-toggle="modal" data-target="#tambahalatmusik"><i class="ico ico-left fa fa-plus"></i> Tambah Data</button>

        <!-- <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button">tambah </a>
        <ul class="sub-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else there</a></li>
          <li class="split"></li>
          <li><a href="#">Separated link</a></li>
        </ul> -->
        <!-- /.sub-menu -->
      </div>
      <!-- /.dropdown js__dropdown -->
      <table id="example" class="table table-striped table-bordered display" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Alat Musik</th>
            <th>Jenis Alat Musik</th>
            <th>Merek</th>
            <th>Produksi</th>
            <?php if($_SESSION['level'] == "Admin"){ ?>
            <th>--</th>
            <?php } ?>
          </tr>
        </thead>

        <tbody>
            <?php
            include 'action/koneksi.php';
            $no=1;
              $query=mysqli_query($conn,"SELECT * from tbl_alatmusik order by id_alatmusik DESC");

            while($data=mysqli_fetch_assoc($query)){
            ?>
          <tr>
          <td><?php echo $no; ?></td>
            <td><?php echo $data['nama_alatmusik'] ?></td>
            <td><?php echo $data['jenis_alatmusik'] ?></td>
            <td><?php echo $data['merek'] ?></td>
            <td><?php echo $data['produksi'] ?></td>
            <?php if($_SESSION['level'] == "Admin"){ ?>
            <td>

             <a href="action/alatmusik-hapus.php?id_alatmusik=<?php echo $data['id_alatmusik'] ?>" class="delete btn btn-circle  btn-danger btn-xs" ><i class="ico fa fa-trash"></i></a>

            &nbsp;<a href='?page=ubah-alat-musik&id=<?php echo base64_encode($data['id_alatmusik']) ?>' class="btn btn-circle  btn-success btn-xs" ><i class="ico fa fa-edit"></i></a>
            </td><?php } ?>
          </tr><?php $no++; } ?>
        </tbody>
      </table>
    </div>
    <!-- /.box-content -->
  </div>

</div>
