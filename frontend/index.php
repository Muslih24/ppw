<?php
require '../backend/functions.php';

$kategori = query("SELECT * FROM kategori");
?>
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/png" href="images/logo_kita.png">
    <title>7Journey</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <link rel="stylesheet" href="../assets/frontend/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/frontend/css/jquery-ui.css">
    <link rel="stylesheet" href="../assets/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/frontend/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../assets/frontend/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../assets/frontend/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="../assets/frontend/css/aos.css">

    <link rel="stylesheet" href="../assets/frontend/css/style.css">

  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col8 col-xl0">
            <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">Seven Journey</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block" style="font-size: 18px;">
                <li class="active" >
                  <a href="index.php">Beranda</a>
                </li>

                <li><a href="destination.php">Dokumentasi</a></li>
                <li><a href="about.php">Tentang</a></li>
                <!-- <li><a href="booking.html">Book Online</a></li> -->
              </ul>
            </nav>
          </div>



            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h2"></span></a></div>


        </div>
      </div>

    </header>





    <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover overlay" style="background-image: url(../assets/frontend/images/view_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">


              <h1 class="text-white font-weight-light">Jangan Lupa HOLIDAE</h1>
              <p class="mb-5" style="font-size: 18px;">"Mari Melangkah, Tinggalkan Penat"</p>


            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url(../assets/frontend/images/view_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Banyak Tempat Wisata Yang Menarik</h1>
              <p class="mb-5">"Check Informasi Wisata Disini Guys"</p>

            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="site-section">
      <div class="container overlap-section">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="unit-1 text-center">
              <img src="../assets/frontend/images/kawah_ratu.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Kawah Ratu Bogor</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="unit-1 text-center">
              <img src="../assets/frontend/images/kebon_raya.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Kebun Raya Bogor</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="unit-1 text-center">
              <img src="../assets/frontend/images/ranggon_hils.jpg" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Ranggon Hils</h3>
              </div>
            </a>
          </div>
        </div>
      </div>

    </div>

    <div class="site-section block-13 bg-light">






    <div class="site-section">

      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <p style="font-size: 28px;" class="font-weight-light text-black">Kategori</p>
          </div>
        </div>
        <div class="row">
          <?php foreach ($kategori as $row) : ?>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <?="<img src='../../../assets/img/images/kategori".$row['foto_kategori']."'style='width:450px; height:300px;';>"?>
              <div class="unit-1-text">
                <h3 class="unit-1-heading"><?= $row["nama_kategori"]?></h3>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
        </div>

    <!-- <div class="site-section bg-light">

    </div> -->


    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(../assets/frontend/images/vimala_hils.jpg); background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
            <a href="../assets/frontend/images/kita_video.mp4" class="play-single-big mb-4 d-inline-block popup-vimeo"><span class="icon-play"></span></a>
            <h2 class="text-white font-weight-light mb-5 h1">By : 7 Journey</h2>

          </div>
        </div>
      </div>
    </div>



    <footer class="site-footer">
        <div class="text-center">
          <div class="col-md-12">

            <p style="font-size: 18px;">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Seven Journey<i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Kelompok 4</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
    </footer>


  <script src="../assets/frontend/js/jquery-3.3.1.min.js"></script>
  <script src="../assets/frontend/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../assets/frontend/js/jquery-ui.js"></script>
  <script src="../assets/frontend/js/popper.min.js"></script>
  <script src="../assets/frontend/js/bootstrap.min.js"></script>
  <script src="../assets/frontend/js/owl.carousel.min.js"></script>
  <script src="../assets/frontend/js/jquery.stellar.min.js"></script>
  <script src="../assets/frontend/js/jquery.countdown.min.js"></script>
  <script src="../assets/frontend/js/jquery.magnific-popup.min.js"></script>
  <script src="../assets/frontend/js/bootstrap-datepicker.min.js"></script>
  <script src="../assets/frontend/js/aos.js"></script>

  <script src="../assets/frontend/js/main.js"></script>

  </body>
</html>
