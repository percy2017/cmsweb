<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    
    <style type="text/css">
        html, body {
            height: 100%;
            margin: 0;
        }
        #wrapper {
            min-height: 100%; 
        }
    </style>
</head>
<body>
    <div id="wrapper"></div>

    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="centros_educativos.js"></script>
    <script>
        var mymap = L.map('wrapper').setView([37.344, -4.548], 8);

        var osmLayer = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap<\/a> contributors'
        }).addTo(mymap);

        function popUpInfo(feature, layer) {
            // does this feature have a property named popupContent?
            if (feature.properties && feature.properties.nomb_mus) {
                layer.bindPopup("<b>"+feature.properties.nomb_mus+"</b><br>"+feature.properties.municipio+" ("+feature.properties.provincia+")");
                //layer.bindPopup("<b>"+feature.properties.nomb_mus);
            }
        }
        L.geoJson(museos, {
            onEachFeature: popUpInfo
            }).addTo(mymap);
    </script>

    
</body>
</html>