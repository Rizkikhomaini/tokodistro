

<!-- MODAL TAMBAH Dokter-->
<div class="modal fade" id="tambahdokter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
      <form class="form-horizontal" action="action/dokter-simpan.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
  				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  				<h4 class="modal-title" id="myModalLabel">Tambah Dokter</h4>
  			</div>
  			<div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
						
							<div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Nama dokter</label>
                <div class="col-sm-10">
                  <input type="text" id="#" name="nama_dokter" required="" class="required form-control">
                </div>
              </div>
							<div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Spesialis</label>
                <div class="col-sm-10">
                  <input type="text" id="#" name="spesialis" required="" class="required form-control">
                </div>
              </div>
                 <div class="form-group">
                <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
                <div class="col-sm-9">
                  <select name="jenis_kelamin" class="required form-control"  required="">
                 <option value="Laki-Laki">Laki-Laki</option>
                   <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
  			<div class="modal-footer">
  				<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
  				<button type="submit" class="btn btn-primary btn-sm">Save</button>
  			</div>
      </form>
		</div>
	</div>
</div>

<!-- Tambah dokter tempat -->

<div class="modal fade" id="tambahtempatpraktik" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-horizontal" action="action/tempatdokter-simpan.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Tambah Tempat Praktik Dokter</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
              
           
            
              <div class="form-group">
                <label class="col-sm-2 control-label"> Nama Dokter</label>
                <div class="col-sm-9">
                  <select name="dokter" class="required form-control" required="">
             
                    <?php
                    include 'action/koneksi.php';
                    $no=0;
                    $querypene=mysqli_query($conn,"SELECT * from tbl_d_spesialis ");

                    while($datapene=mysqli_fetch_assoc($querypene)){
                    ?>
                    <option value="<?php echo $datapene['id_dokter'] ?>"><?php echo $datapene['nama'] ?> / <?php echo $datapene['spesialis'] ?> </option>
                  <?php } ?>
                  </select>
                </div>
              </div>

               <div class="form-group">
                <label  class="col-sm-2 control-label"> Tempat Praktik</label>
                <div class="col-sm-9">
                  <select name="tempat" class="required form-control" required="">
             
                    <?php
                    include 'action/koneksi.php';
                    $no=0;
                    $querypene=mysqli_query($conn,"SELECT * from tempat_praktik ");

                    while($datapene=mysqli_fetch_assoc($querypene)){
                    ?>
                    <option value="<?php echo $datapene['id_praktik'] ?>"><?php echo $datapene['nama_tempat'] ?> / <?php echo $datapene['alamat'] ?> </option>
                  <?php } ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label  class="col-sm-2 control-label">Jam Praktek</label>
                <div class="col-sm-10">
                  <input type="text" id="#" name="jam" required="" class="required form-control">
                </div>
              </div>


              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Hari Praktik</label>
                <div class="col-sm-10">
                  <input type="text" id="#" name="hari" required="" class="required form-control">
                </div>
              </div>

           
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- modal selesai -->


<!-- MODAL TAMBAH Orang Tua-->
<div class="modal fade" id="tambahorangtua" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-horizontal" action="action/orangtua-input.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Tambah Orang Tua</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">

               <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Nik</label>
                <div class="col-sm-10">
                  <input type="number"  id="user" name="nik" required="" class="required form-control">
                  <span id="username_status"></span>
                </div>
              </div>

              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Nama Orang Tua</label>
                <div class="col-sm-10">
                  <input type="text"  name="nama_orangtua" required="" class="required form-control">
                </div>
              </div>

            

              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-9">
                    <select name="status" class="required form-control" id="pakaian" required="">
              
                    <option value="Ayah">Ayah</option>
                    <option value="Ibu">Ibu</option>
                  </select>
                </div>
              </div>


              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">No Telpon</label>
                <div class="col-sm-10">
                  <input type="number"  name="no_telp" class="required form-control" maxlength="14">
                </div>
              </div>
            
              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-10">
                  <textarea name="alamat" rows="8" cols="80"></textarea>
                </div>
              </div>

                  <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input type="date"  name="tgl_lahir" required="" class="required form-control">
                </div>
              </div>

              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Pekerjaan</label>
                <div class="col-sm-10">
                  <input type="text" name="pekerjaan" class="required form-control">
                </div>
              </div>

                <div class="form-group">
                <label class="col-sm-2 control-label">Nis/Nama Siswa</label>
                <div class="col-sm-9">
                  <select name="nama_siswa" class="required form-control" required="">
                    
                    <?php
                    include 'action/koneksi.php';
                    $no=0;
                      $querypeng=mysqli_query($conn,"SELECT * from tb_siswa ");

                    while($datapeng=mysqli_fetch_assoc($querypeng)){
                    ?>
                    <option value="<?php echo $datapeng['id'] ?>"><?php echo $datapeng['nis'] ?> / <?php echo $datapeng['nama_lengkap'] ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>
            
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- modal selesai -->

<!-- MODAL TAMBAH lbse -->
<div class="modal fade" id="tambahlbse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-horizontal" action="action/lbse-input.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Tambah Latar Belakang Sosial Ekonomi (LBSE)</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">

               <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Kode Keluarga</label>
                <div class="col-sm-10">
                  <input type="text" name="kode_keluarga" required="" class="required form-control">
                 
                </div>
              </div>

              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Nama Kepala Keluarga</label>
                <div class="col-sm-10">
                  <input type="text"  name="nama_kep_kel" required="" class="required form-control">
                </div>
              </div>
            
              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-10">
                     <textarea name="alamat" rows="8" cols="80"></textarea>
                </div>
              </div>

              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Keadaan Tempat Tinggal</label>
                <div class="col-sm-10">
                  <input type="text"  name="keadaan_tempat_tinggal" class="required form-control" >
                </div>
              </div>

               <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Perlengkapan</label>
                <div class="col-sm-10">
                  <input type="text"  name="perlengkapan" class="required form-control">
                </div>
              </div>

               <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Pekerjaan</label>
                <div class="col-sm-10">
                  <input type="text"  name="pekerjaan" class="required form-control" >
                </div>
              </div>

               <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Penghasilan</label>
                <div class="col-sm-10">
                  <input type="text"  name="penghasilan" class="required form-control">
                </div>
              </div>
            

                <div class="form-group">
                <label class="col-sm-2 control-label">Nis/Nama Siswa</label>
                <div class="col-sm-9">
                  <select name="nama_siswa" class="required form-control" required="">
                    
                    <?php
                    include 'action/koneksi.php';
                    $no=0;
                      $querypeng=mysqli_query($conn,"SELECT * from tb_siswa ");

                    while($datapeng=mysqli_fetch_assoc($querypeng)){
                    ?>
                    <option value="<?php echo $datapeng['id'] ?>"><?php echo $datapeng['nis'] ?> / <?php echo $datapeng['nama_lengkap'] ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>
            
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- modal selesai -->


<!-- MODAL TAMBAH PRESTASI -->
<div class="modal fade" id="tambahprestasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-horizontal" action="action/prestasi-input.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Tambah Prestasi</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">

               <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Kelas</label>
               <div class="col-sm-9">
                  <select name="kelas" class="required form-control" required="">
                    
                    <?php
                    include 'action/koneksi.php';
                    $no=0;
                      $querypeng=mysqli_query($conn,"SELECT * from tb_kelas ");

                    while($datapeng=mysqli_fetch_assoc($querypeng)){
                    ?>
                    <option value="<?php echo $datapeng['id'] ?>"><?php echo $datapeng['nama_kelas'] ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>

                <div class="form-group">
                <label class="col-sm-2 control-label">Nis/Nama Siswa</label>
                <div class="col-sm-9">
                  <select name="nama_siswa" class="required form-control" required="">
                    
                    <?php
                    include 'action/koneksi.php';
                    $no=0;
                      $querypeng=mysqli_query($conn,"SELECT * from tb_siswa ");

                    while($datapeng=mysqli_fetch_assoc($querypeng)){
                    ?>
                    <option value="<?php echo $datapeng['id'] ?>"><?php echo $datapeng['nis'] ?> / <?php echo $datapeng['nama_lengkap'] ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Jenis Prestasi</label>
                <div class="col-sm-10">
                  <input type="text"  name="jenis_prestasi" required="" class="required form-control">
                </div>
              </div>
            
              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Semester</label>
                <div class="col-sm-10">
                  <input type="text"  name="semester" required="" class="required form-control">
                </div>
              </div>

              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Peringkat</label>
                <div class="col-sm-10">
                  <input type="text"  name="peringkat" class="required form-control" >
                </div>
              </div>

            
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- modal selesai -->

<!-- MODAL TAMBAH KEHADIRAN-->
<div class="modal fade" id="tambahkehadiran" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-horizontal" action="action/kehadiran-input.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Tambah Kehadiran</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">

              <div class="form-group">
                <label class="col-sm-2 control-label">Nis/Nama Siswa</label>
                <div class="col-sm-9">
                  <select name="nis" class="required form-control" required="">
                    
                    <?php
                    include 'action/koneksi.php';
                    $no=0;
                      $querypeng=mysqli_query($conn,"SELECT * from tb_siswa ");

                    while($datapeng=mysqli_fetch_assoc($querypeng)){
                    ?>
                    <option value="<?php echo $datapeng['nis'] ?>"><?php echo $datapeng['nis'] ?> / <?php echo $datapeng['nama_lengkap'] ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-10">
                  <input type="date"  name="tanggal" required="" class="required form-control">
                </div>
              </div>


              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Semester</label>
                <div class="col-sm-10">
                  <input type="text"  name="semester" class="required form-control">
                </div>
              </div>
            
            <div class="form-group">
                <label  class="col-sm-2 control-label">Kelas</label>
               <div class="col-sm-9">
                  <select name="kelas" class="required form-control" required="">
                    
                    <?php
                    include 'action/koneksi.php';
                    $no=0;
                      $querypeng=mysqli_query($conn,"SELECT * from tb_kelas ");

                    while($datapeng=mysqli_fetch_assoc($querypeng)){
                    ?>
                    <option value="<?php echo $datapeng['id'] ?>"><?php echo $datapeng['nama_kelas'] ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Keterangan</label>
                <div class="col-sm-10">
                  <textarea name="keterangan" rows="8" cols="80"></textarea>
                </div>
              </div>

                  <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Jumlah Absen</label>
                <div class="col-sm-10">
                  <input type="text"  name="jumlah" required="" class="required form-control">
                </div>
              </div>

              
            
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- modal selesai -->

<!-- MODAL TAMBAH MINAT-->
<div class="modal fade" id="tambahminat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-horizontal" action="action/minat-input.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Tambah Minat</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">

                <div class="form-group">
                <label class="col-sm-2 control-label">Nis/Nama Siswa</label>
                <div class="col-sm-9">
                  <select name="nis" class="required form-control" required="">
                    
                    <?php
                    include 'action/koneksi.php';
                    $no=0;
                      $querypeng=mysqli_query($conn,"SELECT * from tb_siswa ");

                    while($datapeng=mysqli_fetch_assoc($querypeng)){
                    ?>
                    <option value="<?php echo $datapeng['nis'] ?>"><?php echo $datapeng['nis'] ?> / <?php echo $datapeng['nama_lengkap'] ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>


            <div class="form-group">
                <label  class="col-sm-2 control-label">Kelas</label>
               <div class="col-sm-9">
                  <select name="kelas" class="required form-control" required="">
                    
                    <?php
                    include 'action/koneksi.php';
                    $no=0;
                      $querypeng=mysqli_query($conn,"SELECT * from tb_kelas ");

                    while($datapeng=mysqli_fetch_assoc($querypeng)){
                    ?>
                    <option value="<?php echo $datapeng['id'] ?>"><?php echo $datapeng['nama_kelas'] ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="tanggal" class="col-sm-2 control-label">Tahun</label>
                <div class="col-sm-10">
                  <input type="date"  name="tanggal" required="" class="required form-control">
                </div>
              </div>


              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Nilai Raport</label>
                <div class="col-sm-10">
                  <input type="text"  name="nilai_raport" class="required form-control">
                </div>
              </div>
     


                  <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Pelajaran</label>
                <div class="col-sm-10">
                  <input type="text"  name="pelajaran" required="" class="required form-control">
                </div>
              </div>

              
            
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- modal selesai -->

<!-- MODAL TAMBAH PELANGGARAN-->
<div class="modal fade" id="tambahpelanggaran" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-horizontal" action="action/pelanggaran-input.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Tambah Pelanggaran</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">

                 <div class="form-group">
                <label class="col-sm-2 control-label">Nis/Nama Siswa</label>
                <div class="col-sm-9">
                  <select name="nis" class="required form-control" required="">
                    
                    <?php
                    include 'action/koneksi.php';
                    $no=0;
                      $querypeng=mysqli_query($conn,"SELECT * from tb_siswa ");

                    while($datapeng=mysqli_fetch_assoc($querypeng)){
                    ?>
                    <option value="<?php echo $datapeng['nis'] ?>"><?php echo $datapeng['nis'] ?> / <?php echo $datapeng['nama_lengkap'] ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>


            <div class="form-group">
                <label  class="col-sm-2 control-label">Kelas</label>
               <div class="col-sm-9">
                  <select name="kelas" class="required form-control" required="">
                    
                    <?php
                    include 'action/koneksi.php';
                    $no=0;
                      $querypeng=mysqli_query($conn,"SELECT * from tb_kelas ");

                    while($datapeng=mysqli_fetch_assoc($querypeng)){
                    ?>
                    <option value="<?php echo $datapeng['id'] ?>"><?php echo $datapeng['nama_kelas'] ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="tanggal" class="col-sm-2 control-label">Pelanggaran</label>
                <div class="col-sm-10">
                  <textarea name="pelanggaran" rows="8" cols="80"></textarea>
                </div>
              </div>


              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Keterangan</label>
                <div class="col-sm-10">
                  <textarea name="keterangan" rows="8" cols="80"></textarea>
                </div>
              </div>
     


                  <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Solusi</label>
                <div class="col-sm-10">
                  <textarea name="solusi" rows="8" cols="80"></textarea>
                </div>
              </div>

              
            
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- modal selesai -->

<!-- MODAL TAMBAH PANGGILAN-->
<div class="modal fade" id="tambahpanggilan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-horizontal" action="action/panggilan-input.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Tambah Panggilan</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">

                 <div class="form-group">
                <label class="col-sm-2 control-label">Nis / Nama Siswa</label>
               
                <div class="col-sm-9">
                   <span>Siswa Yang Melakukan Pelanggaran</span>
                  <select name="nis" class="required form-control" required="">
                    
                    <?php
                    include 'action/koneksi.php';
                    $no=0;
                      $querypeng=mysqli_query($conn,"SELECT a.*,b.* FROM tb_siswa AS a INNER JOIN tb_pelanggaran AS b ON a.nis=b.nis");

                    while($datapeng=mysqli_fetch_assoc($querypeng)){
                    ?>
                    <option value="<?php echo $datapeng['nis'] ?>"><?php echo $datapeng['nis'] ?> / <?php echo $datapeng['nama_lengkap'] ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>


              <div class="form-group">
                <label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-10">
                  <input type="date" id="#" name="tanggal" required="" class="required form-control">
                </div>
              </div>


              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Keterangan</label>
                <div class="col-sm-10">
                  <textarea name="keterangan" rows="8" cols="80"></textarea>
                </div>
              </div>

              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Jam</label>
                <div class="col-sm-10">
                   <input type="time"  name="jam" required="" class="required form-control">
                </div>
              </div>


              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Tempat</label>
                <div class="col-sm-10">
                   <input type="text"  name="tempat" required="" class="required form-control">
                </div>
              </div>

               <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">No Surat</label>
                <div class="col-sm-10">
                   <input type="text"  name="no_surat" required="" class="required form-control">
                </div>
              </div>

              
            
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- modal selesai -->

<!-- MODAL TAMBAH AKUN-->
<div class="modal fade" id="tambahakun" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
      <form class="form-horizontal" action="action/akun-input.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
  				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  				<h4 class="modal-title" id="myModalLabel">Tambah Akun</h4>
  			</div>
  			<div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
							<div class="form-group">
								<label for="nisn" class="col-sm-2 control-label">Kode Akun</label>
								<div class="col-sm-10">
									<input type="number" id="#" name="kd_akun" required="" class="required form-control">
								</div>
							</div>
							<div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Nama Akun</label>
                <div class="col-sm-10">
                  <input type="text" id="#" name="nm_akun" required="" class="required form-control">
                </div>
              </div>
							<div class="form-group">
								<label for="pakaian" class="col-sm-2 control-label">Jenis Akun</label>
								<div class="col-sm-9">
									<select name="jenis_akun" class="required form-control" id="pakaian" required="">
										<option></option>
										<option value="pengeluaran">Pengeluaran</option>
										<option value="penerimaan">Penerimaan</option>
									</select>
								</div>
							</div>
            </div>
          </div>
        </div>
  			<div class="modal-footer">
  				<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
  				<button type="submit" class="btn btn-primary btn-sm">Save</button>
  			</div>
      </form>
		</div>
	</div>
</div>
<!-- modal selesai -->

<!-- MODAL TAMBAH Pendidikan-->
<div class="modal fade" id="tambahpendidikan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
      <form class="form-horizontal" action="action/pendidikan-input.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
  				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  				<h4 class="modal-title" id="myModalLabel">Tambah Pendidikan</h4>
  			</div>
  			<div class="modal-body">
          <div class="row">
            <div class="col-sm-12">



              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Kode Pendidikan</label>
                <div class="col-sm-10">
                  <input type="text" id="#" name="kode_pendidikan" required="" class="required form-control">
                </div>
              </div>

							<div class="form-group">
								<label class="col-sm-2 control-label">Nis/Nama Siswa</label>
								<div class="col-sm-9">
									<select name="nis" class="required form-control" required="">
										
										<?php
										include 'action/koneksi.php';
				            $no=0;
				              $querypeng=mysqli_query($conn,"SELECT * from tb_siswa ");

				            while($datapeng=mysqli_fetch_assoc($querypeng)){
				            ?>
										<option value="<?php echo $datapeng['nis'] ?>"><?php echo $datapeng['nis'] ?> / <?php echo $datapeng['nama_lengkap'] ?></option>
									<?php } ?>
									</select>
								</div>
							</div>


              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Nama Sekolah</label>
                <div class="col-sm-10">
                  <input type="text"  name="nama_sekolah" required="" class="required form-control">
                </div>
              </div>


              <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Keterangan Pindah</label>
                <div class="col-sm-10">
                  <input type="text"  name="ket_pindah" class="required form-control">
                </div>
              </div>
						
							<div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Tahun Masuk</label>
                <div class="col-sm-10">
                  <input type="date"  name="thn_masuk" required="" class="required form-control">
                </div>
              </div>

                  <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Tahun Lulus</label>
                <div class="col-sm-10">
                  <input type="date"  name="thn_lulus" required="" class="required form-control">
                </div>
              </div>

                 <div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Tinggal Kelas</label>
                <div class="col-sm-10">
                  <input type="text" name="tinggal_kelas" class="required form-control">
                </div>
              </div>

							<div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Lama Belajar</label>
                <div class="col-sm-10">
                  <input type="number"  name="lama_belajar" required="" class="required form-control">
                </div>
              </div>
						
						
						</div>
          </div>
        </div>
  			<div class="modal-footer">
  				<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
  				<button type="submit" class="btn btn-primary btn-sm">Save</button>
  			</div>
      </form>
		</div>
	</div>
</div>
<div class="modal  fade" id="lihatpeng" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">

			<div class="Detail-pengeluaran">

			</div>
		</div>
	</div>
</div>

<!-- modal selesai -->

<!-- MODAL TAMBAH kas kecil-->
<div class="modal fade" id="tambahkkecil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
      <form class="form-horizontal" action="action/kaskecil-input.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
  				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  				<h4 class="modal-title" id="myModalLabel">Tambah Kas Kecil</h4>
  			</div>
  			<div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
							<div class="form-group">
								<label for="pakaian" class="col-sm-2 control-label">Status</label>
								<div class="col-sm-9">
									<select name="ket" class="required form-control" id="pakaian" required="">
										<option></option>
										<option value="pengeluaran">Pengeluaran</option>
										<option value="pengisian">pengisian</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-9">
										<input type="hidden" name="kd_user" class="required form-control" id="jml_hari" value="<?php echo $user['kd_karyawan'] ?>">
								</div>
							</div>
							<div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Rincian</label>
                <div class="col-sm-10">
                  <input type="text" id="#" name="rincian" required="" class="required form-control">
                </div>
              </div>
							<div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-10">
                  <input type="text" id='tgl-kaskecil' name="tgl-kaskecil" required="" class="required form-control">
                </div>
              </div>
							<div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Debit</label>
                <div class="col-sm-10">
                  <input type="number" id="#" name="debit" required="" class="required form-control">
                </div>
              </div>

							<div class="form-group">
                <label for="nisn" class="col-sm-2 control-label">Kredit</label>
                <div class="col-sm-10">
                  <input type="number" id="#" name="kredit" required="" class="required form-control">
                </div>
              </div>
            </div>
          </div>
        </div>
  			<div class="modal-footer">
  				<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
  				<button type="submit" class="btn btn-primary btn-sm">Save</button>
  			</div>
      </form>
		</div>
	</div>
</div>
<!-- modal selesai -->
<!-- MODAL TAMBAH ADMIN-->
<div class="modal fade" id="tambahadmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
      <form class="form-horizontal" action="action/adm-input.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
  				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  				<h4 class="modal-title" id="myModalLabel">Tambah Data Admin</h4>
  			</div>
  			<div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
							<div class="form-group">
								<label for="id" class="col-sm-2 control-label">NIP</label>
								<div class="col-sm-9">
									<input type="text" id="id" name="kd" required="" class="required form-control">
								</div>
							</div>
								<div class="form-group">
								  <label for="id" class="col-sm-2 control-label">Nama</label>
								  <div class="col-sm-9">
								    <input type="text" id="id" name="nama" required="" class="required form-control">
								  </div>
								</div>
								<div class="form-group">
									<label for="pakaian" class="col-sm-2 control-label">Jabatan</label>
									<div class="col-sm-9">
										<select name="jabatan" class="required form-control" id="pakaian" required="">
											<option></option>
											<option value="admin">Admin</option>
											<option value="resepsionis">Resepsionis</option>
											<option value="Pimpinan">Pimpinan</option>
										</select>
									</div>
								</div>
								<div class="form-group">
								  <label for="id" class="col-sm-2 control-label">Email</label>
								  <div class="col-sm-9">
								    <input type="email" id="id" name="email" required="" class="required form-control">
								  </div>
								</div>
								<div class="form-group">
								  <label for="id" class="col-sm-2 control-label">Username</label>
								  <div class="col-sm-9">
								    <input type="text" id="id" name="username" required="" class="required form-control">
								  </div>
								</div>
								<div class="form-group">
								  <label for="id" class="col-sm-2 control-label">Password</label>
								  <div class="col-sm-9">
								    <input type="password" id="id" name="pass" required="" class="required form-control">
								  </div>
								</div>
							</div>
						</div>
					</div>
  			<div class="modal-footer">
  				<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
  				<button type="submit" class="btn btn-primary btn-sm">Save</button>
  			</div>
      </form>
		</div>
	</div>
</div>

<!-- Tambah hotel tempat -->

<div class="modal fade" id="tambahhotel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="form-horizontal" action="action/hotel-simpan.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Tambah Hotel</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
              
           
            
              <div class="form-group">
                    <label>Nama Hotel</label>
                    <input name="nama_hotel" type="text" class="form-control" placeholder="nama hotel" required="" style="width:80%;">
                    </div>
              

                <div class="form-group">
                  <label>Alamat</label>
                  <input name="alamat" type="text" class="form-control" placeholder="alamat" required="" style="width:80%;">
                </div>
                

                <div class="form-group">
                    <label>Nomor Telpon</label>
                     <input name="nomor_telpon" type="number" class="form-control" placeholder="nomor telpon" required="" style="width:80%;">
                  </div>
               

              
                <!-- /.box-body -->
                <input name="md" value="1" type="text" hidden="true">
           
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

