<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tenang Sekolah</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <!-- owl carousel-->
    <link rel="stylesheet" href="assets/owl.carousel/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/owl.carousel/assets/owl.theme.default.css">

    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.css">

    <style>
    </style>


</head>
<body>
    
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-biru">
        <div class="container">
            <div class="navbar-brand text-white" href="#">
                <img src="img/muhpat.png" width="85" >
                <span class="ml-1">PPDB MUHPAT KENDAL</span>
            </div>
                <button class="navbar-toggler" style="color: #fff" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                       <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Info PPDB</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="panduan.php">Panduan PPDB Online</a>
                                <a class="dropdown-item" href="syarat_daftar.php">Syarat Daftar</a>
                                <a class="dropdown-item" href="jadwal.php">Jadwal Pelaksanaan</a>
                            </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pengumuman.php">pengumuman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form-daftar.php">daftar</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">cetak</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="cetak_kartu.php">cetak Kartu</a>
                                <a class="dropdown-item" href="hasil_pengumuman.php">Hasil Pengumuman</a>
                            </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang.php">Tentang sekolah</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <section id="contact">
      <div class="container">
         <div class="col-md-12 welcome text-center">
            <br><br><br>
            <h2 class="mb-3">TENTANG SEKOLAH</h2>
            <hr>
          </div>
          <div class="col-md-12 foto text-center mb-4">
              <img src="img/muhpat.png" style="">
          </div>
          <div class="col-md-12 link text-center border-none">
              <a href="">sma4kendal.com</a>
          </div>
      </div>
      <br><br><br><br>
    </section>


   <?php 
        include 'footer.php';
     ?> 

    

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