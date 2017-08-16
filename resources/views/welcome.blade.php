<!DOCTYPE html>
<html>
  <head>
    <title>Data Layer: Simple</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      
    </style>
   
  
  </head>
  <body>

    <div id="map"></div>

  <script type="text/javascript">

   var map;



function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: {lat: -25.5462011, lng: -49.2664437}
  });

  // NOTE: This uses cross-domain XHR, and may not work on older browsers.
  map.data.loadGeoJson(
      'loadJS');

  var infowindow2 = new google.maps.InfoWindow({maxWidth: 400});

            // When the user clicks, open an infowindow
      map.data.addListener('click', function(event) {
          var name = event.feature.getProperty("name");
          var description = event.feature.getProperty("description");
          var id = event.feature.getProperty("id");


 
      infowindow2.setContent("<h2>"+name+"</h2><p>"+description+"</p><a href=listaVias/"+id+">Listar Vias</a>");
          infowindow2.setPosition(event.feature.getGeometry().get());
      infowindow2.setOptions({pixelOffset: new google.maps.Size(0,-30)});

          infowindow2.open(map);
          infoWindow.close();
  });    


          var infoWindow = new google.maps.InfoWindow({map: map});

// Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('<center><p>Você foi encontrado!</p><p>Explore as áreas de escalada perto de você!</p></center>');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Ative a localização no seu navegador.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }

       




    </script>


   
  </body>
</html>

 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmqNd5YuN1V4rvSkoZ8GO1P9Q8g1tnjHM&callback=initMap">
    </script>


  </body>
</html>