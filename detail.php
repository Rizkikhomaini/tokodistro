<?php 

include_once "admin/action/koneksi.php"; 
$nama_toko="";
$item_rating="";
$id_toko="";
$no_telp="";
$alamat="";
$email="";
$lat="";
$long="";
$pemilik="";
$medsos="";
$jam_buka="";
$jam_tutup="";
$tipe = "";

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $query=mysqli_query($conn,"SELECT * FROM tbl_toko where id_toko ='$id'");
}else{
  $toko = $_POST['toko'];
  $query=mysqli_query($conn,"SELECT * FROM tbl_toko where nama_toko='$toko'");
}
 

while($data=mysqli_fetch_assoc($query)){
  $nama_toko.=$data['nama_toko'];
  //$rating. =$data['rating'];
  $id_toko.=$data['id_toko'];
  $no_telp.=$data['no_telp'];
  $alamat.=$data['alamat'];
  $email.=$data['email'];
  $lat.=$data['Lat'];
  $long.=$data['Lng'];
  $pemilik.=$data['Pemilik'];
  $medsos.=$data['medsos'];
  $jam_buka.=$data['buka'];
  $jam_tutup.=$data['tutup'];
  $tipe.=$data['tipe'];
}

?>
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
        width: 200px;
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
//google maps GIS 1.1.b by desrizal
//dibuat tanggal 8 Jan 2011
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
    var jakarta = new google.maps.LatLng(<?php echo $lat ?>, <?php echo $long ?>);
    var petaoption = {
        zoom: 10,
        center: jakarta,
        mapTypeId: google.maps.MapTypeId.ROADMAP
        };
    peta = new google.maps.Map(document.getElementById("petaku"),petaoption);
    google.maps.event.addListener(peta,'click',function(event){
        kasihtanda(event.latLng);
       
    });
    var tipe = '<?php echo $tipe; ?>';
        if(tipe == "All"){
            var globalPin = 'marker2.png';
        }

         if(tipe == "Toko"){
            var globalPin = 'marker2.png';
        }

         if(tipe == "Recording"){
            var globalPin = 'marker3.png';
        }

        if(tipe == "Studio"){
            var globalPin = 'marker4.png';
        }
    var myLatLng = new google.maps.LatLng(<?php echo $lat ?>, <?php echo $long ?>);
    var marker = new google.maps.Marker({
            position: myLatLng,
            map: peta,
            icon: 'marker2.png'
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

            $("#x").val(place.geometry.location.lat());
            $("#y").val(place.geometry.location.lng());
            $("#asal").val(place.name);
            
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

    var jakarta = new google.maps.LatLng(-5.48837268595127, 104.87836198636455);
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
        //var total_bbm = 0;
        //var p = 0;
        var myroute = result.routes[0];
        for (var i = 0; i < myroute.legs.length; i++) {
          total += myroute.legs[i].distance.value;
        }
        total_jarak = parseFloat(total) / parseFloat(1609);
        $("#total").val(total_jarak.toFixed(2));
      }

function kasihtanda(lokasi){
    set_icon(jenis);
    tanda = new google.maps.Marker({
            position: lokasi,
            map: peta,
            icon: gambar_tanda
    });

    $("#x").val(lokasi.lat());
    $("#y").val(lokasi.lng());

  var geocoder = new google.maps.Geocoder;
  var infowindow = new google.maps.InfoWindow;
  geocoder.geocode({'location': lokasi}, function(results, status) {
          if (status === 'OK') {
            if (results[1]) {
            var asal =  $("#asal").val();
              $("#asal").val(results[1].formatted_address);
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
            gambar_tanda = 'marker2.png';
            break;
        case "gunung":
            gambar_tanda = 'marker2.png';
            break;
        case  "gempa":
            gambar_tanda = 'marker2.png';
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
    <div id="detail">
    <div style="padding-left: 15px;">
    <div style="padding-top: 90px;padding-left: 5px;"><h2>Detail Lokasi Distro</h2></div><br>
      <div class="row">
      <div class="col-md-6">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h4 class="panel-title"><strong> - Lokasi - </strong></h4>
            </div>
            <div onload="peta_awal()"></div>
              <div class="col-md-12">
              <div id="directions-panel"></div>
              <input id="pac-input" class="controls" type="text" placeholder="Search Box">
              <div id="petaku" style="width:100%; height:500px;position: top;"></div>
            </div>
          </div>
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered"><br>
              <h4 class="panel-title"><strong> - Rute Dan Jarak - </strong></h4><br>
            </div>
            <div class="panel-body">
              <div>
                <label>Lokasi Anda :</label><br>
                <input type="text" name="asal" id="asal" placeholder="Lokasi Anda" class="form-group" readonly="true">
                <label>Koordinat Tujuan Anda :</label><br>
                <input type="text" name="x" id="x" placeholder="Lat" class="form-group" readonly="true">
                <input type="text" name="z" value="<?php echo $lat; ?>" id="z" class="form-group" readonly="true"><br>
                <input type="text" name="y" id="y" placeholder="Lng" class="form-group" readonly="true">
                <input type="text" name="a" value="<?php echo $long; ?>" id="a" class="form-group" readonly="true"><br>
              </div>
              </div>
              <div class="panel-body">
              <div>
                <label>Detail Jarak:</label><br>
                <input name="total" id="total"> KM<br><br>
              </div>
            </div>
            <div class="panel-body">
              <div>
                <button class="btn btn-primary" onclick="klik()">Cek</button>
                <a class="btn btn-primary" style="color:white;" onclick="load()" >Reset</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h4 class="panel-title"><strong> - Detail - </strong></h4>
            </div><br>
            <div align="right">
            <!--a style="padding-right: 5px;color:white;" haref="" class="btn btn-primary"><span class="glyphicon glyphicon-print"></span>  cetak</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            </div><br-->
            <div class="panel-body table-responsive">
             <table class="table table-striped table-admin">
               <tr>
                 <th>Item</th>
                 <th>Detail</th>
               </tr>
               <tr>
                 <td>Nama Toko</td>
                 <td><h4><?php echo $nama_toko ?></h4></td>
               </tr>
               <!-- <tr>
                 <td>Rating</td>
                 <td><h4><?php echo $rating ?></h4></td>
               </tr> -->
               <tr>
                 <td>Email</td>
                 <td><h4><?php echo $email ?></h4></td>
               </tr>
               <tr>
                 <td>Alamat</td>
                 <td><h4><?php echo $alamat ?></h4></td>
               </tr>
               <tr>
                 <td>No HP</td>
                 <td><h4><?php echo $no_telp ?></h4></td>
               </tr>
               <tr>
                 <td>pemilik</td>
                 <td><h4><?php echo $pemilik ?></h4></td>
               </tr>
               <tr>
                 <td>Medsos</td>
                 <td><h4><?php echo $medsos ?></h4></td>
               </tr>
              <tr>
                 <td>Buka</td>
                 <td><h4><?php echo $jam_buka ?></h4></td>
               </tr>
              <tr>
                 <td>Tutup</td>
                 <td><h4><?php echo $jam_tutup ?></h4></td>
               </tr>
              <tr>
                <td>Rating</td>
                <td><div class="row">
      <div class="col-sm-7">
        <hr/>
        <div class="review-block">    
        <?php
        $ratinguery = "SELECT ratingId, itemId, userId, ratingNumber, title, comments, created, modified FROM item_rating where itemId='$id_toko'";
        $ratingResult = mysqli_query($conn, $ratinguery) or die("database error:". mysqli_error($conn));
        while($rating = mysqli_fetch_assoc($ratingResult)){
          $date=date_create($rating['created']);
          $reviewDate = date_format($date,"M d, Y");      
        ?>        
          <div class="row">
            <div class="col-sm-3">
              <!--img src="image/profile.png" class="img-rounded">
              <div class="review-block-name">By <a href="#">phpcode</a></div>
              <div class="review-block-date"><?php echo $reviewDate; ?></div-->
            </div>
            <div class="col-sm-9">
              <div class="review-block-rate">
                <?php
                for ($i = 1; $i <= 5; $i++) {
                  $ratingClass = "btn-default btn-grey";
                  if($i <= $rating['ratingNumber']) {
                    $ratingClass = "btn-warning";
                  }
                ?>
                <button type="button" class="btn btn-xs <?php echo $ratingClass; ?>" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>               
                <?php } ?>
              </div>
              <div class="review-block-title"><?php echo $rating['title']; ?></div>
              <!--div class="review-block-description"><?php echo $rating['comments']; ?></div--->
            </div>
          </div>
          <hr/>         
        <?php } ?>
        </div>
      </div>
    </div>
    </td>


              </tr>
             </table>
            </div>
            </div>
          </div>

        
        </div><br><br>
            <!--<div class="col-md-12" style="padding-top: 10px;">
              <div class="container">
                <div class="row">
                  <div class="col-md-4 heading-section ftco-animate">
                  <hr style="color: black;" >
                  <h4 style="text-align: center; color: black ">List Alat Musik</h4>
                  <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="destination-slider owl-carousel ftco-animate">
                       <?php
                          $query2=mysqli_query($conn,"SELECT * FROM vw_detail where id_toko='$id_toko'");
                          while($r=mysqli_fetch_assoc($query2)){
                          $id1 = $r['id_detailtoko'];
                          $harga = "Rp. ".$r['harga'].",-";
                          $ket = $r['keterangan'];
                          $query3=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM tbl_gambar where id_detailtoko='$id1'"));
                          $gambar = $query3['gambar'];
                      ?>
                      <div class="item">
                        <div class="destination">
                          <a href="" class="img d-flex justify-content-center align-items-center" style="width: 230px;height:75px;background-image: url(<?php echo 'gambar/'.$gambar; ?>);">
                           
                          </a>
                          <div class="text p-3">
                            <h4><b><a href="#"><?php echo $r['nama_alatmusik']; ?></a></b></h4>
                            <h5><b><?php echo $harga; ?></b></h5>
                            <h6><?php echo $ket; ?></h6>
                          </div>
                        </div>
                      </div>
                      <?php
                        }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->
      </div>
    </div>
<br><br>
    <?php //include_once "footer.php"; ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoilQqu_Iz-1B_zzqvbxJB3HC8ScFjZ8E&libraries=places&callback=initAutocomplete"
 async defer></script>
 <script>
function load() {
    location.reload();
}
</script>
