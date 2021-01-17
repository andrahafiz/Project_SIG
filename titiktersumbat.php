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
<section class="work-section spad border-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h3>Titik tersumbat</h3>
        </div>
        <div class="work__text">
          <div class="row">
            <div class="col-lg">
              <div id="map_titiktersumbat" class="map"></div>

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

<!-- Choose Plan Section End -->
<section class="choose-plan-section spad">
  <div class="container">
    <div class="tab-content">
      <div class="tab-pane active" id="tabs-1" role="tabpanel">
        <div class="hosting__feature__table">
          <table>
            <thead>
              <tr>
                <th>
                  <div class="hosting__feature--plan">
                    <div class="plan__title">Nama Jalan</div>
                  </div>
                </th>
                <th>
                  <div class="hosting__feature--plan">
                    <div class="plan__title">Lattitude</div>
                  </div>
                </th>
                <th>
                  <div class="hosting__feature--plan">
                    <div class="plan__title">Longitude</div>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="hosting__feature--item">Jl. Pesisir </td>
                <td class="hosting__feature--info">0,545476</td>
                <td class="hosting__feature--info">101,455676</td>
              </tr>
              <tr>
                <td class="hosting__feature--item">Jl. Pesisir </td>
                <td class="hosting__feature--info">0,5453787</td>
                <td class="hosting__feature--info">101,451945</td>
              </tr>
              <tr>
                <td class="hosting__feature--item">Jl. Pesisir </td>
                <td class="hosting__feature--info">0,54539</td>
                <td class="hosting__feature--info">101,451113</td>
              </tr>
              <tr>
                <td class="hosting__feature--item">Jl. Pesisir </td>
                <td class="hosting__feature--info">0,540713</td>
                <td class="hosting__feature--info">101,446426</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</section>

<?php
include 'footer.php';
?>