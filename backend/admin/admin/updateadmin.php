<?php
session_start();
require '../../functions.php';

if (!$_SESSION["hak_akses"]=="superadmin") {
	header("Location:../../login.php");
}

$id_user = $_GET["id_user"];

$user = query("SELECT * FROM user WHERE id_user = $id_user")[0];


//cek submit
if (isset ($_POST["submit"]) ) {
	//cek keberhasilan
	if (update ($_POST) > 0 ) {
		echo "
			<script>
				alert('Successed To Update!');
				document.location.href = 'index_admin.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Failed To Update!');
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

  <title>Buwung Puyuh</title>

  <link href="../../../assets/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="../../../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../../assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../../../assets/css/style" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/ppw/backend/index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Buwung Puyuh<sup> 4</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">



      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link " href="/ppw/backend/index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

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

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link disabled" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link disabled" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link disabled" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

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

          <!-- Topbar Navbar -->
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


            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Buwung Puyuh</span>
                <!-- <img class="img-profile rounded-circle" src=""> -->
                <i class="fas fa-fw fa-user-circle"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
			<div class="breadcrumb">
					<li class="breadcrumb-item"><a href="index_admin.php">Admin</a></li>
					<li class="breadcrumb-item active" aria-current="page">Update Data</li>
			</div>


        <!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></a> -->
          </div>
       </div>
       <div class="container-fluid">
         <div class="updateadmin">
					 <form action="" method="post">
					 	<div class="row">
							<div class="col-md-6">

								<div class="form-group">
									<label for="username">Username :</label>
									<input class="form-control" type="hidden" name="id_user" id="username" required value="<?= $user["id_user"] ?>">
									<input class="form-control" type="varchar" name="username" id="username" required value="<?= $user["username"]?>" >
								</div>

								<div class="form-group">
									<label for="password">Password :</label>
									<input class="form-control" type="password" name="password" id="password" required >
								</div>

					 			<div class="form-group">
									<label for="hak_akses">Hak Akses :</label>
					 				<select class="form-control" name="hak_akses" id="hak_akses" required value="<?= $user["hak_akses"] ?>">
					 					<option value="">Pilih</option>
					 					<option value="superadmin">Super Admin</option>
					 					<option value="admin">Admin</option>
					 				</select>
					 		</div>

					 		<div class="form-group">
					 			<label for="nama">Nama :</label>
					 			<input class="form-control" type="varchar" name="nama" id="nama" required value="<?= $user["nama"] ?>">
					 		</div>

					 		<div class="form-group">
					 			<label for="jk">Jenis Kelamin :</label>
					 			<select class="form-control" name="jk" id="jk" required value="<?= $user["jk"] ?>">
					 				<option value="">Pilih</option>
					 				<option value="laki-laki">Laki-laki</option>
					 				<option value="perempuan">Perempuan</option>
					 			</select>
					 		</div>

					 		<div class="form-group">
					 			<label for="tanggal_lahir">Tanggal Lahir :</label>
					 			<input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir" required value="<?= $user["tanggal_lahir"] ?>">
					 		</div>

					 		<div class="form-group">
					 			<label for="alamat">Alamat :</label>
					 			<input class="form-control" type="text" name="alamat" required value="<?= $user["alamat"] ?>">
					 		</div>

					 		<div class="form-group">
					 			<label for="no_hp">No Hp :</label>
					 			<input class="form-control" type="varchar" name="no_hp" id="no_hp" required value="<?= $user["no_hp"] ?>">
					 		</div>

					 		<div class="form-group">
					 			<label for="email">Email :</label>
					 			<input class="form-control" type="varchar" name="email" id="email" required value="<?= $user["email"] ?>">
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
