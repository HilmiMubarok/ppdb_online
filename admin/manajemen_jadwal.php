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
        
        <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-calendar-plus mr-2 mb-3"></i> Manajemen Jadwal Pelaksanaan</a></h3>
            
            <a href="tombol-tambah/tambah_jadwal.php" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>Tambah Jadwal Pelaksanaan</a>

            <table class="table table-striped table-bordered">
                <thead class="text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kegiatan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Lokasi</th>
                        <th colspan="2" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php 
                    include '../koneksi.php';

                    $no = 1;
                    $query = mysqli_query($koneksi,"SELECT * FROM jadwal");
                    while($result = mysqli_fetch_assoc ($query)){
                ?>
                <tr>
                    <td><?= $no++;  ?></td>
                    <td><?= $result['kegiatan']; ?></td>
                    <td><?= $result['tanggal']; ?></td>
                    <td><?= $result['waktu']; ?></td>
                    <td><?= $result['lokasi']; ?></td>
                        <td><a href="tombol-edit/edit_jadwal.php?id=<?= $result['id_jadwal']; ?>">
                            <i class="fas fa-edit bg-success text-white rounded p-2" data-toogle="tooltip" title="Edit"></i>
                        </a></td>
                        <td><a href="tombol-hapus/hapus_jadwal.php?id=<?= $result['id_jadwal']; ?>">
                            <i class="fas fa-trash-alt bg-danger text-white rounded p-2" data-toogle="tooltip" title="Hapus"></i>
                        </a></td>
                    </tr>

                <?php } ?>
                </tbody>

            </table>
        </div>
    </div>

    

    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../assets/owl.carousel/owl.carousel.min.js"></script>
    <script src="../assets/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>


</body>
</html>