

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
        top: 50px;
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
  </head>
  <body>
    <div id="floating-panel">
    <b>Start: </b>
    <select id="start">
      <option value="37.0347, -76.3813">My Location</option>
      <option value="37.127972, -76.511611">Homebase</option>
      <option value="810 Erskine street, Hampton Va">My House</option>

    </select>
    <b>End: </b>
    <select id="end">
      <option value="34 Banister Drive, Hampton Va">Customer 1</option>
      <option value="37.042832, -76.38060">Customer 2</option>
      <option value="37.0453836, -76.347885">Customer 3</option>
      <option value="37.0236703, -76.376402">Customer 4</option>
      <option value="37.049513, -76.397946">Customer 5</option>
      <option value="2195 Executive Dr, Hampton, VA 23666, USA">Customer 6</option>

    </select>
    </div>
    <div id="map"></div>
    <script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 37.0387, lng: -76.3882},
          zoom: 11
        });

        directionsDisplay.setMap(map);

        calculateAndDisplayRoute(directionsService, directionsDisplay);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
	
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHfrGVUCxPK80gO1Yex_WlRktiJLfcoFc&callback=initMap">
    </script>

 