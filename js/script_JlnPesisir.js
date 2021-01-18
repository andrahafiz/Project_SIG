var vectorLayerDrainase = new ol.layer.Vector({
    source: new ol.source.Vector({
        format: new ol.format.GeoJSON(),
        url: 'json/GeoJSON_LineJLPesisir.json'
    }),
    style: new ol.style.Style({
        stroke: new ol.style.Stroke({
            color: '#2753e5',
            width: 4
        })
    })
});

var map = new ol.Map({
    target: 'map',
    layers: [
        new ol.layer.Tile({
            source: new ol.source.OSM()
        }),
        vectorLayerDrainase
    ],
    view: new ol.View({
        center: ol.proj.fromLonLat([101.436, 0.550]),
        zoom: 15
    })
});

var overlay = new ol.Overlay({
    element: container,
    autoPan: true,
    offset: [0, -10]
});

map.addOverlay(overlay);

var fullscreen = new ol.control.FullScreen();
map.addControl(fullscreen);