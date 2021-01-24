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
          <span class="fa fa-tint"></span>
          <h2 class="achieve-counter">4</h2>
          <p>Titik Tersumbat</p>
        </div>
      </div>

    </div>
  </div>
</section>
<section class="work-section spad border-0">
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
              <div>
                <div class="section-title mt-5">
                  <h3 class="text-dark">Informasi Titik</h3>
                </div>
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Jalan</th>
                      <th scope="col">Lattitude</th>
                      <th scope="col">Longitude</th>
                      <th scope="col">Kerusakan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td id="Nama_jalan">-</td>
                      <td id="Lat">-</td>
                      <td id="Long">-</td>
                      <td id="Damage">-</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="choose-plan-section spad">

</section>

<?php include 'footer.php'; ?>
<script src="js/myscript1.js"></script>
</body>

</html>