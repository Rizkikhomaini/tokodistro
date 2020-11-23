<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoilQqu_Iz-1B_zzqvbxJB3HC8ScFjZ8E&callback=initMap" async defer></script>
 
</script>
<style type="text/css">
  body{

  }
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
      #target {
        width: 345px;
      }
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
var peta;
var pertama = 0;
var jenis = "banjir";
var judulx = new Array();
var desx = new Array();
var provx = new Array();
var bencanax = new Array();
var id_infox = new Array();

var korbanx = new Array();
var penyebabx = new Array();
var tglx = new Array();

var koorx = new Array();
var koory = new Array();

var i;
var url;
var gambar_tanda;
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;

function initAutocomplete(){
    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
    var jakarta = new google.maps.LatLng(-5.406402782175128, 105.26090029248462);
    var petaoption = {
        zoom: 14,
        center: jakarta,
        mapTypeId: google.maps.MapTypeId.ROADMAP
        };
    peta = new google.maps.Map(document.getElementById("petaku"),petaoption);
    google.maps.event.addListener(peta,'click',function(event){
        kasihtanda(event.latLng);
       
    });

    ambildatabase('awal');
    directionsDisplay.setMap(map);

    // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        peta.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        peta.addListener('bounds_changed', function() {
          searchBox.setBounds(peta.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
          marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: petaku,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));
            var a = $("#x").val();
            if(a==""){
            $("#x").val(place.geometry.location.lat());
            $("#y").val(place.geometry.location.lng());
            }else{
            $("#z").val(place.geometry.location.lat());
            $("#a").val(place.geometry.location.lng());
            }
            var asal =  $("#asal").val();
            if(asal==""){
              $("#asal").val(place.name);
            }else{
               $("#tujuan").val(place.name);
            }
            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          peta.fitBounds(bounds);
        });
  
  /*untuk tgl*/
  new JsDatePick({
    useMode:2,
    target:"tgl",
    dateFormat:"%Y-%m-%d"
  });
}


function klik(){
        var x = parseFloat(document.getElementById('x').value);
        var y = parseFloat(document.getElementById('y').value);
        var z = parseFloat(document.getElementById('z').value);
        var a = parseFloat(document.getElementById('a').value);

    var jakarta = new google.maps.LatLng(-5.4072148, 105.2406196);
    var petaoption = {
        zoom: 10,
        center: jakarta,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    peta = new google.maps.Map(document.getElementById("petaku"),petaoption);

        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer({
          draggable: true,
          map: peta,
          panel: document.getElementById('right-panel')
        });
        directionsDisplay.addListener('directions_changed', function() {
          computeTotalDistance(directionsDisplay.getDirections());
        });
        displayRoute({location: {lat:x, lng:y}}, {location: {lat:z,lng:a}}, directionsService,
            directionsDisplay);
    }
  

      function displayRoute(origin, destination, service, display) {
        var x = parseFloat(document.getElementById('x').value);
        var y = parseFloat(document.getElementById('y').value);
        var z = parseFloat(document.getElementById('z').value);
        var a = parseFloat(document.getElementById('a').value);

        service.route({
          origin: origin,
          destination: destination,
          waypoints: [{location: {lat:x, lng:y}}, {location: {lat:z,lng:a}}],
          travelMode: 'DRIVING',
          avoidTolls: true
        }, function(response, status) {
          if (status === 'OK') {
            display.setDirections(response);
          } else {
            alert('Could not display directions due to: ' + status);
          }
        });
      }

      function computeTotalDistance(result) {
        var total = 0;
        var total_jarak = 0;
        var total_bbm = 0;
        var p = 0;
        var myroute = result.routes[0];
        for (var i = 0; i < myroute.legs.length; i++) {
          total += myroute.legs[i].distance.value;
        }
        total_jarak = parseFloat(total) / parseFloat(1609);
        var perliter = parseFloat(document.getElementById('km').value);
         total_bbm = (parseFloat(total_jarak) / parseFloat(perliter))*parseFloat(2); 
         p =parseFloat(total_jarak) / parseFloat(perliter);
         if(isNaN(total_bbm)){total_bbm=0;}
         if(isNaN(p)){p=0;}
        $("#total").val(total_jarak.toFixed(2));
        $("#berangkat").val(p.toFixed(2));
        $("#total_bbm").val(total_bbm.toFixed(2));
      }

$(document).ready(function(){
    $("#tombol_simpan").click(function(){
        var x = $("#x").val();
        var y = $("#y").val();
        var judul = $("#judul").val();
        var des = $("#deskripsi").val();
    
    var id_info = $("#id_info").val();
    var id_prov = $("#id_prov").val();
    var id_bencana = $("#id_bencana").val();
    
    var korban = $("#korban").val();
    var penyebab = $("#penyebab").val();
    var tgl = $("#tgl").val();
    
        $("#loading").show();
        $.ajax({
            url: "simpanlokasi.php",
            data: "x="+x+"&y="+y+"&jenis="+jenis+"&id_info="+id_info+"&id_prov="+id_prov+"&id_bencana="+id_bencana+"&korban="+korban+"&penyebab="+penyebab+"&tgl="+tgl,
            cache: false,
            success: function(msg){
                alert(msg);
                $("#loading").hide();
                $("#x").val("");
                $("#y").val("");
        $("#id_info").val("");
        $("#korban").val("");
        $("#penyebab").val("");
        $("#tgl").val("");
                ambildatabase('akhir');
        document.location.href='?page=info-bencana';
            }
        });
    });
    $("#tutup").click(function(){
        $("#jendelainfo").fadeOut();
    });
});
function kasihtanda(lokasi){
    set_icon(jenis);
    tanda = new google.maps.Marker({
            position: lokasi,
            map: peta,
            icon: gambar_tanda
    });
    var a = $("#x").val();
    if(a==""){
    $("#x").val(lokasi.lat());
    $("#y").val(lokasi.lng());
    }else{
    $("#z").val(lokasi.lat());
    $("#a").val(lokasi.lng());
    }
  var geocoder = new google.maps.Geocoder;
  var infowindow = new google.maps.InfoWindow;
  geocoder.geocode({'location': lokasi}, function(results, status) {
          if (status === 'OK') {
            if (results[1]) {
            var asal =  $("#asal").val();
            if(asal==""){
              $("#asal").val(results[1].formatted_address);
            }else{
               $("#tujuan").val(results[1].formatted_address);
            }
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });

}


function set_icon(jenisnya){
    switch(jenisnya){
        case "banjir":
            gambar_tanda = 'img/Map-Marker.png';
            break;
        case "gunung":
            gambar_tanda = 'img/Map-Marker.png';
            break;
        case  "gempa":
            gambar_tanda = 'img/Map-Marker.png';
            break;
    }
}

function ambildatabase(akhir){
    if(akhir=="akhir"){
        url = "ambildata.php?akhir=1";
    }else{
        url = "ambildata.php?akhir=0";
    }
    $.ajax({
        url: url,
        dataType: 'json',
        cache: false,
        success: function(msg){
            for(i=0;i<msg.wilayah.petak.length;i++){
                judulx[i] = msg.wilayah.petak[i].judul;
                desx[i] = msg.wilayah.petak[i].deskripsi;
        provx[i] = msg.wilayah.petak[i].nama_prov;
        bencanax[i] = msg.wilayah.petak[i].nama_bencana;
        id_infox[i] = msg.wilayah.petak[i].id_info;
        korbanx[i] = msg.wilayah.petak[i].korban;
        penyebabx[i] = msg.wilayah.petak[i].penyebab;
        tglx[i] = msg.wilayah.petak[i].tgl;
        
        koorx[i] = msg.wilayah.petak[i].x;
        koory[i] = msg.wilayah.petak[i].y;
        
                set_icon(msg.wilayah.petak[i].jenis);
                var point = new google.maps.LatLng(
                    parseFloat(msg.wilayah.petak[i].x),
                    parseFloat(msg.wilayah.petak[i].y));
                tanda = new google.maps.Marker({
                    position: point,
                    map: peta,
                    icon: gambar_tanda
                });
                setinfo(tanda,i);

            }
        }
    });
}

function setjenis(jns){
    jenis = jns;
}

function setinfo(petak, nomor){
    google.maps.event.addListener(petak, 'click', function() {
        $("#jendelainfo").fadeIn();
        $("#teksjudul").html(judulx[nomor]);
        $("#teksdes").html(desx[nomor]);
    $("#teksprov").html(provx[nomor]);
    $("#teksbencana").html(bencanax[nomor]);
    $("#teksid_info").html(id_infox[nomor]);
    $("#tekskorban").html(korbanx[nomor]);
    $("#tekspenyebab").html(penyebabx[nomor]);
    $("#tekstgl").html(tglx[nomor]);
    
    $("#tekskoorx").html(koorx[nomor]);
    $("#tekskoory").html(koory[nomor]);
    });
}

function calcRoute() {
    var start = document.getElementById('start').value;
    var end = document.getElementById('end').value;
    var request = {
     origin:start,
     destination:end,
     travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function(response, status) {
   if (status == google.maps.DirectionsStatus.OK) {
     directionsDisplay.setDirections(response);
   }
   
    });
  }
  google.maps.event.addDomListener(window, 'load', peta_awal);
</script>


<style>
#jendelainfo{position:absolute;z-index:1000;top:100;
left:400;background-color:yellow;display:none;}
</style>
<div class="col-md-12">
<div onload="peta_awal()"></div>
<div class="col-md-6">
<div id="directions-panel"></div>
<input id="pac-input" class="controls" type="text" placeholder="Search Box">
<div id="petaku" style="width:100%; height:500px;position: top;"></div>
</div>
<div class="col-md-6">
<div style="border-color: yellow;">
<span class="lb">
<h3>Hitung Perincian</h3></span></div><hr>
<form class="form-horizontal" action="?page=simpan" method="post">
<input type="text" value=""  name="id_pegawai" id="id_pegawai" hidden>
<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Nama pegawai</label>
          <div class="col-sm-8">
           <input type="text" value="" class="form-control pegawai" name="pegawai" id="pegawai">
          </div>
        </div>
<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Keperluan</label>
          <div class="col-sm-8">
           <input type="text" value="" class="form-control" name="keperluan" id="keperluan">
          </div>
        </div>
<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Asal</label>
          <div class="col-sm-8">
           <input type="text" value="" class="form-control" id="asal" name="asal">
          </div>
        </div>
<h5>Titik Koordinat Lokasi Asal</h5>
<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">X</label>
          <div class="col-sm-8">
           <input type="text" value="" class="form-control" id="x" name="x">
          </div>
        </div>
<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Y</label>
          <div class="col-sm-8">
           <input type="text" value="" class="form-control" id="y" name="y">
          </div>
        </div><hr>
<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Tujuan</label>
          <div class="col-sm-8">
           <input type="text" class="form-control" value="" id="tujuan" name="tujuan">
          </div>
        </div>
<h5>Titik Koordinat Lokasi Tujuan</h5>
<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">X2</label>
          <div class="col-sm-8">
           <input type="text" value="" class="form-control" id="z" name="z">
          </div>
        </div>
<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Y2</label>
          <div class="col-sm-8">
           <input type="text" value="" class="form-control" id="a" name="a">
          </div>
        </div><hr>
<input type="text" value=""  name="id_kendaraan" id="id_kendaraan" hidden>
<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">No. Polisi</label>
          <div class="col-sm-8">
           <input type="text" value="" class="form-control kendaraan" name="no_pol" id="no_pol">
          </div>
        </div>
<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Jenis Kendaraan</label>
          <div class="col-sm-8">
           <input type="text" value="" class="form-control" name="jenis" id="jenis">
          </div>
        </div>
<div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Merek Kendaraan</label>
          <div class="col-sm-8">
           <input type="text" value="" class="form-control" name="merk" id="merk">
          </div>
        </div>
<div class="form-group">
          <label for="inputEmail3" class="col-sm-4 control-label">Masukkan Perliter BBM</label>
          <div class="col-sm-4">
           <input type="text" value="" class="form-control" id="km" name="km" style="padding-right:0px;"></div><label for="inputEmail3" class="control-label">KM/Liter
          </label>
        </div>
<div class="form-group">
          <label for="inputEmail3" class="col-sm-4 control-label">Total Jarak</label>
          <div class="col-sm-4">
           <input type="text" value="" class="form-control" id="total" name="total" readonly></div><label for="inputEmail3" class="control-label">KM
          </label>
        </div>
<div class="form-group">
          <label for="inputEmail3" class="col-sm-4 control-label">Sekali Pergi</label>
          <div class="col-sm-4">
           <input type="text" value="" class="form-control" id="berangkat" name="berangkat" readonly></div><label for="inputEmail3" class="control-label">Liter
          </label>
        </div>
<div class="form-group">
          <label for="inputEmail3" class="col-sm-4 control-label">Total BBM PP</label>
          <div class="col-sm-4">
           <input type="text" value="" class="form-control" id="total_bbm" name="total_bbm" readonly></div><label for="inputEmail3" class="control-label">Liter
          </label>
        </div><hr>
<div class="form-group">
<div class="col-sm-12">
  <a class="btn btn-primary" href="?"><div class="col-md-3 col-sm-4"><i class="fa fa-refresh "></i></div>  <b>Reset</b></a>
  <a class="btn btn-primary" onclick="klik()"><div class="col-md-3 col-sm-4"><i class="fa fa-check "></i></div>  <b>Cek Detail</b></button>
  <button class="btn btn-primary" type="submit" onclick="/*window.open('laporan/laporan.php&cetak=bon','_blank')*/"><div class="col-md-3 col-sm-4"><i class="fa fa-save "></i></div>  <b>Simpan</b></button>
</div>
</div>
</form>
</div>
</div><hr>

 <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title"><b>DATA pegawai</b></h4>
                  </div>
                  <div class="modal-body">
                     <table id="example" class="table table-bordered">
                        <thead>
                           <tr>
                              <th>No.</th>
                              <th>NIP</th>
                              <th>Nama pegawai</th>
                              <th>JABATAN</th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php
                        $n=1;
                         $buku = mysql_query("select * from tbl_pegawai order by nama_pegawai asc");
                          while($data2=mysql_fetch_assoc($buku)){
                        ?>
                           <tr id="data" onClick="masuk(this,'<?php echo $data2['id_pegawai']; ?>,<?php echo $data2['nama_pegawai']; ?>,<?php echo $data2['jabatan']; ?>')" href="javascript:void(0)">
                              <td><?php echo $n; ?></td>
                              <td><a id="data" onClick="masuk(this,'<?php echo $data2['id_pegawai']; ?>,<?php echo $data2['nama_pegawai']; ?>,<?php echo $data2['jabatan']; ?>')" href="javascript:void(0)"><?php echo $data2['id_pegawai']; ?></a></td>
                              <td><?php echo $data2['nama_pegawai']; ?></td>
                              <td><?php echo $data2['jabatan']; ?></td>
                           </tr>
                           <?php
                            $n++;
                            }
                           ?>
                        </tbody>
                     </table>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div><hr>
<?php
ini_set('display_errors', 1); ini_set('error_reporting', E_ERROR);

echo "<hr><div>
<div class='col-md-12 pading-0'>
                <div class='col-md-12'>
                  <div class='panel'>
                    <div class='panel-heading'><h3>DATA PERMINTAAN BON BBM</h3></div>
                    <div class='panel-body'>
                      <div class='table-responsive'>
                      <table id='example1' class='table table-bordered table-striped' width='100%' cellspacing='0'>
                      <thead>
    <tr>
      <th>No</th>
      <th>Tanggal</th>
      <th>Nama pegawai</th>
      <th>Keperluan</th>
      <th>Total Permintaan(Liter)</th>
      <th>No. Polisi</th>
      <th>Hapus</th>
      <th>Cetak BON</th>
    </tr></thead>";
    
      $sql  = "SELECT * FROM tbl_bon ORDER By id_bon desc";

  $query  = mysql_query($sql);
  
  $no=1;
  while($rows=mysql_fetch_array($query)){
    if(($rows['pimpinan']=="") && ($rows['ttd']=="")){
      $st="Style='display:none;'";
    }else{
      $st="";
    }

    $id=$rows['id_pegawai'];
    $id2=$rows['id_kendaraan'];
    $rows1=mysql_fetch_array(mysql_query("SELECT * FROM tbl_pegawai where id_pegawai='$id'"));
    $rows2=mysql_fetch_array(mysql_query("SELECT * FROM tbl_kendaraan where id_kendaraan='$id2'"));
    echo "<tr>
        <td align='center'>$no.</td>
        <td>".date('d-m-Y',strtotime($rows['tgl']))."</td>
        <td>$rows1[nama_pegawai]</td>
        <td>$rows[keperluan]</td>
        <td>$rows[total_liter_bon_bbm]</td>
        <td>$rows2[no_pol]</td><td align='center'>
        <a class='delete-link' align='' href='?page=Permintaan BON&aksi=Hapus&id={$rows[id_bon]}'><span class='fa fa-bitbucket fa-2x'></span></a>      
        </td>
        <td align='center'>
        <a class='' align='' href='laporan/laporan.php?cetak=bon&id={$rows[id_bon]}' target='_blank' ".$st." ><span class='fa fa-print fa-2x'></span></a>      
        </td>
      </tr>";
  $no++;
  }
echo "</tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>";

if(isset($_GET['aksi'])){
if($_GET['aksi']=="Hapus"){
  $id=$_GET['id'];
  mysql_query("delete from tbl_bon where id_bon='$id'");
    ?><script>swal("Good job!", "Data Berhasil Disimpan!", "success"); window.location.href = "?page=Permintaan BON";</script><?php
     echo "<meta http-equiv='refresh' content='1; url=?page=Permintaan BON'>";
}
}
?>
<script>
    jQuery(document).ready(function($){
        $('.delete-link').on('click',function(){
            var getLink = $(this).attr('href');
            swal({
          title: "Apakah Anda Yakin Akan Menghapus Data ini?",
          text: "Setelah Dihapus Data Tidak Akan Bisa Dikembalikan!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Ya, Hapus Saja!",
          cancelButtonText: "Tidak, Batal !",
          closeOnConfirm: false,
          closeOnCancel: false
        },function(isConfirm){
          if (isConfirm) {
            swal("Terhaspus!", "Data Telah Berhasil Dihapus.", "success");
            window.location.href = getLink
          } else {
            swal("Batal", "Data Aman Tidak Terhapus :)", "error");
        }
                  });
            return false;
        });
    });
</script>
 <div class="modal fade" id="myModal3" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title"><b>DATA KENDARAAN</b></h4>
                  </div>
                  <div class="modal-body">
                     <table id="example1" class="table table-bordered">
                        <thead>
                           <tr>
                              <th>No.</th>
                              <th>MEREK</th>
                              <th>JENIS</th>
                              <th>NO. PILISI</th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php
                        $n=1;
                         $kendaraan = mysql_query("select * from tbl_kendaraan order by id_kendaraan asc");
                          while($data3=mysql_fetch_assoc($kendaraan)){
                        ?>
                           <tr id="data" onClick="kendaraan(this,'<?php echo $data3['id_kendaraan']; ?>,<?php echo $data3['merk_kendaraan']; ?>,<?php echo $data3['jenis_kendaraan']; ?>,<?php echo $data3['no_pol']; ?>')" href="javascript:void(0)">
                              <td><?php echo $n; ?></td>
                              <td><a id="data" onClick="kendaraan(this,'<?php echo $data3['id_kendaraan']; ?>,<?php echo $data3['merk_kendaraan']; ?>,<?php echo $data3['jenis_kendaraan']; ?>,<?php echo $data3['no_pol']; ?>')" href="javascript:void(0)"><?php echo $data3['jenis_kendaraan']; ?></a></td>
                              <td><?php echo $data3['merk_kendaraan']; ?></td>
                              <td><?php echo $data3['no_pol']; ?></td>
                           </tr>
                           <?php
                            $n++;
                            }
                           ?>
                        </tbody>
                     </table>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
<script type="text/javascript">
$(".pegawai").focusin(function() {
    $("#myModal2").modal('show'); // ini fungsi untuk menampilkan modal
  });
$(".kendaraan").focusin(function() {
    $("#myModal3").modal('show'); // ini fungsi untuk menampilkan modal
  });

function masuk(txt, data) {
  var a = data.split(",");
  document.getElementById('id_pegawai').value = a[0];
  document.getElementById('pegawai').value = a[1];
  $("#myModal2").modal('hide'); // ini berfungsi untuk menyembunyikan modal
}
function kendaraan(txt, data) {
  var b = data.split(",");
  document.getElementById('id_kendaraan').value = b[0];
  document.getElementById('merk').value = b[1];
  document.getElementById('jenis').value = b[2];
  document.getElementById('no_pol').value = b[3];
  $("#myModal3").modal('hide'); // ini berfungsi untuk menyembunyikan modal
}
</script>
<script src="highcharts.js"></script>
<script src="exporting.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoilQqu_Iz-1B_zzqvbxJB3HC8ScFjZ8E&libraries=places&callback=initAutocomplete"
 async defer></script>