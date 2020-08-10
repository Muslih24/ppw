<?php
require '../../backend/functions.php';


$id_wisata = $_GET["id_wisata"];

$wisata = mysqli_query($conn,"SELECT * FROM wisata WHERE id_wisata = '$id_wisata'");


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/png" href="../../assets/img/logo/Logo7.png">
    <title>7Journey</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <link rel="stylesheet" href="../../assets/frontend/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="../../assets/frontend/css/jquery-ui.css">
    <link rel="stylesheet" href="../../assets/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/frontend/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../../assets/frontend/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="../../assets/frontend/font-awesome-4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="../../assets/frontend/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="../../assets/frontend/css/aos.css">

    <link rel="stylesheet" href="../../assets/frontend/css/style.css">
    <link rel="stylesheet" href="../../assets/frontend/css/stylecard.css">

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
                  <a href="../index.php">Beranda</a>
                </li>

                <li><a href="../destination.php">Dokumentasi</a></li>
                <li><a href="../about.php">Tentang</a></li>
                <!-- <li><a href="booking.html">Book Online</a></li> -->
              </ul>
            </nav>
          </div>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h2"></span></a></div>
        </div>
      </div>
    </header>


    <section class="site-section pb-0"  id="section-services">
      <div class="container">

        <?php while ($a = mysqli_fetch_array($wisata)) {?>
        <div class="row mb-4">
          <div class="col-md-12">
            <div class="section-heading text-center">
              <h1><strong><?= $a['nama_wisata'];?></strong></h1>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="col-md-6 col-lg-4 text-center mb-5">
            <div class="site-service-item site-animate" data-animate-effect="fadeIn">
              <span class="icon">
                <i class="fa fa-map-marker" style=" margin-top: 12px;font-size: 70px;"></i>
              </span>
              <h3 class="mb-4"><b>Alamat</b></h3>
              <p><?= $a['alamat_wisata'];?></p>
              <p></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 text-center mb-5">
            <div class="site-service-item site-animate" data-animate-effect="fadeIn">
              <span class="icon">
                <i class="fa fa-star" style=" margin-top: 15px;font-size: 70px;"></i>
              </span>
              <h3 class="mb-4"><b>Fasilitas</b></h3>
              <p><?= $a['fasilitas'];?></p>
              <p></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 text-center mb-5">
            <div class="site-service-item site-animate" data-animate-effect="fadeIn">
              <span class="icon">
                <i class="fa fa-money" style=" margin-top: 20px;font-size: 60px;"></i>
              </span>
              <h3 class="mb-4"><b>Harga</b></h3>
              <p><?= $a['harga'];?></p>
              <p></p>
            </div>
          </div>



        </div>

          <?php }  ?>
      </div>

    </section>

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


  <script src="../../assets/frontend/js/jquery-3.3.1.min.js"></script>
  <script src="../../assets/frontend/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../assets/frontend/js/jquery-ui.js"></script>
  <script src="../../assets/frontend/js/popper.min.js"></script>
  <script src="../../assets/frontend/js/bootstrap.min.js"></script>
  <script src="../../assets/frontend/js/owl.carousel.min.js"></script>
  <script src="../../assets/frontend/js/jquery.stellar.min.js"></script>
  <script src="../../assets/frontend/js/jquery.countdown.min.js"></script>
  <script src="../../assets/frontend/js/jquery.magnific-popup.min.js"></script>
  <script src="../../assets/frontend/js/bootstrap-datepicker.min.js"></script>
  <script src="../../assets/frontend/js/aos.js"></script>

  <script src="../../assets/frontend/js/main.js"></script>

  </body>
</html>
