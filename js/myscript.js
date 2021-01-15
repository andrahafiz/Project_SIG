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
      url: 'json/GeoJSON_Line.json'
    }),
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

  var map = new ol.Map({
    target: 'map',
    layers: [
      new ol.layer.Tile({
        source: new ol.source.OSM()
      }),
      vectorLayerRiau
    ],
    view: new ol.View({
      center: ol.proj.fromLonLat([101.436, 0.545]),
      zoom: 16
    })
  });

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


  var container = document.getElementById('popup'),
    content_element = document.getElementById('popup-content'),
    closer = document.getElementById('popup-closer');

  // closer.onclick = function() {
  //   overlay.setPosition(undefined);
  //   closer.blur();
  //   return false;

  // };
  var overlay = new ol.Overlay({
    element: container,
    autoPan: true,
    offset: [0, -10]
  });

  map.addOverlay(overlay);

  var fullscreen = new ol.control.FullScreen();
  map.addControl(fullscreen);

  map_titikbanjir.addOverlay(overlay);

  var fullscreen = new ol.control.FullScreen();
  map.addControl(fullscreen);

  map_titikbanjir.on('click', function(evt) {
    var feature = map.forEachFeatureAtPixel(evt.pixel,
      function(feature, layer) {
        return feature;
      });

    if (feature) {
      var geometry = feature.getGeometry();
      var coord = geometry.getCoordinates();

      var content = '<h3>Nama Tempat : ' + feature.get('Lebar') + '</h3>';
      // content += '<h3>Jumlah Korban : ' + feature.get('Jumlah_Korban') + '</h3>';
      // content += '<img src="https://drive.google.com/file/d/1EaZgWu1YzOmx6GqODlj2XUn_NeZaOLs8" width="300"/>';

      content_element.innerHTML = content;
      overlay.setPosition(coord);
      console.info(feature.getProperties());

    }
  });

  map_titikbanjir.on('click', function(evt) {
    var feature = map_titikbanjir.forEachFeatureAtPixel(evt.pixel,
      function(feature, layer) {
        return feature;
      });

    if (feature) {
      var geometry = feature.getGeometry();
      var coord = geometry.getCoordinates();

      var content = '<p class="text-center font-weight-bold m-0">Nama Jalan</p><p class="text-center">' + feature.get('Nama_Jalan') + '</p>';
      // content += '<h3>Jumlah Korban : ' + feature.get('Jumlah_Korban') + '</h3>';
      // content += '<img src="https://drive.google.com/file/d/1EaZgWu1YzOmx6GqODlj2XUn_NeZaOLs8" width="300"/>';

      content_element.innerHTML = content;
      overlay.setPosition(coord);
      console.info(feature.getProperties());

    }
  });