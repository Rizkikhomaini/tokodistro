<div class="row small-spacing">
  <div class="col-xs-12">
    <div class="box-content">
      <h4 class="box-title">Daftar Komentar</h4>
      <div class="dropdown js__drop_down">
       
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
      <div class="table-responsive">
      <table id="example" class="table table-striped table-bordered display" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Saran</th>
            <th>--</th>
          </tr>
        </thead>
        <tbody>
            <?php
            include 'action/koneksi.php';
            $no=1;
            $query=mysqli_query($conn,"SELECT * from tbl_komentar");
            while($data=mysqli_fetch_assoc($query)){
            ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['tgl'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td><?php echo $data['komentar'] ?></td>
            <td>

                <a href='action/komentar-hapus.php?id=<?php echo $data['id_komentar'] ?>' class="delete btn btn-circle  btn-danger btn-xs" ><i class="ico fa fa-trash"></i></a>


              </td>
          </tr><?php $no++; } ?>
        </tbody>
      </table></div>
    </div>
    <!-- /.box-content -->
  </div>

</div>
