<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Dear-UKK
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <!-- remixicons -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

</head>

<body class="g-sidenav-show   bg-gray-100">
  <?php
  session_start();
  if ($_SESSION['level'] != 'admin') {
    header('location:../index.php?data=belum_login');
  }; ?>
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="index.php">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">si IT</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="index.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="update.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Update</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="rak_buku.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Rak Buku</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link " href="./virtual-reality.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Virtual Reality</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/rtl.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li> -->
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Update</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Update</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">

            <form class="d-flex" method="get" action="update.php">
              <div class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input type="text" class="form-control me-3" name="s" placeholder="Nama peminjam">
              </div>
              <div class="input-group">
                <input type="date" class="form-control" name="t" placeholder="Tanggal">
                <button type="submit" class="input-group-text text-body"></button>
              </div>

            </form>

          </div>
          <ul class="navbar-nav  justify-content-end">
            <li>
              <a class="text-white" href="../logout.php">Logout</a>
            </li>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between pb-0">
              <h6>Peminjam Buku</h6>
              <div>
                <a class="btn btn-sl btn-primary rounded-pill" href="input_data.php">Tambah Data</a>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Peminjam</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Buku</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Telepon</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pemakaian</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $no = 1;
                    include '../koneksi.php';

                    if (isset($_GET['s']) && $_GET['t']) {
                      $name = $_GET['s'];
                      $tanggalAwal = $_GET['t'];
                      $query = mysqli_query($koneksi, "SELECT * FROM t_update where nm_peminjam like '%" . $name . "%' and tanggal = '$tanggalAwal' or pinjaman like '%" . $name . "%' and tanggal = '$tanggalAwal'");
                    } else if (isset($_GET['s']) && $_GET['t'] == "") {
                      $name = $_GET['s'];
                      $query = mysqli_query($koneksi, "SELECT * FROM t_update where nm_peminjam like '%" . $name . "%' or nm_buku like '%" . $name . "%' or pinjaman like '%" . $name . "%'");
                    } else if (isset($_GET['t'])) {
                      $tanggalawal = $_GET['t'];
                      $query = mysqli_query($koneksi, "SELECT * FROM t_update where tanggal = '$tanggalawal'");
                    } else {
                      $query = mysqli_query($koneksi, "SELECT * FROM t_update");
                    }
                    $hitung = mysqli_num_rows($query);
                    while ($d = mysqli_fetch_array($query)) {
                    ?>

                      <tr>
                        <td hidden><?= $d['id_tamu']; ?></td>
                        <td>
                          <p class="text-xs ms-3 font-weight-bold mb-0"><?= $d['tanggal']; ?></p>
                        </td>
                        <td>
                          <p class="text-xs  ms-3 font-weight-bold mb-0"><?= $d['nm_peminjam']; ?></p>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0"><?= $d['nm_buku']; ?></p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold mb-0"><?= $d['no_tlp']; ?></span>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold mb-0"><?= $d['jumlah']; ?></span>
                        </td>
                        <!-- <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">Active</span>
                        </td> -->
                        
                        <?php
                        if ($d['pinjaman'] == 'active') {
                          echo '<td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">ACTIVE</span>
                        </td>';
                        } else {
                          echo '<td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-danger">NON</span>
                        </td>';
                        }

                        ?>
                        
                        <td class="align-middle">
                          <a href="edit.php?id_update=<?php echo $d['id_update']; ?>" class="text-secondary me-4 text-xl" data-toggle="tooltip" data-original-title="Edit user">
                            <i class="ri-edit-box-line"></i>
                          </a>
                          <a href="hapus.php?id_update=<?php echo $d['id_update']; ?>" class="text-secondary text-xl" data-toggle="tooltip" data-original-title="Edit user">
                            <i class="ri-delete-bin-line"></i>
                          </a>

                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
  <!-- sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>