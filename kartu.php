<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KARTU PENDAFTARAN PPDB MUHPAT</title>

    <link rel="stylesheet" href="css/print.css">

</head>
<body>
		<div class="konten">
            <div class="header">
                <div class="image">
                    <img src="img/muhpat.png" height="140" width="140" alt="">
                </div>
                <div class="slogan">
                    <h1>Kartu Tanda Peserta</h1>
                    <h1>PPDB 2020/2021</h1>
                </div>
            </div>
            <br>
            <hr>';
                include 'koneksi.php';


                $nisn = $_GET['id'];                

                $query =mysqli_query ($koneksi, "SELECT * FROM data_pendaftar WHERE nisn = '$nisn' ");
                $result = mysqli_fetch_array($query);
$html .= '
            <div class="isi">
                <div class="foto">
                    <img src="img/gambar-siswa/'. $result["foto"] .'">
                </div>
                <div class="keterangan">
                    <table>
                        <tr>
                            <td width="140">Nama</td>
                            <td width="20">:</td>
                            <td>'. $result["nama"] .'</td>
                        </tr>
                        <tr>
                            <td>Nisn</td>
                            <td>:</td>
                            <td>'. $result["nisn"] .'</td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>:</td>
                            <td>'. $result["nama_sekolah"] .'</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>'. $result["jenis_kelamin"] .'</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="pilihan">
                <h4>Pilihan Jurusan</h4>
                <hr class="hrj">
               <table class="tabel">
                <thead>
                    <tr>
                        <th>Akademik</th>
                        <th>SM Terpadu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>'. $result["jurusan_akademik"] .'</td>
                        <td>'. $result["jurusan_terpadu"] .'</td>
                    </tr>
                </tbody>
            </table>
            </div>

            <div class="pernyataan">
                <h5>Pernyataan :</h5>
                <p>Saya Menyatakan Bahwa data yang saya isikan dalam formulir pendaftaran PPDB SMA Muhammadiyah 4 Kendal adalah benar dan saya bersedia menerima ketentuan yang berlaku di sma muhammadiyah 4 kendal.</p>

            </div>
            <div class="card">
                <div class="Siswa">
                    <p class="kiri">Siswa</p>  
                    <hr class="hr-kiri">
                </div>
                <div class="ortu">
                    yang bertanda tangan dibawah :
                    <p class="kanan">Orang Tua</p>
                    <hr class="hr-kanan">
                </div>
            </div>
</body>
</html>
';
$mpdf->WriteHTML($html);
$mpdf->Output('Kartu Bukti Pendaftaran.pdf', 'I');

?>