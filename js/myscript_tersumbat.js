// CREATE MAP TITIK TERSUMBAT
var vectorLayer_titiktersumbat = new ol.layer.Vector({
    source: new ol.source.Vector({
        format: new ol.format.GeoJSON(),
        url: 'json/TitikTersumbat.json'
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



var container = document.getElementById('popup'),
    content_element = document.getElementById('popup-content'),
    closer = document.getElementById('popup-closer');

closer.onclick = function () {
    overlay.setPosition(undefined);
    closer.blur();
    return false;

};

var map_titiktersumbat = new ol.Map({
    target: 'map_titiktersumbat',
    layers: [
        new ol.layer.Tile({
            source: new ol.source.OSM()
        }),
        vectorLayer_titiktersumbat
    ],
    view: new ol.View({
        center: ol.proj.fromLonLat([101.449, 0.545]),
        zoom: 15
    })
});

var overlay = new ol.Overlay({
    element: container,
    autoPan: true,
    offset: [0, -10]
});

var fullscreen = new ol.control.FullScreen();
map_titiktersumbat.addControl(fullscreen);

map_titiktersumbat.addOverlay(overlay);

var namajalan = document.getElementById('Nama_jalan'),
    lat = document.getElementById('Lat'),
    point = document.getElementById('no'),
    long = document.getElementById('Long');

map_titiktersumbat.on('pointermove', function (evt) {
    // geturl();


    var feature = map_titiktersumbat.forEachFeatureAtPixel(evt.pixel,
        function (feature, layer) {
            return feature;
        });

    if (feature) {
        var geometry = feature.getGeometry();
        var coord = geometry.getCoordinates();

        var content = '<h3 class="text-center font-weight-bold m-0 pt-2">' + feature.get('No') + '</h3><hr>';
        content += '<img src=' + feature.get('Foto') + ' class="rounded" width="300px" height="200px"/>';

        point.innerHTML = feature.get("No");
        namajalan.innerHTML = feature.get("Nama_Jalan");
        lat.innerHTML = feature.get("Lat");
        long.innerHTML = feature.get("Long");
        content_element.innerHTML = content;
        overlay.setPosition(coord);
        // console.info(feature.getProperties());
    }
});