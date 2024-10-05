<div class="card-body"> 
    <div id="map" style="width: 100%; height: 800px; color:black;"></div> 
</div>

<script> 
    var map = L.map('map', { 
        center: [-6.402905, 106.778419], 
        zoom: 12, 
        layers:[] 
    }); 
    var GoogleSatelliteHybrid= L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
        maxZoom: 22, 
        attribution: 'WebGIS Result Trainning by Rycky Kusmana' 
    }).addTo(map); 

    var OpenTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
	maxZoom: 17,
	attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
    });

    var OpenStreetMap_Mapnik = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });

    L.control.scale({maxWidth: 150}).addTo(map);

    var baseMaps = [ 
        { 
            groupName : " Base Maps", 
            expanded : true, 
            layers : { 
                "Satellite" : GoogleSatelliteHybrid, 
                "OpenTopoMap" : OpenTopoMap,
                "Open Street Map Mapnik" : OpenStreetMap_Mapnik,
            } 
        } 
    ]; 
    var overlays = [ 
        { 
            groupName : "Peta Dasar", 
            expanded : true, 
            layers : { } 
        } 
    ]; 
    var options = { 
        container_width : "300px", 
        group_maxHeight : "80px", 
        //container_maxHeight : "350px", 
        exclusive : false, 
        collapsed : true, 
        position: 'topright' 
    }; 
    var control = L.Control.styledLayerControl(baseMaps, overlays, options); 
    map.addControl(control);

L.Control.geocoder().addTo(map);


</script>
