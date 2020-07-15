<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulir Daftar</title>

  <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

    <!-- owl carousel-->
    <link rel="stylesheet" href="assets/owl.carousel/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/owl.carousel/assets/owl.theme.default.css">


    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.css">



</head>
<body  style="background-color: #d2d1d1">
    
    <div class="container">    <br><br>
        <div class="kontent text-center" style="box-shadow: 3px 3px 10px 5px grey;padding: 50px 120px;background-color: #fff; color: #111">
            <br><br>

            <?php
                include 'koneksi.php';

                $id = $_GET['id'];                

                $query =mysqli_query($koneksi, "SELECT * FROM data_pendaftar WHERE nisn = '$id' ");
                $result = mysqli_fetch_array($query);
            ?>

            <p>Selamat <b><?= $result['nama']; ?></b>, Anda Telah Berhasil Mendaftar di PPDB SMA MUHAMMADIYAH 4 KENDAL</p>
                <h3>NISN Anda : <b><?= $result['nisn']; ?></b></h3>

            <br>

            <p>silahkan menunggu Pengumuman diwebsite PPDB SMA MUHAMMADIYAH 4 KENDAL</p>

            <p>jika diterima silahkan Lakukan Registrasi Ulang (Daftar Ulang) Ke SMA MUHAMMADIYAH 4 KENDAL, Yang Beralamat di <br> jl. pemuda no.75 Kendal <br>No Telepon : (0294) 383 068</p>

            <br>

            <p>Jangan Lupa membawa berkas pendaftaran ulang, yaitu :</p>
            
            <div class="card" style="width: 14rem; margin-left: 325px">
                <ol class="py-2" style="text-align: left; text-indent: 3%; ">
                    <li>Ijazah</li>
                    <li>SKHUN</li>
                    <li>Pas Foto 3x4 (3 lembar)</li>
                </ol>
            </div><br>

            <p>Untuk Info Lebih Lanjut Hubungi <b>(0294) 383 068</b> pada jam Kerja :</p>
            <p><b>Senin - jumat (07.30-15.30)</b> <br> <b>sabtu (07.30-13.00)</b><br> <b>Minggu (Tutup)</b></p>
            <br>
            
            <p >NB : silahkan cetak kartu pendaftaran, sebagai Tanda bukti Bahwa anda sudah mendaftar : <b style="font-size: 18px;"><a target="blank" href="kartu.php?id=<?= $_GET['id'] ?>">cetak kartu pendaftaran</a></b></p>

            
            <button class="btn btn-danger mt-3"><a href="index.php" class="text-white" style="text-decoration: none;">Kembali</a></button>

            <br><br><br>

        </div>

        <br><br>
               
     <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="green"/></svg></div>

    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/jquery.cookie/jquery.cookie.js"> </script>
    <script src="assets/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>


</body>
</html>