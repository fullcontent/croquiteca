<script>

      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: {lat: -25.5462011, lng: -49.2664437}
        });

        // NOTE: This uses cross-domain XHR, and may not work on older browsers.
        map.data.loadGeoJson(
            '<?=url('loadJS')?>');

        var infowindow2 = new google.maps.InfoWindow({maxWidth: 400});

            // When the user clicks, open an infowindow
      map.data.addListener('click', function(event) {
          var name = event.feature.getProperty("name");
          var routes_count = event.feature.getProperty("routes_count");
          var id = event.feature.getProperty("id");


 
          infowindow2.setContent("<h4>"+name+"</h4><a href=<?=url('/locais')?>/"+id+">"+routes_count+" Vias</a>");
          infowindow2.setPosition(event.feature.getGeometry().get());
          infowindow2.setOptions({pixelOffset: new google.maps.Size(0,-30)});

          infowindow2.open(map);
          infoWindow.close();
          }); 


    
          var infoWindow = new google.maps.InfoWindow({map: map});




if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Olá, veja as áreas de escalada proximas a você!' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
     }



     
    </script>

    <div class="col-md-10 map" id="map"></div>