<?php
session_start();
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
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  Hello, Admin
                </span>
                <!-- <img class="img-profile rounded-circle" src="img/undraw_profile.svg"> -->
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

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">DASHBOARD</h1>
          <!-- Page Heading -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pesanan Aktif</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Username</th>
                      <th>Nama Brand</th>
                      <th>Ukuran</th>
                      <th>Bahan</th>
                      <th>Quantity</th>
                      <th>Total Harga</th>
                      <th>Aksi</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;

                    // $query = mysqli_query($conn, "SELECT * FROM transaksi JOIN bahan ON id_bahan JOIN user ON id_user WHERE transaksi.id_transaksi = '$id' ");
                    $query = mysqli_query($conn, "SELECT * FROM transaksi INNER JOIN bahan ON transaksi.id_bahan=bahan.id JOIN user ON transaksi.id_user=user.id;");

                    while ($data = mysqli_fetch_array($query)) { ?>
                      <tr>
                        <td> <?= $no++; ?></td>
                        <td>
                          <?= $data['tanggal']; ?>
                        </td>
                        <td> <?= $data['username']; ?></td>
                        <td><?= $data['nama_brand']; ?></td>
                        <td>
                          <?= $data['ukuran_panjang'] . " x " . $data['ukuran_lebar'] . " x " . $data['ukuran_tinggi']
                          ?> </td>
                        <td><?= $data['nama_bahan']; ?></td>
                        <td><?= $data['quantity']; ?></td>
                        <td><?= "Rp. " . number_format($data['total_harga']); ?></td>
                        <td>

                          <!-- Button trigger modal -->

                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?= $data['id_transaksi'] ?>">
                            Konfirmasi
                          </button>
                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal<?= $data['id_transaksi'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Rincian
                                    Pesanan <?= $data['username'] ?> -
                                    <?= $data['nama_brand'] ?>
                                  </h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <!-- <img src="http://pembelian_putri.test/img/buktiTransaksi/<?= $data['bukti_pembayaran'] ?>"
                                                                    alt="" style="width:-webkit-fill-available ;"> -->
                                  <p>
                                    Jenis Pembayaran : <?= $data['dp'] == false ? "Uang Muka / DP" : "Pelunasan" ?>
                                  </p>
                                  <p>
                                    Bukti :
                                    <a href="http://skrpsi.test/img/buktiTransaksi/<?= $data['bukti_pembayaran'] ?>" target="_blank">Lihat
                                      Bukti
                                      Pembayaran
                                      <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>
                                  </p>
                                </div>

                                <form action="konfirmasi.php?id=<?= $data['id_transaksi'] ?>" method="POST">
                                  <div class="modal-footer">
                                    <input type="hidden" name="dp" value="<?= $data['dp'] ?>">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name='konfirmasi' class="btn btn-primary">Konfirmasi Pembayaran</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </td>


                      </tr>
                    <?php } ?>



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
  <a class=" scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to
            Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are
          ready to end your current session.</div>
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
  </script>

  <!-- <script>
  var myModal = document.getElementById('myModal')
  var myInput = document.getElementById('myInput')

  myModal.addEventListener('shown.bs.modal', function() {
    myInput.focus()
  })
  </script> -->

</body>

</html>

</html>