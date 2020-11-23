<div class="row row-inline-block small-spacing">
  <div class="col-xs-12">
    <div class="box-content">
      <h4 class="box-title">Validasi Kas</h4>
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
      <table id="example" class="table table-striped table-bordered display" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Prihal</th>
            <th>Keterangan</th>
            <th>jumlah</th>
            <th>--</th>
          </tr>
        </thead>

        <tbody>
            <?php
            include 'action/koneksi.php';
            $no=0;
            $query=mysqli_query($conn,"SELECT * from tbl_kas where ketapp='N' order by tgl_kas DESC");
            while($data=mysqli_fetch_assoc($query)){
              $no++;
              $sttapp=$data['ketapp'];
            ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data['tgl_kas'] ?></td>
            <td><?php echo $data['prihal'] ?></td>
            <td><?php echo $data['ket_kas'] ?></td>
            <td>Rp. <?php echo number_format($data['jml_kas'],0,".",".") ?></td>
            <td>
              <a href='#lihatpeng' class="btn  btn-danger btn-xs" id='custId' data-toggle='modal' data-id="<?php echo $data['kd_kas'] ?>">Detail</a>

              
            </td>

          </tr><?php } ?>
        </tbody>
      </table>
    </div>
    <!-- /.box-content -->
  </div>

</div>
