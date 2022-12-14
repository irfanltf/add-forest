<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Reverse geocoding</title>
    <!-- <link rel="stylesheet" href="https://openlayers.org/en/v4.4.2/css/ol.css" type="text/css"> -->
    <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL,fetch"></script>
<!--     <script src="https://openlayers.org/en/v4.4.2/build/ol.js"></script> -->
      <link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
<script src="https://openlayers.org/en/v4.6.5/build/ol.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>asset/admin/global/plugins/jquery.min.js" type="text/javascript"></script>
</head>
    <style type="text/css">
      #map {
        height: 600px;
      }
    </style>
  </head>
  <body>
    <div id="map" class="map"></div>
    <div>
      <input id="lon" type="number" step="0.000001">
      <input id="lat" type="number" step="0.000001">
      <button id="reversegeocoding" type=button name="button">Reverse geocode manually</button>
      <span id="address">

      </span>
    </div>
    <script>
      var map = new ol.Map({
        layers: [
          new ol.layer.Tile({
            source: new ol.source.OSM()
          })
        ],
        target: 'map',
        view: new ol.View({
          center: [0, 0],
          zoom: 2
        })
      });
      function simpleReverseGeocoding(lon, lat) {
        fetch('http://nominatim.openstreetmap.org/reverse?format=json&lon=' + lon + '&lat=' + lat).then(function(response) {
          return response.json();
        }).then(function(json) {
          document.getElementById('address').innerHTML = json.display_name;
          
        })
      }
      map.on('click', function(e) {
        var coordinate = ol.proj.toLonLat(e.coordinate).map(function(val) {
          return val.toFixed(6);
        });
        var lon = document.getElementById('lon').value = coordinate[0];
        var lat = document.getElementById('lat').value = coordinate[1];
        simpleReverseGeocoding(lon, lat);
      });
      document.getElementById('reversegeocoding').addEventListener('click', function(e) {
        if (document.getElementById('lon').value && document.getElementById('lat').value) {
          simpleReverseGeocoding(document.getElementById('lon').value, document.getElementById('lat').value);
        }
      });

 
    </script>
  </body>
</html>