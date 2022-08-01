<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/conn/koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="img/logo-putih.png" alt="Kahta" style="width:70px ;">
        </div>


        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link active" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Customer Menu -->
        <li class="nav-item">
          <a class="nav-link" href="customer.php">
            <i class="fas fa-fw fa-book"></i>
            <span>user</span>
          </a>
        </li>

        <!-- Nav Item - History pesanan Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="history.php">
            <i class="fas fa-fw fa-history"></i>
            <span>History Pesanan</span>
          </a>
        </li>
        <!-- Nav Item - Data produksi Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="data-produksi.php">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Data Produksi</span>
          </a>
        </li>
        <!-- Nav Item - Laporan Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="Laporan.php">
            <i class="fas fa-fw fa-file"></i>
            <span>Laporan</span>
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
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hello, Admin</span>

              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->

        <div class="container-fluid">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-9">
                <div class="p-5">
                  <div>
                    <h1 class="h4 text-gray-900 mb-4">Silahkan Ubah Data Laminasi</h1>
                  </div>

                  <?php

                  $result = mysqli_query($conn, "SELECT * FROM laminasi WHERE id='$_GET[id]' ");
                  $i = 1;
                  $row = mysqli_fetch_assoc($result);
                  ?>

                  <form method="POST">
                    <input type="hidden" name="id_bahan" value="<?= $row['id']; ?>">
                    <div class="col-9">
                      <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Jenis Laminasi</label>
                        <input type="text" class="form-control" name="laminasi" id="formGroupExampleInput"
                          value="<?= $row['jenis_laminasi']; ?>">
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Harga</label>
                        <input type="text" class="form-control" name="hargaLaminasi" id="formGroupExampleInput2"
                          value="<?= $row['harga']; ?>">
                      </div>
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="submit" name="submit">Update</button>
                      </div>
                    </div>
                  </form>
                  <?php
                  $id_bahan = $_GET["id"];
                  if (isset($_POST['submit'])) {
                    $laminasi = $_POST['laminasi'];
                    $harga_laminasi = $_POST['hargaLaminasi'];

                    $conn->query("UPDATE laminasi SET jenis_laminasi = '$laminasi', harga='$harga_laminasi'
            WHERE id = '$id_bahan' ");
                    echo "
        <script>
            alert('data laminasi berrhasil diupdate');
            document.location.href = 'data-produksi.php'
        </script>
    ";
                    
                  }
                

                  ?>

                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>