<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 700px;
        width:100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      


      function initMap() {
        var myLatLng= {lat: 39.0742, lng: 21.8243};

        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 7
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
            map:map,
            position: myLatLng,
            title:'Hello'


        });


      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCISNTLWzly6oxatbxKlwpNT7uGRcTaiMI&callback=initMap"
    async defer></script>
  </body>
</html>