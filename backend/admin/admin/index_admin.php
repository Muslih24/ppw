<?php
session_start();
require '../../functions.php';
//
if (!$_SESSION["hak_akses"]=="superadmin") {
  header("Location:../../login.php");
}


 $user = query("SELECT * FROM user ");

if (isset($_POST["cari"])) {
  $user = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <link rel="icon" type="image/png" href="../../../assets/img/logo/Logo7.png">
  <title>Seven Journey</title>


  <!-- Custom fonts for this template-->
  <link href="../../../assets/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../../../assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link  href="../../../assets/css/style.css "rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index_admin.php">
        <div class="sidebar-brand-icon">
          <img src="../../../assets/img/logo/Logo7.png" width="60px">
        </div>
        <div class="sidebar-brand-text mx-3">Seven Journey<sup>7</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Data
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="index_admin.php ">
          <i class="fas fa-fw fa-user-circle"></i>
          <span>Admin</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../wisata/index_wisata.php">
          <i class="fas fa-fw fa-leaf"></i>
          <span>Wisata</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../kategori/index_kategori.php ">
          <i class="fas fa-fw fa-database"></i>
          <span>Kategori</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar static-top">

          <!-- Topbar Search -->
          <form action="" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="cari">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>



          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
                <a href="#" type="button" class="btn btn-danger" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </ul>

        </nav>
        <!-- End of Topbar -->
        <div class="breadcrumb">
  					<li class="breadcrumb-item" aria-current="active">Admin</li>
  			</div>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Admin</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></a> -->
          </div>
       </div>
       <div class="container-fluid">
        <a href="addadmin.php"><button type="button" class="btn btn-success">Tambah Data</button></a>

         <br><br>
           	<table border="1" cellpadding="8" class="center" >
           		<tr>
           			<th>No</th>
           			<th>Username</th>
           			<th>Hak Akses</th>
                <th>Nama</th>
           			<th>Aksi</th>
           		</tr>
           		<?php $i = 1; ?>
           		<?php foreach ($user as $row) :	?>

           		<tr>
           			<td style="width:5%"><?= $i; ?></td>
           			<td style="width:20%"><?= $row["username"]?></td>
           			<td style="width:20%"><?= $row["hak_akses"]?></td>
           			<td style="width:25%"><?= $row["nama"]  ?></td>
           			<td style="width:30%">

                  <a href="detailadmin.php?id_user=<?= $row["id_user"]  ?>"><button class="btn btn-info">Lihat</button></a>
                  <a href="updateadmin.php?id_user=<?= $row["id_user"]  ?>"><button class="btn btn-primary">Edit</button></a>
                  <a href="deleteadmin.php?id_user=<?= $row["id_user"]  ?>"onclick=" return confirm('hapus?');"><button class="btn btn-danger">Delete</button></a>
           			</td>
           		</tr>
           	<?php $i++; ?>
           	<?php endforeach; ?>
           	</table>
          <br><br>
         </div>
       </div>
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../../assets/js/sb-admin-2.min.js"></script>
  <script src="../../../assets/js/jquery.js"></script>

  <!-- Page level plugins -->
  <script src="../../../assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../../../assets/js/demo/chart-area-demo.js"></script>
  <script src="../../../assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>
