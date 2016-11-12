

    <title>Directions service</title>
    <style>

      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 200px;
        left: 40%;
        z-index: 5;
        background-color: #004568;
        padding: 20px 40px;
        border: 1px solid #999;
        text-align: center;
        color: white;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 20px;
      }
    </style>

    <div id="floating-panel">
        <b>Would you like directions?</b>
        <a class="btn btn-primary" href="map/directions">Yes</a>
        <a class="btn btn-primary">No</a>
        </div>
    
    <div id="map"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
           center: {lat: 37.0387, lng: -76.3882},
          zoom: 11
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
            infoWindow.setContent('You are here');
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
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHfrGVUCxPK80gO1Yex_WlRktiJLfcoFc&callback=initMap">
    </script>
