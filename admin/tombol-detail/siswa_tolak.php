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
<body  style="background-color: #d2d1d1">

    
    <?php
    include '../../koneksi.php';

    $id = $_GET["id"];
    $query =mysqli_query ($koneksi, "SELECT * FROM data_pendaftar WHERE nisn='$id'");
    $result = mysqli_fetch_array($query);
    ?>
    <div class="container" style="padding: 0 140px">    <br><br>
        <div class="kontent" style="box-shadow: 3px 3px 10px 5px grey;padding: 50px 120px;background-color: #fff">
            <h1 class="text-center">Detail <?= $result['nama'] ?></h1>   <hr><br>

    <form method="post">        
        <div style="background-color: #d2d2d2; height: 30px" class="mb-3"><h5><span>1. </span>Data Pendaftar</h5>
        </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">NISN</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['nisn']; ?></a></div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['nama']; ?></a></div>
                </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['jenis_kelamin']; ?></a></div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['tempat_lahir']; ?></a></div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['tanggal_lahir']; ?></a></div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Agama</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['agama']; ?></a></div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Nomor HP</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['no_hp']; ?></a></div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['email']; ?></a></div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['alamat']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Kode Pos</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['kode_pos']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">provinsi</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['provinsi']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Kabupaten/Kota </label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['kabupaten']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Kecamatan</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['kecamatan']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Desa</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['desa']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Rt</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['rt']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Rw</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['rw']; ?></a></div>
                </div>
                <br>

          <div style="background-color: #d2d2d2; height: 30px" class="mb-3"><h5><span>2. </span>Identitas Sekolah</h5></div>
                  <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Nama Sekolah</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['nama_sekolah']; ?></a></div>
                </div>
                  <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Provinsi</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['prov_sekolah']; ?></a></div>
                </div>
                  <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Kabupaten</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['kab_sekolah']; ?></a></div>
                </div>
                <br>

                <div style="background-color: #d2d2d2; height: 30px" class="mb-3"><h5><span>3. </span>Data Orang Tua</h5></div>
          <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Nama Ayah</label>
                   <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['nama_ayah']; ?></a></div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['pekerjaan_ayah']; ?></a></div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Pendapatan Ayah</label>
                   <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['pendapatan_ayah']; ?></a></div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Nama Ibu</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['nama_ibu']; ?></a></div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Pekerjaan Ibu</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['pekerjaan_ibu']; ?></a></div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Pendapatan Ibu</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['pendapatan_ibu']; ?></a></div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Alamat Orang Tua</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['alamat_ortu']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Kode Pos</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['kode_ortu']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">provinsi</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['prov_ortu']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Kabupaten/Kota </label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['kab_ortu']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Kecamatan</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['kec_ortu']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Desa</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['desa_ortu']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Rt</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['rt_ortu']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Rw</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['rw_ortu']; ?></a></div>
                </div>
                <br>
            <div style="background-color: #d2d2d2; height: 30px" class="mb-3"><h5><span>4. </span>Data Wali ( jika ada )</h5></div>
          <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Nama Wali</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['nama_wali']; ?></a></div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Pekerjaan Wali</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['pekerjaan_wali']; ?></a></div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Pendapatan wali</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['pendapatan_wali']; ?></a></div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Alamat Wali</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['alamat_wali']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Kode Pos</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['kode_wali']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">provinsi</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['prov_wali']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Kabupaten/Kota </label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['kab_wali']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Kecamatan</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['kec_wali']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Desa</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['desa_wali']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Rt</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['rt_wali']; ?></a></div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-3 col-form-label">Rw</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['rw_wali']; ?></a></div>
                </div>
                <br>

          <div style="background-color: #d2d2d2; height: 30px" class="mb-3"><h5><span>5. </span>Pilihan Jurusan</h5></div>
                  <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Akademik</label>
                    <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['jurusan_akademik']; ?></a></div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Terpadu</label>
                        <div class="col-sm-9 pl-0 form-control"><a class="ml-2"><?= $result['jurusan_terpadu']; ?></a></div>
                </div>
                
                <br>    
                <div style="background-color: #d2d2d2; height: 30px" class="mb-3"><h5><span>6. </span>Upload Foto</h5></div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label" for="exampleFormControlFile1">Foto Anda </label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <img src="../../img/gambar-siswa/<?= $result['foto'] ?>" width="250">
                    </div>
                </div>
                <br><br>
                <div class="form-group row">
                    <div class="col-sm-10 text-center">
                        <button class="btn btn-primary" ><a href="../siswa_ditolak.php" class="text-white" style="text-decoration: none;">Kembali</a></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br><br><br>


<script src="../../assets/jquery/jquery.min.js"></script>
<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../../assets/jquery.cookie/jquery.cookie.js"> </script>
<script src="../../assets/owl.carousel/owl.carousel.min.js"></script>
<script src="../../assets/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>


</body>
</html>