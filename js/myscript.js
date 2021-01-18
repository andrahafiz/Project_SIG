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

var vectorLayerDrainase = new ol.layer.Vector({
  source: new ol.source.Vector({
    format: new ol.format.GeoJSON(),
    url: 'json/GeoJSON_Line.json'
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

  var container_banjir = document.getElementById('popup-banjir'),
  content_element_banjir = document.getElementById('popup-content-banjir');

closer.onclick = function () {
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

map_titikbanjir.addOverlay(overlay);

map_titikbanjir.on('click', function (evt) {
  geturl();


  var feature = map_titikbanjir.forEachFeatureAtPixel(evt.pixel,
    function (feature, layer) {
      return feature;
    });

  if (feature) {
    var geometry = feature.getGeometry();
    var coord = geometry.getCoordinates();
    // console.log("Hi apa kabar!");

    var content = '<p class="text-center font-weight-bold m-0">Nama Jalan</p><p class="text-center m-0">' + feature.get('Nama_Jalan') + '</p>';
    // var content = '<p class="text-center font-weight-bold m-0">Nama Jalan</p><p class="text-center m-0">' + feature.get('Nama_Jalan') + '</p>';
    // content += '<h3>Jumlah Korban : ' + feature.get('Jumlah_Korban') + '</h3>';
    // content += '<img src=' + feature.get('Foto') + ' width="300px" height="200px"/>';

    content_element_banjir.innerHTML = content;
    overlay.setPosition(coord);
    console.info(feature.getProperties());

  }
});

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
    zoom: 16
  })
});

map_titiktersumbat.addOverlay(overlay);

map_titiktersumbat.on('click', function (evt) {
  geturl();


  var feature = map_titiktersumbat.forEachFeatureAtPixel(evt.pixel,
    function (feature, layer) {
      return feature;
    });

  if (feature) {
    var geometry = feature.getGeometry();
    var coord = geometry.getCoordinates();
    // console.log("Hi apa kabar!");

    var content = '<p class="text-center font-weight-bold m-0">Nama Jalan</p><p class="text-center m-0">' + feature.get('Nama Jalan') + '</p>';
    // var content = '<p class="text-center font-weight-bold m-0">Nama Jalan</p><p class="text-center m-0">' + feature.get('Nama_Jalan') + '</p>';
    // content += '<h3>Jumlah Korban : ' + feature.get('Jumlah_Korban') + '</h3>';
    content += '<img src=' + feature.get('Foto') + ' width="300px" height="200px"/>';

    content_element.innerHTML = content;
    overlay.setPosition(coord);
    console.info(feature.getProperties());

  }
});

function geturl() {
  // code to be executed
  const getLastItem = thePath => thePath.substring(thePath.lastIndexOf('/') + 1);
  const Category = getLastItem(window.location.href).replace(".php", "").trim();
  console.log(Category);
};