<?php 

    include 'koneksi.php';

    $query =mysqli_query ($koneksi, "SELECT * FROM manage_pendaftaran");
    $result = mysqli_fetch_row($query);

    $data = $result[0];

    if ($data == "Tutup") {
        header("location:daftar-tutup.php");
    }
?>
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
    
    <div class="container" style="padding: 0 30px">    <br><br>
        <div class="kontent" style="box-shadow: 3px 3px 10px 5px grey;padding: 50px 120px;background-color: #fff; color: #111" >
            <h3 class="text-center">Formulir Pendaftaran</h3>
            <h1 class="text-center">PPDB SMA MUHPAT KENDAL</h1>   <hr><br>

    <form method="post" enctype="multipart/form-data">        
        <div style="background-color: #d2d2d2; height: 30px" class="mb-3"><h5><span>1. </span>Data Pendaftar</h5>
        </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">NISN</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="number" name="nisn" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <select class="form-control" name="jenis_kelamin" required>
                            <option value="">---</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="text" class="form-control" name="tempat_lahir" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="date" class="form-control" name="tanggal_lahir" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">Agama</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <select class="form-control" name="agama" required>
                                <option value="">---</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Lain-Lain">Lain-Lain</option>
                            </select>
                    </div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">Nomor HP</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="number" name="no_hp" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">Email</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">Alamat</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <textarea cols="40" rows="2" name="alamat" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">kode pos</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="number" class="form-control" name="kode_pos" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">provinsi</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="text" class="form-control" name="provinsi" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">Kota/kabupaten</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="text" class="form-control" name="kabupaten" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">kecamatan</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="text" class="form-control" name="kecamatan" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">Kelurahan/Desa</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="text" class="form-control" name="desa" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">RT</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <select class="form-control" name="rt">
                            <option value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">RW</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <select class="form-control" name="rw">
                            <option value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select>
                    </div>
                </div>
                <br>
                

          <div style="background-color: #d2d2d2; height: 30px" class="mb-3"><h5><span>2. </span>Asal Sekolah</h5></div>
                <div class="form-group row">
                      <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">Nama Sekolah</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                    <input type="text" name="nama_sekolah" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">Provinsi</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                    <input type="text" name="prov_sekolah" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                      <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">kota/Kabupaten</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                    <input type="text" name="kab_sekolah" class="form-control" required>
                    </div>
                </div>
                <br>

                <div style="background-color: #d2d2d2; height: 30px" class="mb-3"><h5><span>3. </span>Data Orang Tua</h5></div>
          <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">Nama Ayah</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="text" class="form-control" name="nama_ayah" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">Pekerjaan Ayah</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <select class="form-control" name="pekerjaan_ayah" required>
                            <option value="">---</option>
                                <option value="Guru">Guru</option>
                                <option value="PNS">PNS</option>
                                <option value="Polisi">Polisi</option>
                                <option value="Dokter">Dokter</option>
                                <option value="TNI">Tentara Nasional Indonesia</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Karyawan">Karyawan</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Lain-Lain">Lain-Lain</option>
                            </select>
                    </div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">pendapatan ayah</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <select class="form-control" name="pendapatan_ayah" required>
                            <option value="">---</option>
                               <option value="Rp 500.000 / bulan">< Rp 500.000 / bulan</option>
                                <option value="Rp 500.000 - Rp 1.000.000 / bulan">Rp 500.000 - Rp 1.000.000 / bulan</option>
                                <option value="Rp 1.000.000 - Rp 2.000.000 / bulan">Rp 1.000.000 - Rp 2.000.000 / bulan</option>
                                <option value="Rp 2.000.000 - Rp 3.000.000 / bulan">Rp 2.000.000 - Rp 3.000.000 / bulan</option>
                                <option value="Rp 3.000.000 - Rp 4.000.000 / bulan">Rp 3.000.000 - Rp 4.000.000 / bulan</option>
                                <option value="Rp 4.000.000 - Rp 5.000.000 / bulan">Rp 4.000.000 - Rp 5.000.000 / bulan</option>
                                <option value="Rp 5.000.000 - Rp 6.000.000 / bulan">Rp 5.000.000 - Rp 6.000.000 / bulan</option>
                                <option value="Rp 6.000.000 > / bulan">Rp 6.000.000 > / bulan</option>
                            </select>
                    </div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">Nama Ibu</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="text" class="form-control" name="nama_ibu" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">pekerjaan Ibu</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <select class="form-control" name="pekerjaan_ibu" required>
                            <option value="">---</option>
                                <option value="Guru">Guru</option>
                                <option value="PNS">PNS</option>
                                <option value="Polisi">Polisi</option>
                                <option value="Dokter">Dokter</option>
                                <option value="TNI">Tentara Nasional Indonesia</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Karyawan">Karyawan</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Lain-Lain">Lain-Lain</option>
                            </select>
                    </div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">pendapatan Ibu</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <select class="form-control" name="pendapatan_ibu" required>
                            <option value="">---</option>
                                <option value="Rp 500.000 / bulan">< Rp 500.000 / bulan</option>
                                <option value="Rp 500.000 - Rp 1.000.000 / bulan">Rp 500.000 - Rp 1.000.000 / bulan</option>
                                <option value="Rp 1.000.000 - Rp 2.000.000 / bulan">Rp 1.000.000 - Rp 2.000.000 / bulan</option>
                                <option value="Rp 2.000.000 - Rp 3.000.000 / bulan">Rp 2.000.000 - Rp 3.000.000 / bulan</option>
                                <option value="Rp 3.000.000 - Rp 4.000.000 / bulan">Rp 3.000.000 - Rp 4.000.000 / bulan</option>
                                <option value="Rp 4.000.000 - Rp 5.000.000 / bulan">Rp 4.000.000 - Rp 5.000.000 / bulan</option>
                                <option value="Rp 5.000.000 - Rp 6.000.000 / bulan">Rp 5.000.000 - Rp 6.000.000 / bulan</option>
                                <option value="Rp 6.000.000 > / bulan">Rp 6.000.000 > / bulan</option>
                            </select>
                    </div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">Alamat Orang Tua</label>
                     <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <textarea cols="40" rows="2" name="alamat_ortu" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">kode pos</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="number" class="form-control" name="kode_ortu" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">provinsi</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="text" class="form-control" name="prov_ortu" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">Kota/kabupaten</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="text" class="form-control" name="kab_ortu" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">kecamatan</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="text" class="form-control" name="kec_ortu" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">Kelurahan/Desa</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="text" class="form-control" name="desa_ortu" required>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">RT</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <select class="form-control" name="rt_ortu">
                            <option value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">RW</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <select class="form-control" name="rw_ortu">
                            <option value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select>
                    </div>
                </div>
                <br>
            <div style="background-color: #d2d2d2; height: 30px" class="mb-3"><h5><span>4. </span>Data Wali ( jika ada )</h5></div>
          <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">Nama Wali</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="text" class="form-control" name="nama_wali">
                    </div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">Pekerjaan wali</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <select class="form-control" name="pekerjaan_wali">
                            <option>---</option>
                                <option value="Guru">Guru</option>
                                <option value="PNS">PNS</option>
                                <option value="Polisi">Polisi</option>
                                <option value="Dokter">Dokter</option>
                                <option value="TNI">Tentara Nasional Indonesia</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Karyawan">Karyawan</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Lain-Lain">Lain-Lain</option>
                            </select>
                    </div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">pendapatan wali</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <select class="form-control" name="pendapatan_wali">
                            <option>---</option>
                              <option value="Rp 500.000 / bulan">< Rp 500.000 / bulan</option>
                                <option value="Rp 500.000 - Rp 1.000.000 / bulan">Rp 500.000 - Rp 1.000.000 / bulan</option>
                                <option value="Rp 1.000.000 - Rp 2.000.000 / bulan">Rp 1.000.000 - Rp 2.000.000 / bulan</option>
                                <option value="Rp 2.000.000 - Rp 3.000.000 / bulan">Rp 2.000.000 - Rp 3.000.000 / bulan</option>
                                <option value="Rp 3.000.000 - Rp 4.000.000 / bulan">Rp 3.000.000 - Rp 4.000.000 / bulan</option>
                                <option value="Rp 4.000.000 - Rp 5.000.000 / bulan">Rp 4.000.000 - Rp 5.000.000 / bulan</option>
                                <option value="Rp 5.000.000 - Rp 6.000.000 / bulan">Rp 5.000.000 - Rp 6.000.000 / bulan</option>
                                <option value="Rp 6.000.000 > / bulan">Rp 6.000.000 > / bulan</option>
                            </select>
                    </div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">Alamat Wali</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <textarea cols="40" rows="2" name="alamat_wali"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">kode pos</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="number" class="form-control" name="kode_wali">
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">provinsi</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="text" class="form-control" name="prov_wali">
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">Kota/kabupaten</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="text" class="form-control" name="kab_wali">
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">kecamatan</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="text" class="form-control" name="kec_wali">
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">Kelurahan/Desa</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="text" class="form-control" name="desa_wali">
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">RT</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <select class="form-control" name="rt_wali">
                            <option value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label">RW</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <select class="form-control" name="rw_wali">
                            <option value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select>
                    </div>
                </div>
                <br>

          <div style="background-color: #d2d2d2; height: 30px" class="mb-3"><h5><span>5. </span>Pilihan Jurusan</h5></div>
                  <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">Akademik</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                    <select class="form-control" name="jurusan_akademik">
                        <option value="">---</option>
                            <option value="ipa">IPA</option>
                            <option value="ips">IPS</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                        <label  class="col-sm-12 col-md-12 col-xl-3 col-form-label">SM Terpadu</label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
              <select class="form-control" name="jurusan_terpadu">
                <option value="">---</option>
                <option value="Otomotif">Otomotif</option>
                <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                <option value="Tata Busana">Tata Busana</option>
                <option value="Tahfidz Quran">Tahfidz Qur'an</option>
              </select>
                    </div>
                </div>
                
                <br>    
                <div style="background-color: #d2d2d2; height: 30px" class="mb-3"><h5><span>6. </span>Upload Foto</h5></div>
                <div class="form-group row">
                        <label class="col-sm-12 col-md-12 col-xl-3 col-form-label" for="exampleFormControlFile1">Foto Anda </label>
                    <div class="col-sm-12 col-md-12 col-xl-9 pl-0">
                        <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1" required>
                    </div>
                </div>
                <br><br>
                <div class="form-group row">
                    <div class="col-sm-10 text-center">
                        <button type="submit" class="btn btn-danger" ><a href="index.php" class="text-white" style="text-decoration: none;"> Back </a></button>
                        <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br><br><br>

    <?php 
        include 'koneksi.php';
        if (isset($_POST['submit'])) {
       
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $agama = $_POST['agama'];
        $no_hp = $_POST['no_hp'];
        $email =$_POST['email'];
        $alamat = $_POST['alamat'];
        $kode_pos = $_POST['kode_pos'];
        $provinsi = $_POST['provinsi'];
        $kabupaten = $_POST['kabupaten'];
        $kecamatan = $_POST['kecamatan'];
        $kecamatan = $_POST['kecamatan'];
        $desa = $_POST['desa'];
        $rt = $_POST['rt'];
        $rw = $_POST['rw'];
        $nama_sekolah = $_POST['nama_sekolah'];
        $prov_sekolah = $_POST['prov_sekolah'];
        $kab_sekolah = $_POST['kab_sekolah'];
        $nama_ayah = $_POST['nama_ayah'];
        $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
        $pendapatan_ayah = $_POST['pendapatan_ayah'];
        $nama_ibu = $_POST['nama_ibu'];
        $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
        $pendapatan_ibu = $_POST['pendapatan_ibu'];
        $alamat_ortu = $_POST['alamat_ortu'];
        $kode_ortu = $_POST['kode_ortu'];
        $prov_ortu = $_POST['prov_ortu'];
        $kab_ortu = $_POST['kab_ortu'];
        $kec_ortu = $_POST['kec_ortu'];
        $desa_ortu = $_POST['desa_ortu'];
        $rt_ortu = $_POST['rt_ortu'];
        $rw_ortu = $_POST['rw_ortu'];
        $nama_wali = $_POST['nama_wali'];
        $pekerjaan_wali = $_POST['pekerjaan_wali'];
        $pendapatan_wali = $_POST['pendapatan_wali'];
        $alamat_wali = $_POST['alamat_wali'];
        $kode_wali = $_POST['kode_wali'];
        $prov_wali = $_POST['prov_wali'];
        $kab_wali = $_POST['kab_wali'];
        $kec_wali = $_POST['kec_wali'];
        $desa_wali = $_POST['desa_wali'];
        $rt_wali = $_POST['rt_wali'];
        $rw_wali = $_POST['rw_wali'];
        $jurusan_akademik = $_POST['jurusan_akademik'];
        $jurusan_terpadu = $_POST['jurusan_terpadu'];
        $foto = $_FILES['foto']['name'];
        $status = 1;

        $dir = 'img/gambar-siswa/'. $foto;

        if (move_uploaded_file($_FILES['foto']['tmp_name'], $dir)) {
        $query = "INSERT INTO data_pendaftar VALUES ('$nisn', '$nama', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$agama', '$no_hp','$email','$alamat', '$kode_pos','$provinsi', '$kabupaten', '$kecamatan', '$desa','$rt', '$rw','$nama_sekolah', '$prov_sekolah', '$kab_sekolah', '$nama_ayah', '$pekerjaan_ayah','$pendapatan_ayah', '$nama_ibu', '$pekerjaan_ibu','$pendapatan_ibu', '$alamat_ortu', '$kode_ortu', '$prov_ortu', '$kab_ortu', '$kec_ortu','$desa_ortu', '$rt_ortu', '$rw_ortu', '$nama_wali', '$pekerjaan_wali','$pendapatan_wali', '$alamat_wali', '$kode_wali', '$prov_wali', '$kab_wali', '$kec_wali','$desa_wali', '$rt_wali', '$rw_wali', '$jurusan_akademik', '$jurusan_terpadu','$foto', '$status')";
         $result = mysqli_query($koneksi, $query);

         if ($result) {
                 echo "<script>
                        alert('Selamat anda berhasil mendaftar!!!');
                        window.location.assign('notifikasi.php?id=".$nisn."');
                    </script>";
                } else {
                    echo "<script>
                        alert('gagal mendaftar');
                        window.location.assign('form-daftar.php');
                    </script>";
                }
        }
    }
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