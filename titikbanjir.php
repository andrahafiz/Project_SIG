<?php
include 'header.php';
?>

<!-- Achievement Section Begin -->
<section class="achievement-section set-bg spad" data-setbg="img/achievement-bg.jpg">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="achievement__item">
                    <span class="fa fa-user-o"></span>
                    <h2 class="achieve-counter">2468</h2>
                    <p>Clients</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="achievement__item">
                    <span class="fa fa-edit"></span>
                    <h2 class="achieve-counter">2468</h2>
                    <p>Domains</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="achievement__item">
                    <span class="fa fa-clone"></span>
                    <h2 class="achieve-counter">2468</h2>
                    <p>Server</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="achievement__item">
                    <span class="fa fa-cog"></span>
                    <h2 class="achieve-counter">2468</h2>
                    <p>Installs</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Achievement Section End -->

  <!-- Work Section Begin -->
  <section class="work-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>HOW TO BUILD YOUR WEBSITE ONLINE TODAY?</h3>
                    </div>
                    <div class="work__text">
                        <div class="row">
                            <div class="col-lg">
                            <div id="map" class="map"></div>

<div id="popup" class="ol-popup">
<a href="#" id="popup-closer" class="ol-popup-closer"></a>
<div id="popup-content"></div>
</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Section End -->
   <!-- Choose Plan Section Begin -->
   <section class="choose-plan-section spad">
        <div class="container">
        </div>
    </section>
    <!-- Choose Plan Section End -->


<script type="text/javascript">
    // start
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
    // finish 
    // start
    var vectorLayerRiau = new ol.layer.Vector({
      source: new ol.source.Vector({
        format: new ol.format.GeoJSON(),
        url: 'json/riau.json'
      }),

    });
    // finish 

    var map = new ol.Map({
      target: 'map',
      layers: [
        new ol.layer.Tile({
          source: new ol.source.OSM()
        }),  vectorLayer
      ],
      view: new ol.View({
        center: ol.proj.fromLonLat([101.438309, 0.510440]),
        zoom: 10
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

    var overlay = new ol.Overlay({
      element : container,
      autoPan:true,
      offset: [0, -10]
    });

    map.addOverlay(overlay);


    var fullscreen = new ol.control.FullScreen();
    map.addControl(fullscreen);
  

    map.on('click', function (evt){
      var feature = map.forEachFeatureAtPixel(evt.pixel,
      function (feature, layer){
        return feature;
      });
      if (feature){
        var geometry =  feature.getGeometry();
        var coord = geometry.getCoordinates();

        var content = '<h3>Nama Tempat : '+feature.get('Nama_Pemetaan') + '</h3>';
        content += '<h3>Jumlah Korban : '+feature.get('Jumlah_Korban') + '</h3>';
        //<img src='https://images.bisnis-cdn.com/posts/2020/1205538/antarafoto-banjir-jakarta-pusat-250220-sgd-2.jpg' width='300'/>
        content += '<img src="https://asset.kompas.com/crops/ez29NLaYbONrUr0MVvFdsee8lVo=/0x0:0x0/750x500/data/photo/2014/12/23/122744620141220-0840251p.jpg" width="300"/>';
        content_element.innerHTML = content;
        overlay.setPosition(coord);
        console.info(feature.getProperties());
      }
    });
  </script>
<?php
include 'footer.php';
?>