var vectorLayer_titikbanjir = new ol.layer.Vector({
  source: new ol.source.Vector({
    format: new ol.format.GeoJSON(),
    url: 'json/TitikBanjir.json'
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

// CREATE MAP TITIK BANJIR
var map_titikbanjir = new ol.Map({
  target: 'map_titikbanjir',
  layers: [
    new ol.layer.Tile({
      source: new ol.source.OSM()
    }),
    vectorLayer_titikbanjir
  ],
  view: new ol.View({
    center: ol.proj.fromLonLat([101.436, 0.545]),
    zoom: 16
  })
});


var overlay = new ol.Overlay({
  element: container,
  autoPan: true,
  offset: [0, -10]
});

var fullscreen = new ol.control.FullScreen();
map_titikbanjir.addControl(fullscreen);

map_titikbanjir.addOverlay(overlay);

var namajalan = document.getElementById('Nama_jalan'),
  lat = document.getElementById('Lat'),
  long = document.getElementById('Long'),
  Damage = document.getElementById('Damage');

map_titikbanjir.on('pointermove', function (evt) {
  // geturl();


  var feature = map_titikbanjir.forEachFeatureAtPixel(evt.pixel,
    function (feature, layer) {
      return feature;
    });

  if (feature) {
    var geometry = feature.getGeometry();
    var coord = geometry.getCoordinates();

    var content = '<h3 class="text-center font-weight-bold m-0 pt-2">' + feature.get('No') + '</h3><hr>';
    content += '<img src=' + feature.get('foto') + ' class="rounded" width="300px" height="200px"/>';

    namajalan.innerHTML = feature.get("Nama_Jalan");
    lat.innerHTML = feature.get("Lat");
    long.innerHTML = feature.get("Long");
    Damage.innerHTML = feature.get("Kerusakan");
    content_element.innerHTML = content;
    overlay.setPosition(coord);
    // console.info(feature.getProperties());
  }
});