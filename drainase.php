<?php
include 'header.php';
?>

<!-- Hero Section Begin -->
<section class="hero-section">
  <div class="hero__slider owl-carousel">
    <div class="hero__item set-bg" data-setbg="img/bg1.png">

    </div>
    <div class="hero__item set-bg" data-setbg="img/bg1.png">

    </div>
  </div>
</section>
<!-- Hero Section End -->





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
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Services Section End -->
<section class="register-domain spad">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="register__text text-center">
        <div class="section-title">
          <h3>Filter Data</h3>
        </div>
        <div class="m-5">

          <button class="site-btn" data-toggle="collapse" data-target="#collapseBahan" aria-expanded="false" aria-controls="collapseBahan">
            Bahan Drainase
          </button>
          <button class="site-btn" type="button" data-toggle="collapse" data-target="#collapseJalan" aria-expanded="false" aria-controls="collapseJalan">
            Jalan
          </button>
          <button class="site-btn" type="button" data-toggle="collapse" data-target="#collapseKondisi" aria-expanded="false" aria-controls="collapseKondisi">
            Kondisi Drainase
          </button>
        </div>
        <div class="accordion" id="accordionExample">
          <div class="card border-0">
            <div id="" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                No Filter
              </div>
            </div>
            <div id="collapseBahan" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <div class="about__text">
                  <div class="about__achievement">
                    <div class="about__achieve__item  ">
                      <a href="pesisir.php">
                        <span class="fa fa-clone"></span>
                        <h4 class="achieve-counter"> 17 </h4>
                        <p id="pesisir">JL. Pesisir</p>

                      </a>
                    </div>
                    <div class="about__achieve__item  ">
                      <!-- <button class="btn-kategori" value="panglima" onclick="dosomething(this.value)"> -->
                      <a href="panglima.php">
                        <span class="fa fa-clone"></span>
                        <h4 class="achieve-counter"> 6 </h4>
                        <p id="pesisir">JL. Panglima Undan</p>
                      </a>
                      <!-- </button> -->
                    </div>
                    <div class="about__achieve__item  ">
                      <a href="yosudarso.php">
                        <span class="fa fa-clone"></span>
                        <h4 class="achieve-counter"> 28 </h4>
                        <p>JL. Yos Sudarso</p>
                      </a>
                    </div>
                    <div class="about__achieve__item  ">
                      <a href="gaharu.php">
                        <span class="fa fa-clone"></span>
                        <h4 class="achieve-counter"> 3 </h4>
                        <p>Gg. Gaharu</p>
                      </a>
                    </div>
                    <div class="about__achieve__item  ">
                      <a href="jaya.php">
                        <span class="fa fa-clone"></span>
                        <h4 class="achieve-counter"> 26 </h4>
                        <p>Gg. Jaya</p>
                      </a>
                    </div>
                    <div class="about__achieve__item  ">
                      <a href="cendana.php">
                        <span class="fa fa-clone"></span>
                        <h4 class="achieve-counter"> 3 </h4>
                        <p>Gg. Cendana</p>
                        </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="collapseJalan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <div class="about__text">
                  <div class="about__achievement">
                    <div class="about__achieve__item  ">
                      <button class="btn-kategori" onclick="dosomething(this.value)">
                        <span class="fa fa-clone"></span>
                        <h4 class="achieve-counter"> 12 </h4>
                        <p>Bahan Alami</p>
                      </button>
                    </div>
                    <div class="about__achieve__item  ">
                      <button class="btn-kategori" onclick="dosomething(this.value)">
                        <span class="fa fa-clone"></span>
                        <h4 class="achieve-counter"> 1 </h4>
                        <p>Bahan Batu</p>
                      </button>
                    </div>
                    <div class="about__achieve__item  ">
                      <button class="btn-kategori" onclick="dosomething(this.value)">
                        <span class="fa fa-clone"></span>
                        <h4 class="achieve-counter"> 71 </h4>
                        <p>Bahan Beton</p>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="collapseKondisi" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <div class="about__text">
                  <div class="about__achievement">
                    <div class="about__achieve__item  ">
                      <button class="btn-kategori" onclick="dosomething(this.value)">
                        <span class="fa fa-clone"></span>
                        <h4 class="achieve-counter"> 67 </h4>
                        <p>Kondisi Bagus</p>
                      </button>
                    </div>
                    <div class="about__achieve__item  ">
                      <button class="btn-kategori" onclick="dosomething(this.value)">
                        <span class="fa fa-clone"></span>
                        <h4 class="achieve-counter"> 9 </h4>
                        <p>Kondisi Sedang</p>
                      </button>
                    </div>
                    <div class="about__achieve__item  ">
                      <button class="btn-kategori" onclick="dosomething(this.value)">
                        <span class="fa fa-clone"></span>
                        <h4 class="achieve-counter"> 7 </h4>
                        <p>Kondisi Rusak</p>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="about__text">
          <div class="about__achievement">
            <div class="about_achieve_item">
              <span class="fa fa-clone" aria-hidden="true"></span>
              <h4 class="achieve-counter">67</h4>
              <p>Kondisi Bagus</p>
            </div>
            <div class="about_achieve_item">
              <span class="fa fa-clone" aria-hidden="true"></span>
              <h4 class="achieve-counter">9</h4>
              <p>Kondisi Sedang</p>
            </div>
            <div class="about_achieve_item">
              <span class="fa fa-clone" aria-hidden="true"></span>
              <h4 class="achieve-counter">7</h4>
              <p>Kondisi Rusak</p>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="js/myscript.js"></script>
</body>

</html>