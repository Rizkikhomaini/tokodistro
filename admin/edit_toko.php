<style type="text/css">
      #map { height: 400px; }
    </style>


<style>

      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
    </style>            
 <?php 
 include ('action/koneksi.php');
  
  if(isset($_GET['id']) && $_SESSION['level'] == "Admin") {
   
   $id=base64_decode($_GET['id']); 

    //baris dibawah ini disesuaikan dengan nama tabel dan idtabelnya
   $sql=mysqli_query($conn,"SELECT * from tbl_toko where id_toko = '$id' ");

    $data = mysqli_fetch_object($sql);
    $id_usr = $data->id_user;
    if($id_usr != ""){
      $usr=mysqli_fetch_object(mysqli_query($conn,"SELECT * from tbl_user where id_user = '$id_usr' "));
     
    }
  }
  ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Cpanel</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
             <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Data Toko</h3>
                </div>
                <!-- /.box-header -->
               
                <div class="box-body">
                <?php

echo"
<form enctype=multipart/form-data method=post action=action/toko_edit.php>";
?>
                  <div class="form-group">

                  

                
             
                    <input name="nama_toko" type="text" class="form-control " placeholder="Toko" value= "<?php echo $data->nama_toko ?>" required="" style="width:50%;">
                     <input name="id_toko" type="hidden" class="form-control"  value= "<?php echo $id; ?>" required="" style="width:50%;">
                     <input name="ss" value="<?php echo $_SESSION['level']; ?>" type="text" hidden="true"> 
                    <label>Lokasi Toko</label>
        

<input id="pac-input" class="controls" type="text"
        placeholder="Lokasi">
<div id="map"></div>
    <script type="text/javascript">
var map;
        var marker;

        function initMap() {                           
            var latitude = -5.406402782175128; // YOUR LATITUDE VALUE
            var longitude = 105.26090029248462; // YOUR LONGITUDE VALUE
            
            var myLatLng = {lat: latitude, lng: longitude};
            
            map = new google.maps.Map(document.getElementById('map'), {
              center: myLatLng,
              zoom: 14,
              disableDoubleClickZoom: true, // disable the default map zoom on double click
            });
            
            // Update lat/long value of div when anywhere in the map is clicked    
            
            
            // Update lat/long value of div when you move the mouse over the map
       
                    
            //var marker = new google.maps.Marker({
              //position: myLatLng,
              //map: map,
              //title: 'Hello World'
              
              // setting latitude & longitude as title of the marker
              // title is shown when you hover over the marker
              //title: latitude + ', ' + longitude 
           // });    
            
            // Update lat/long value of div when the marker is clicked
            
            
            // Create new marker on double click event on the map
            
            google.maps.event.addListener(map,'dblclick',function(event) {
             
                if (marker && marker.setMap) {
                  marker.setMap(null);
                }
                marker = new google.maps.Marker({
                  position: event.latLng, 
                  map: map, 
                  title: event.latLng.lat()+', '+event.latLng.lng()
                });
                
                // Update lat/long value of div when the marker is clicked
                $("#lat").val(event.latLng.lat());
                $("#long").val(event.latLng.lng());
                          
            });
            
            // Create new marker on single click event on the map
            /*google.maps.event.addListener(map,'click',function(event) {
                var marker = new google.maps.Marker({
                  position: event.latLng, 
                  map: map, 
                  title: event.latLng.lat()+', '+event.latLng.lng()
                });                
            });*/
        }

    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoilQqu_Iz-1B_zzqvbxJB3HC8ScFjZ8E&callback=initMap" async defer></script>

        </div>


              <div class="form-group">
                  <label>Latittude</label>
                  <input name="lat" type="text" value= "<?php echo $data->Lat ?>" id="lat" class="form-control" placeholder="Latittude" required="" 
                 >
                 </div>
                <div class="form-group">
                  <label>Longitude</label>
                  <input name="long" type="text" id="long" value= "<?php echo $data->Lng ?>" class="form-control" placeholder="Longitute" required=""
               >
                </div>
              
                  
                    <div class="form-group">
                  <label>No Telpon</label>
                  <input name="no_telp" type="input" id="no_telp"  class="form-control" placeholder="No Telpon" required="" value= "<?php echo $data->no_telp ?>">
                </div>

                <div class="form-group">
                  <label>Pemilik</label>
                  <input name="pemilik" type="text" id="pemilik"  class="form-control" placeholder="" required="" value= "<?php echo $data->Pemilik ?>">
                </div>

               <div class="form-group">
                  <label>Sosial Media</label>
                  <textarea name="medsos" ><?php echo $data->medsos ?></textarea>
                </div>
                
                     <div class="form-group">
                  <label>Email</label>
                  <input name="email" type="text"   class="form-control" placeholder="" required=""  value= "<?php echo $data->email ?>">
                </div>
                  <div class="form-group">
                    <label>Alamat</label>
                       <textarea name="alamat" rows="8" cols="80"><?php echo $data->alamat ?> </textarea>
                
                  </div>

                  <div class="form-group">
                    <label>Jam Buka</label>
                   <input name="jam_buka" type="input"  class="form-control" placeholder="" required=""
                value= "<?php echo $data->buka ?>">
                  </div>

                  <div class="form-group">
                    <label>Jam Tutup</label>
                   <input name="jam_tutup" type="input"  class="form-control" placeholder="" required=""
                value= "<?php echo $data->tutup ?>">
                  </div>

                  

                </div>
    

                <div class="box-footer">
                  <button name="simpan" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Edit</button>
                <a href="?page=daftar_toko" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
                </div>
                </form>
              </div>
              <!-- /.box -->
            </div>
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

<?php if($_SESSION['level'] == "Admin"){ ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Data User</h4>
        </div>
        <div class="modal-body">
         <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th width="20%">Username</th>
                      <th width="28%">Nama</th>
                      <th width="15%">Level</th>
                    </tr>
                    </thead>
                     <tbody>
                    <?php $no=1;  
                      $query1=mysqli_query($conn,"SELECT * from tbl_user");
                      while($rx=mysqli_fetch_assoc($query1)){

                     ?>
                    <tr id="data" onClick="masuk(this,'<?php echo $rx['id_user']; ?>,<?php echo $rx['nama']; ?>')" href="javascript:void(0)">
                      <td><?php echo $no; ?></td>
                      <td><?php echo $rx['username'] ?></td>
                      <td><?php echo $rx['nama'] ?></td>
                      <td><?php echo $rx['level'] ?></td>
                    </tr>
                    <?php $no++; } ?>
                  </tbody> 
                </table> 
              </div>
</div>
</div>
</div>
</div>
<?php } ?>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript">
   $(".pilihuser").focusin(function() {
    $("#myModal").modal('show'); // ini fungsi untuk menampilkan modal
  });

  function masuk(txt, data) {
    var a = data.split(",");
    document.getElementById('id_user').value = a[0];
    document.getElementById('nama').value = a[1];
    $("#myModal").modal('hide'); // ini berfungsi untuk menyembunyikan modal
  }
  
</script>
