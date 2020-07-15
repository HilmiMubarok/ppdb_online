<?php 
    session_start();
    (!isset($_SESSION['admin']) ? header("location:../login.php") : null)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PPDB MUHPAT</title>

     <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">

    <!-- owl carousel-->
    <link rel="stylesheet" href="../../assets/owl.carousel/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="../../assets/owl.carousel/assets/owl.theme.default.css">

    <!-- Admin css-->
    <link rel="stylesheet" href="../../css/admin.css">


</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-blue">
        <a href="" class="navbar-brand">SELAMAT DATANG ADMIN | <b>SMA MUHAMMADIYAH 4 KENDAL</b></a>
    </nav>

    <div class="row no-gutters">
        <div class="col-md-2 bg-dark pr-3 pt-4">
            <ul class="nav flex-column ml-3">
                <li class="nav-item">
                    <a href="../index.php" class="nav-link active text-white"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
                </li>
                <li class="nav-item dropdown text-white">
                    <a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><i class="fas fa-info-circle mr-2"></i>Info PPDB</a><hr class="bg-secondary">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../panduan_ppdb.php">Panduan PPDB</a>
                            <a class="dropdown-item" href="../syarat_daftar.php">Syarat Daftar</a>
                            <a class="dropdown-item" href="../manajemen_jadwal.php">jadwal ppdb</a>
                        </div>
                </li>
                <li class="nav-item dropdown text-white">
                    <a href="" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><i class="fas fa-database mr-2"></i>Data Siswa</a><hr class="bg-secondary">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../semua_siswa.php">Semua Siswa</a>
                            <a class="dropdown-item" href="../siswa_diterima.php">Diterima</a>
                            <a class="dropdown-item" href="../siswa_ditolak.php">Ditolak</a>
                            <a class="dropdown-item" href="../belum_diverifikasi.php">Belum Diverifikasi</a>
                        </div>
                </li>
                <li class="nav-item">
                    <a href="../pendaftaran.php" class="nav-link text-white"><i class="fas fa-clipboard-list mr-2"></i>pendaftaran</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a href="../pengumuman.php" class="nav-link text-white"><i class="fas fa-clipboard-list mr-2"></i>pengumuman</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a href="../foto.php" class="nav-link text-white"><i class="fas fa-images mr-2"></i>foto Terbaru</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a href="../logout.php" class="nav-link text-white"><i class="fas fa-sign-out-alt mr-2"></i>logout</a> <hr class="bg-secondary">
                </li>
            </ul>
        </div>

       <?php
            include '../../koneksi.php';

            $id = $_GET["id"];
            $query =mysqli_query ($koneksi, "SELECT * FROM foto WHERE id_foto='$id'");
            $result = mysqli_fetch_array($query);
        ?>

        <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-calendar-plus mr-2 mb-3"></i> Edit foto</a></h3> <hr class="mb-4">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <img src="../../img/foto-terbaru/<?= $result['foto'] ?>"  width="450">
                    <div class="col-md-12 mt-3">
                        <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1" >
                    </div>
                </div> <br>
                <button class="btn btn-danger"><a href="../foto.php" style="text-decoration: none; color: #fff">Kembali</a></button>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

    <?php
        
        if (isset($_POST['submit'])) {

        $foto = $_FILES['foto']['name'];

        $dir = '../../img/foto-terbaru/'. $foto;
        if (!$foto) {

        $query = "UPDATE foto SET foto = '$foto' WHERE id_foto='$id' ";
        $result = mysqli_query($koneksi,$query);

        if ($result) {
            echo "<script>
                    alert('berhasil mengedit foto');
                    window.location.assign('../foto.php');
                </script>";
        }else {
            echo "<script>
                    alert('gagal mengedit foto');
                    window.location.assign('edit_foto.php');
                </script>";
            }
        }  else {
            move_uploaded_file($_FILES['foto']['tmp_name'], $dir);
            $query = "UPDATE foto SET foto = '$foto' WHERE id_foto='$id' ";
            $result = mysqli_query($koneksi,$query);

            if ($result) {
            echo "<script>
                    alert('berhasil mengedit foto');
                    window.location.assign('../foto.php');
                </script>";
            }else {
            echo "<script>
                    alert('gagal mengedit foto');
                    window.location.assign('edit_foto.php');
                </script>";
                }
            }
        }
    ?>


    

    <script src="../../assets/jquery/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../../assets/owl.carousel/owl.carousel.min.js"></script>
    <script src="../../assets/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>


</body>
</html>