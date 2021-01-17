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

<section class="register-domain spad">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-8">
        <div class="register__text">
          <div class="section-title">
            <h3>Register Your Domain Now!</h3>
          </div>
          <div class="register__form">
            <form action="#">
              <!-- <input type="text" placeholder="ex: cloudhost"> -->
              <div class="inputan">

              </div>
              <div class="change__extension">
                .com
                <ul>
                  <li>.net</li>
                  <li>.org</li>
                  <li>.me</li>
                </ul>
              </div>
              <button type="submit" class="site-btn">Search</button>
            </form>
          </div>
          <div class="register__result">
            <ul>
              <li>.com <span>$1.95</span></li>
              <li>.net <span>$1.95</span></li>
              <li>.org <span>$1.95</span></li>
              <li>.us <span>$1.95</span></li>
              <li>.in <span>$1.95</span></li>
            </ul>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section Begin -->
<section class="register-domain spad">
  <div class="container">
    <div class="row d-flex justify-content-center">
        <div class="register__text text-center">
        <div class="section-title">
            <h3>Filter Data</h3>
          </div>
          <div class="m-5">
          <a href="#" class="primary-btn"> Bahan Drainase </a>
          <a href="#" class="primary-btn"> Jalan </a>
          <a href="#" class="primary-btn"> Kondisi Drainase </a></div>
        <div class="about__text">
                        <div class="about__achievement">
                            <div class="about__achieve__item">
                                <span class="fa fa-clone"></span>
                                <h4 class="achieve-counter"> 17 </h4>
                                <p>JL. Pesisir</p>
                            </div>
                            <div class="about__achieve__item">
                                <span class="fa fa-clone"></span>
                                <h4 class="achieve-counter"> 6 </h4>
                                <p>JL. Panglima Undan</p>
                            </div>
                            <div class="about__achieve__item">
                                <span class="fa fa-clone"></span>
                                <h4 class="achieve-counter"> 28 </h4>
                                <p>JL. Yos Sudarso</p>
                            </div>
                            <div class="about__achieve__item">
                                <span class="fa fa-clone"></span>
                                <h4 class="achieve-counter"> 3 </h4>
                                <p>Gg. Gaharu</p>
                            </div>
                            <div class="about__achieve__item">
                                <span class="fa fa-clone"></span>
                                <h4 class="achieve-counter"> 26 </h4>
                                <p>Gg. Jaya</p>
                            </div>
                            <div class="about__achieve__item">
                                <span class="fa fa-clone"></span>
                                <h4 class="achieve-counter"> 3 </h4>
                                <p>Gg. Cendana</p>
                            </div>
                        </div>
                    </div>
      </div>
    </div>
  </div>
</section>
<!-- About Section End -->

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