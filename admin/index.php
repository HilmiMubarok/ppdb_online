<?php 
    session_start();
    (!isset($_SESSION['admin']) ? header("location:login.php") : null)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PPDB MUHPAT</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">

    <!-- owl carousel-->
    <link rel="stylesheet" href="../assets/owl.carousel/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="../assets/owl.carousel/assets/owl.theme.default.css">

    <!-- Admin css-->
    <link rel="stylesheet" href="../css/admin.css">


</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-blue">
        <a href="" class="navbar-brand">SELAMAT DATANG ADMIN | <b>SMA MUHAMMADIYAH 4 KENDAL</b></a>
    </nav>

    <div class="row no-gutters">
        <div class="col-md-2 bg-dark pr-3 pt-4">
            <ul class="nav flex-column ml-3">
                <li class="nav-item">
                    <a href="index.php" class="nav-link active text-white"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
                </li>
                <li class="nav-item dropdown text-white">
                    <a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><i class="fas fa-info-circle mr-2"></i>Info PPDB</a><hr class="bg-secondary">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="panduan_ppdb.php">Panduan PPDB</a>
                            <a class="dropdown-item" href="syarat_daftar.php">Syarat Daftar</a>
                            <a class="dropdown-item" href="manajemen_jadwal.php">jadwal ppdb</a>
                        </div>
                </li>
                <li class="nav-item dropdown text-white">
                    <a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><i class="fas fa-database mr-2"></i>Data Siswa</a><hr class="bg-secondary">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="semua_siswa.php">Semua Siswa</a>
                            <a class="dropdown-item" href="siswa_diterima.php">Diterima</a>
                            <a class="dropdown-item" href="siswa_ditolak.php">Ditolak</a>
                            <a class="dropdown-item" href="belum_diverifikasi.php">Belum Diverifikasi</a>
                        </div>
                </li>
                <li class="nav-item">
                    <a href="pendaftaran.php" class="nav-link text-white"><i class="fas fa-clipboard-list mr-2"></i>pendaftaran</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a href="pengumuman.php" class="nav-link text-white"><i class="fas fa-clipboard-list mr-2"></i>pengumuman</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a href="foto.php" class="nav-link text-white"><i class="fas fa-images mr-2"></i>Foto Terbaru</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link text-white"><i class="fas fa-sign-out-alt mr-2"></i>logout</a> <hr class="bg-secondary">
                </li>
            </ul>
        </div>

        <div class="col-md-10 p-5 mt-1 mb-5">
            <h3><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</h3><hr><br>

            <div class="row text-white">
                <div class="card bg-info ml-5 mt-2" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-question-circle mr-3"></i>
                        </div>
                        <h5 class="card-tittle">Panduan PPDB</h5>
                        <div class="display-4"><br></div>
                        <a href="panduan_ppdb.php"><p class="card-text text-white">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                    </div>
                </div>
                <div class="card bg-success ml-4 mt-2" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-list-alt mr-3"></i>
                        </div>
                        <h5 class="card-tittle">Syarat Daftar</h5>
                        <div class="display-4"><br></div>
                        <a href="syarat_daftar.php"><p class="card-text text-white">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                    </div>
                </div>
                <div class="card bg-danger ml-4 mt-2" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-clock mr-3"></i>
                        </div>
                        <h5 class="card-tittle">Jadwal PPDB</h5>
                        <div class="display-4"><br></div>
                        <a href="manajemen_jadwal.php"><p class="card-text text-white">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                    </div>
                </div>
                <div class="card bg-warning ml-5 mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-check-circle mr-3"></i>
                        </div>
                        <h5 class="card-tittle">Siswa Diterima</h5>
                        <div class="display-4"><br></div>
                        <a href="siswa_diterima.php"><p class="card-text text-white">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                    </div>
                </div>
                <div class="card bg-secondary ml-4 mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-times-circle mr-3"></i>
                        </div>
                        <h5 class="card-tittle">Siswa Ditolak</h5>
                        <div class="display-4"><br></div>
                        <a href="siswa_ditolak.php"><p class="card-text text-white">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                    </div>
                </div>
                <div class="card bg-primary ml-4 mt-4" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-user-check mr-3"></i>
                        </div>
                        <h5 class="card-tittle">Belum Diverifikasi</h5>
                        <div class="display-4"><br></div>
                        <a href="belum_diverifikasi.php"><p class="card-text text-white">lihat detail<i class="fas fa-angle-double-right ml-2"></i></p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../assets/owl.carousel/owl.carousel.min.js"></script>
    <script src="../assets/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>

</body>
</html>