<?php
include 'header.php';
?>

<!-- Achievement Section Begin -->
<section class="achievement-section set-bg spad" data-setbg="img/bg1.png">
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-lg-3 col-md-3 col-sm-6">

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
                    <h3 style="color:#000000;">Gallery</h3>
                </div>
                <!-- Team Section Begin -->
                <div class="row mb-5">
               
            <?php for ($i=1; $i < 107; $i++) { 
                # code...
            ?>
            <?php if(file_exists("img/titik/tik$i.jpg")==true){ ?>
              <div class="col-sm-4 col-lg-3 mb-3" data-aos="fade-up">
                <div class="block-4 text-center border">
                   
                  <figure class="block-4-image">
                    <a><img src="img/titik/tik<?php echo $i; ?>.jpg" alt="Image placeholder" class="img-fluid mt-3" style="width:400px;height:200px;"></a>
                  </figure>
                </div>
              </div>
            <?php }} ; ?>

            </div>
                <!-- Team Section End -->

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