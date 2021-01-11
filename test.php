<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/css/ol.css" type="text/css">

    <link href="style.css" rel="stylesheet" type="text/css">


    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/build/ol.js"></script>
    <title>OpenLayers example</title>
</head>

<body>
    <h2>My Map</h2>
    <div id="map" class="map"></div>

    <div id="popup" class="ol-popup">
        <!-- variabel container-->
        <a href="#" id="popup-closer" class="ol-popup-closer"></a> <!-- variabel closer-->
        <div id="popup-content"></div> <!-- variabel content_element-->
    </div>
    <script type="text/javascript">
        var vectorLayer = new ol.layer.Vector({
            source: new ol.source.Vector({
                format: new ol.format.GeoJSON(),
                url: 'json/banjir.json'
            }),
            style: new ol.style.Style({
                image: new ol.style.Icon(({
                    anchor: [0.5, 46],
                    anchorXUnits: 'fraticon',
                    anchorYUnits: 'pixels',
                    src: 'icon/pin.png'
                }))
            })
        });

        var vectorLayerRiau = new ol.layer.Vector({
            source: new ol.source.Vector({
                format: new ol.format.GeoJSON(),
                url: 'json/riau.json'
            }),
        });

        var map = new ol.Map({
            target: 'map',
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM()
                }),
                vectorLayer, vectorLayerRiau
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([101.438309, 0.510440]),
                zoom: 7
            })
        });

        var container = document.getElementById('popup'),
            content_element = document.getElementById('popup-content'),
            closer = document.getElementById('popup-closer');

        closer.onclick = function() {
            overlay.setPosition(undefined);
            closer.blur();
            return false;

        };
        var overlay = new ol.Overlay({
            element: container,
            autoPan: true,
            offset: [0, -10]
        });

        map.addOverlay(overlay);

        var fullscreen = new ol.control.FullScreen();
        map.addControl(fullscreen);

        map.on('click', function(evt) {
            var feature = map.forEachFeatureAtPixel(evt.pixel,
                function(feature, layer) {
                    return feature;
                });

            if (feature) {
                var geometry = feature.getGeometry();
                var coord = geometry.getCoordinates();

                var content = '<h3>Nama Tempat : ' + feature.get('Nama_Pemetaan') + '</h3>';
                content += '<h3>Jumlah Korban : ' + feature.get('Jumlah_Korban') + '</h3>';
                content += '<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.limapilar.org%2Fwp-content%2Fuploads%2F2020%2F01%2Fbanjir-jakarta-1024x576.jpg&f=1&nofb=1" width="300"/>';

                content_element.innerHTML = content;
                overlay.setPosition(coord);
                console.info(feature.getProperties());

            }
        });
    </script>
</body>

</html>