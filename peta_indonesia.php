<!DOCTYPE html>
<html lang="id">
    <head>
        <title>Peta Indonesia</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
    </head>
    <body>
        <h1 style="text-align:center">Peta Indonesia</h1>
        <div id="map" style="width: 100%; height: 600px;"></div>
        <script>
          var map = L.map('map').setView([-6.2088, 106.8456], 5);
          L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', { maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
         
          var circle = L.circle([-6.2088, 106.8456], {
              color: 'red',
              fillColor: '#f03',
              fillOpacity: 0.5,
              radius: 5000
          }).addTo(map);

         var marker = L.marker([-6.2088, 106.8456]).addTo(map);
         var popup = L.popup()
          .setLatLng([-6.2088, 106.8456])
          .setContent("DKI Jakarta, Populasi: 10.5 juta, Luas: 662 km²")
          .openOn(map);
        
        bindpopup(marker, popup);
        function bindpopup(marker, popup) {
            marker.bindPopup(popup);
            marker.on('click', function(e) {
                this.openPopup();
            });
        }

        </script>
        
    </body>
</html>