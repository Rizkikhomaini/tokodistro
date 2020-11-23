        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard centered">
            <div align="center" class="panel-heading">
              <h2 class="panel-title" style="color: #fff;"><strong>  </strong></h2>
            </div>
            <div class="panel-body" align="center">
              <div id="map" style="width:100%;height:580px;"></div>



<script type="text/javascript">

  function initMap() {
            var latitude = -5.406402782175128; // YOUR LATITUDE VALUE
            var longitude = 105.26090029248462; // YOUR LONGITUDE VALUE
            
            var myLatLng = {lat: latitude, lng: longitude};
            
            map = new google.maps.Map(document.getElementById('map'), {
              center: myLatLng,
              zoom: 12,
              disableDoubleClickZoom: true, // disable the default map zoom on double click
            });

    setMarkers(map, officeLocations);

}

var officeLocations = [
<?php
$data = file_get_contents('http://localhost/tokodistro/ambildata.php');
                $no=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
?>
['<?php echo $item->id_toko; ?>','<?php echo $item->nama_toko; ?>','<?php echo $item->alamat; ?>', '<?php echo $item->Lat; ?>', '<?php echo $item->Lng; ?>','<?php echo $item->tipe; ?>'],
<?php 
}
} 
?>    
];

function setMarkers(map, locations)
{
    for (var i = 0; i < locations.length; i++) {
        var office = locations[i];

       var tipe = office[5];
        if(tipe == "All"){
            var globalPin = 'marker.png';
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

        var myLatLng = new google.maps.LatLng(office[3], office[4]);
        var infowindow = new google.maps.InfoWindow({content: contentString});
         
        var contentString = 
            '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h5 id="firstHeading" class="firstHeading">'+ office[1] + '</h5>'+
            '<div id="bodyContent" style="height: 100px;"><br>'+
            
            '<a href=?id='+office[0]+'#detail>Info Detail</a>'+
            '</div>'+
            '</div>';

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: office[1],
            icon:globalPin
        });

        google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
    }
}

function getInfoCallback(map, content) {
    var infowindow = new google.maps.InfoWindow({content: content});
    return function() {
            infowindow.setContent(content); 
            infowindow.open(map, this);
        };
}

initialize();
</script>
            </div>
          </div>
        </div>
