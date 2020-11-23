<?php ;
$tgl_sekarang=date("Y-m-d");
?>
<div class="row small-spacing">
  <div class="col-lg-3 col-md-6 col-xs-12">
    <div class="box-content bg-success text-white">
      <div class="statistics-box with-icon">
        <i class="ico small fa fa-home"></i>
        <p class="text text-white">Total toko</p>
        <h2 class="counter">  <?php
        $w=mysqli_query($conn,"SELECT * From tbl_toko ");
        $isi=mysqli_num_rows($w);
        echo $isi;
         ?> 
       </h2>
      </div>
    </div>
    <!-- /.box-content -->
  </div>

   <div class="col-lg-3 col-md-6 col-xs-12">
    <div class="box-content bg-success text-white">
      <div class="statistics-box with-icon">
        <i class="ico small fa fa-star"></i>
        <p class="text text-white">Total Rating</p>
        <h2 class="counter">  <?php
        $toko=mysqli_query($conn,"SELECT * From item_rating ");
        $isi2=mysqli_num_rows($toko);
        echo $isi2;
         ?> 
       </h2>
      </div>
    </div>
    <!-- /.box-content -->
  </div>


   <div class="col-lg-3 col-md-6 col-xs-12">
    <div class="box-content bg-success text-white">
      <div class="statistics-box with-icon">
        <i class="ico small fa fa-comment"></i>
        <p class="text text-white">Total Komentar</p>
        <h2 class="counter">  <?php
        $comment=mysqli_query($conn,"SELECT * From tbl_komentar ");
        $isi3=mysqli_num_rows($comment);
        echo $isi3;
         ?> 
       </h2>
      </div>
    </div>
    <!-- /.box-content -->
  </div>
  <!-- /.col-lg-3 col-md-6 col-xs-12 -->

  <!-- /.col-lg-3 col-md-6 col-xs-12 -->
</div>

