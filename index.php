<?php
include 'header.php';
?>

<!-- Hero Section Begin -->
<section class="hero-section">
  <div class="hero__slider owl-carousel">
    <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="hero__text">
              <h5>Kec. Merpati Pandak, Rumbai</h5>
              <h2>Selamat Datang di Website<br /> Drainase Kitee </h2>
              <a href="#" class="primary-btn">Lihat Drainase</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero__img">
              <img src="img/hero/pareet.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="hero__text">
              <h5>Kec. Merpati Pandak, Rumbai</h5>
              <h2>Selamat Datang di Website<br /> Drainase Kitee </h2>
              <a href="#" class="primary-btn">Lihat Drainase</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero__img">
              <img src="img/hero/map.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero Section End -->

<!-- Register Domain Section Begin -->
<section class="register-domain spad">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-8">
        <div class="register__text">
          <div class="section-title">
            <h3>DRAINASE</h3>
          </div>
         
          <p>Drainase adalah lengkungan atau saluran air di permukaan atau di bawah
            tanah, baik yang terbentuk secara alami maupun dibuat manusia. Dalam Bahasa
            Indonesia, drainase bisa merujuk pada parit di permukaan tanah atau gorong –
            gorong dibawah tanah.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Register Domain Section End -->

<!-- Register Domain Section Begin -->
<section class="register-domain spad">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-8">
        <div class="register__text">
          <div class="section-title">
            <h3>Arus Hulu</h3>
          </div>
         
          <p>Hulu adalah awal mula aliran sungai, merupakan bagian sungai yang terletak di daerah pegunungan atau perbukitan</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Register Domain Section End -->

<!-- Services Section Begin -->
<section class="services-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h3>Peta Drainase</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg col-md col-sm">
        <div class="services__item">
          <h5>Pekanbaru</h5>
          <span>Kec. Umban Sari , Kel. Meranti Pandak</span>

          <div id="map" class="map">
            <!-- ISI MAP -->
          </div>

          <div id="popup" class="ol-popup">
            <!-- variabel container-->
            <a href="#" id="popup-closer" class="ol-popup-closer"></a> <!-- variabel closer-->
            <div id="popup-content"></div> <!-- variabel content_element-->
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Services Section End -->
<?php include 'footer.php'; ?>