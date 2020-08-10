<?php
require '../../backend/functions.php';


$id_kategori = $_GET["id_kategori"];

$wisata = mysqli_query($conn,"SELECT * FROM wisata WHERE id_kategori = '$id_kategori'");

$a = mysqli_query($conn,"SELECT * FROM wisata INNER JOIN kategori ON kategori.id_kategori=wisata.id_kategori WHERE wisata.id_kategori = '$id_kategori'");


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

    <link rel="stylesheet" href="../../assets/frontend/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../../assets/frontend/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="../../assets/frontend/css/aos.css">

    <link rel="stylesheet" href="../../assets/frontend/css/style.css">

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
    <div class="slide-one-item home-slider owl-carousel">
      <?php while ($rows = mysqli_fetch_array($a)) { ?>
      <div class="site-blocks-cover overlay" style="background-image: url(../../assets/frontend/images/view_1.jpg);">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">

              <h1 class="text-white font-weight-light"><?= $rows['nama_kategori'];?></h1>
              <p class="mb-5" style="font-size: 18px;"><?= $rows['deskripsi_kategori'];?></p>
            </div>
          </div>
        </div>
      </div>
    <?php }?>
    </div>


    <div class="site-section block-13 bg-light">


      <div class="site-section cta-big-image" id="about-section">
        <div class="container">
          <div class="row mb-5">

          <?php while ($rows = mysqli_fetch_array($wisata)) { ?>
          </div>

          <div class="row" style="background-color:#dddddd;margin-bottom:20px">
            <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="" style="margin-top:50px">
              <figure class="circle-bg">
                <?="<img src='../../assets/img/images/kategori/".$rows['lampiran']."'style='width:450px; height:300px; margin-left:100px';>"?>
              </figure>
            </div>
            <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="mb-4" style="margin-top:50px">
                <h3 class="h3 mb-4 text-black" style="font-size:30px"><?= $rows["nama_wisata"]?></h3>
              </div>
              <div class="mb-4">
                <ul class="list-unstyled ul-check success" style="font-size:20px">
                  <li>Harga &nbsp&nbsp&nbsp : <?= $rows["harga"]?></li>
                  <li>Alamat &nbsp : <?= $rows["alamat_wisata"]?></li>
                  <li><a href="detail.php?id_wisata=<?= $rows["id_wisata"]?>" class="btn btn-primary" style="border-radius:20px; height:40px; width:200px; margin-top:65px">Lihat</a></li>
                </ul>
              </div>
            </div>

          </section>
          <?php } ?>
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
