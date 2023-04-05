<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        UKK-PRIDE
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

</head>

<body class="">

    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-5 col-md-7 mx-auto ">
                            <div class="card">
                                <div class="card-header text-start">
                                    <h4 class="font-weight-bolder align-items-center text-center">Halo, Reader</h4>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="act_data.php">
                                        <input hidden type="text" value="<?php echo date('Y-m-d') ?>" id="" name="tanggal">
                                        <div class="mb-3">
                                            <input type="text" class="form-control form-control-lg text-uppercase" name="nm_peminjam" placeholder="Nama Peminjam" aria-label="peminjam">
                                        </div>
                                        <div class="mb-3">
                                            <select class="form-select" name="nm_buku" aria-label="Default select example">
                                                <?php
                                                include '../koneksi.php';

                                                $query = mysqli_query($koneksi, "SELECT * FROM t_buku");
                                                $d = mysqli_num_rows($query);
                                                while ($d = mysqli_fetch_array($query)) {
                                                ?>
                                                    <option>
                                                        <?= $d['nm_buku']; ?>
                                                    </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control form-control-lg " min-lenght="8" max-lenght="11" name="no_tlp" placeholder="Nomor telepon" maxlength="13" minlength="12" aria-label="Nomor telepon">
                                        </div>
                                        <div class="mb-3">
                                            <input type="number" class="form-control form-control-lg " name="jumlah" required placeholder="Jumlah Buku" aria-label="Jumlah Buku">
                                        </div>
                                        <div class="mb-3" hidden>
                                            <select class="form-select text-uppercase" name="pinjaman" aria-label="Default select example">
                                                <option value="active">ACTIVE</option>
                                            </select>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Tambah Pembaca</button>
                                            <a href="../admin/update.php" class="btn btn-sm btn-secondary btn-sm w-100 mt-1 mb-0">Kembali</a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
    <!-- sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>