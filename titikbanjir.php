<?php
include 'header.php';
?>

<!-- Achievement Section Begin -->
<section class="achievement-section set-bg spad" data-setbg="img/achievement-bg.jpg">
  <div class="container mt-5">
    <div class="row justify-content-md-center">
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="achievement__item">
          <span class="fa fa-water"></span>

          <h2 class="achieve-counter">6</h2>
          <p>Titik Banjir</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="achievement__item">
          <!-- <i class="fas fa-tint"></i> -->
          <span class="fa fa-tint"></span>
          <h2 class="achieve-counter">4</h2>
          <p>Parit Tersumbat</p>
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
          <h3>Titik Banjir</h3>
        </div>
        <div class="work__text">
          <div class="row">
            <div class="col-lg">
              <div id="map_titikbanjir" class="map"></div>

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

<?php
include 'footer.php';
?>