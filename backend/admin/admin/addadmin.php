<?php
session_start();
require '../../functions.php';
//
if (!$_SESSION["hak_akses"]=="superadmin") {
	header("Location:../../login.php");
}

//cek submit
if (isset($_POST["submit"]) ) {
	//cek keberhasilan
	if (add($_POST) > 0 ) {
		echo "
			<script>
				alert('Successed To Input');
				document.location.href = 'index_admin.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Failed To Input');
				document.location.href = 'index_admin.php';
			</script>
		";
	}
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

  <link href="../../../assets/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="../../../assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../../../assets/css/style.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

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
        <nav class="navbar navbar-expand navbar-light bg-white topbar static-top ">

          <!-- Sidebar Toggle (Topbar) -->

        </nav>
        <!-- End of Topbar -->

				<div class="breadcrumb">
						<li class="breadcrumb-item"><a href="index_admin.php">Admin</a></li>
						<li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
				</div>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></a> -->
          </div>
       </div>
       <div class="container-fluid">
         <div class="addadmin">
					 <form action="" method="post">
					 	<div class="row">
							<div class="col-md-6">

								<div class="form-group">
									<label for="username">Username :</label>
									<input class="form-control" type="varchar" name="username" id="username" required>
								</div>

								<div class="form-group">
									<label for="password">Password :</label>
									<input class="form-control" type="password" name="password" id="password" required>
								</div>

					 			<div class="form-group">
									<label for="hak_akses">Hak Akses :</label>
					 				<select class="form-control" name="hak_akses" id="hak_akses" required>
					 					<option value="">Pilih</option>
					 					<option value="superadmin">Super Admin</option>
					 					<option value="admin">Admin</option>
					 				</select>
					 		</div>

					 		<div class="form-group">
					 			<label for="nama">Nama :</label>
					 			<input class="form-control" type="varchar" name="nama" id="nama" required>
					 		</div>

							<br>

					 		<div class="col-md-">
								<button type="submit" class="btn btn-primary" name="submit">Simpan Data</button>
					 			<button type="Cancel" class="btn btn-secondary">Batal</button>
					 		</div>

							<br><br>
							</div>
					 	</div>
						</div>
					 </form>
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

  <!-- Page level plugins -->
  <script src="../../../assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../../../assets/js/demo/chart-area-demo.js"></script>
  <script src="../../../assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>
