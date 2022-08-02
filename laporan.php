<?php
$conn = mysqli_connect("localhost", "root", "", "db_company");


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
            <span>History Pesanan </span>
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
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">REKAPAN PENJUALAN</h1>
          <form action="" method="POST" class="form-inline mb-4">
            <label for="date1" style="padding-right: 10px;"> <strong>Tanggal:</strong></label>
            <input type="date" name="date1" id="date1" class="form-control mr-2">
            <label for="date2" style="padding-right: 10px;"><strong>s/d</strong></label>
            <input type="date" name="date2" id="date2" class="form-control mr-4">
            <button type="submit" name="submit" class="btn btn-secondary">Filter</button>
          </form>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Ukuran</th>
                      <th>Bahan</th>
                      <th>Warna</th>
                      <th>Laminasi</th>
                      <th>Quantity</th>
                      <th>Harga satuan</th>
                      <th>HPP</th>
                      <th>Pendapatan</th>
                      <th>Profit</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $no = 1;
                    
                    //mencari berdasarkan tanggal
if (isset($_POST['submit'])) {
  $date1= $_POST['date1'];
  $date2=$_POST['date2'];
  
  if (!empty($date1) && !empty($date2)) {
                        $query = mysqli_query($conn, "SELECT * FROM transaksi INNER JOIN bahan ON transaksi.id_bahan=bahan.id JOIN user ON transaksi.id_user=user.id JOIN warna ON transaksi.id_warna=warna.id JOIN laminasi ON transaksi.id_laminasi=laminasi.id WHERE tanggal BETWEEN '$date1' and '$date2'");
  } else {
                        echo "
                    Data tidak tersedia
                    ";
                        // $query = mysqli_query($conn, "SELECT * FROM transaksi INNER JOIN bahan ON transaksi.id_bahan=bahan.id JOIN user ON transaksi.id_user=user.id JOIN warna ON transaksi.id_warna=warna.id JOIN laminasi ON transaksi.id_laminasi=laminasi.id;");
  }
} else {
                      $query = mysqli_query($conn, "SELECT * FROM transaksi INNER JOIN bahan ON transaksi.id_bahan=bahan.id JOIN user ON transaksi.id_user=user.id JOIN warna ON transaksi.id_warna=warna.id JOIN laminasi ON transaksi.id_laminasi=laminasi.id;");
}
                    while ($row = mysqli_fetch_assoc($query)) : ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $row["tanggal"]; ?></td>
                      <td><?= $row['ukuran_panjang'] . " x " . $row['ukuran_lebar'] . " x " . $row['ukuran_tinggi']; ?>
                      </td>
                      <td><?= $row["nama_bahan"]; ?></td>
                      <td><?= $row["jenis_warna"]; ?></td>
                      <td><?= $row["jenis_laminasi"]; ?></td>
                      <td><?= $row["quantity"]; ?></td>
                      <td><?= number_format($row["harga_satuan"]) ; ?></td>
                      <td>HPP</td>
                      <td><?= number_format($row["total_harga"]) ; ?></td>
                      <td>200.00000</td>
                    </tr>
                    <?php $no++;
                    endwhile; ?>




                  </tbody>
                </table>
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