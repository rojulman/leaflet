<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <style>
        #map { height: 400px; }
    </style>
     <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>
    <body>
        <div id="map"></div>
        <script>
            var map = L.map('map').setView([-6.4025,106.7942], 5);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png',{ maxZoom: 19,
              attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);
        
var loi = {
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": {
        "nama": "Gelora Bung Karno",
        "kota": "DKI Jakarta"
      },
      "geometry": {
        "coordinates": [
          106.80195548565763,
          -6.219172636934545
        ],
        "type": "Point"
      },
      "id": 0
    },
    {
      "type": "Feature",
      "properties": {
        "nama": "Telkom University",
        "kota": "Bandung"
      },
      "geometry": {
        "coordinates": [
          107.63116700848275,
          -6.973222889647516
        ],
        "type": "Point"
      },
      "id": 1
    }
  ]
};

var geojson = L.geoJSON(loi, {
        onEachFeature: function (feature, layer) {
        layer.bindPopup(feature.properties.nama + "," + feature.properties.kota);
        }
}).addTo(map);
    
L.geoJSON(geojson).bindPopup(function(layer){
        return layer.feature.properties.nama + "," + layer.feature.properties.kota;
}).addTo(map);
        </script>
    </body>
</html>