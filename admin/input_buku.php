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
                                    <h4 class="font-weight-bolder align-items-center text-center">Plus Book</h4>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="act_buku.php">
                                        <div class="mb-3">
                                            <input type="text" class="form-control form-control-lg text-uppercase" name="nm_buku" placeholder="Nama Buku" aria-label="Nama Buku">
                                        </div>
                                        <div class="mb-3 d-flex">
                                            <input type="text" class="form-control form-control-lg text-uppercase me-2" name="penulis" placeholder="Penulis" aria-label="Nama Buku">
                                            <input type="text" class="form-control form-control-lg text-uppercase" name="penerbit" placeholder="Penerbit" aria-label="Nama Buku">
                                        </div>
                                        <div class="mb-3 d-flex">
                                            <input type="text" class="form-control form-control-lg text-uppercase  me-2" name="th" placeholder="Tahun Terbit" aria-label="Nama Buku">
                                            <input type="text" class="form-control form-control-lg text-uppercase " name="halaman" placeholder="Halaman Buku" aria-label="Nama Buku">
                                        </div>
                                        <div class="mb-3">
                                            <select class="form-select" name="lorong" aria-label="Default select example">
                                                <?php
                                                include '../koneksi.php';

                                                $query = mysqli_query($koneksi, "SELECT * FROM t_rak");
                                                $d = mysqli_num_rows($query);
                                                while ($d = mysqli_fetch_array($query)) {
                                                ?>
                                                    <option>
                                                        <?= $d['rak']; ?>
                                                    </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" hidden class="form-control form-control-lg" id="massage" name="acak" placeholder="Nama Buku" aria-label="Nama Buku">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" onclick="getRandomNumber()">Tambah Pembaca</button>
                                            <a href="../admin/rak_buku.php" class="btn btn-sm btn-secondary btn-sm w-100 mt-1 mb-0">Kembali</a>
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
    <!-- mact number -->
    <script>
        function getRandomNumber() {
            var randomNumber = Math.random() * 10
            var input = document.getElementById('massage')
            input.value = randomNumber;
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