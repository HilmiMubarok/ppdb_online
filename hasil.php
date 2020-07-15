<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HASIL PPDB MUHPAT</title>

    <link rel="stylesheet" href="css/hasil.css">

</head>
<body>
	
            <div class="card">
              <div class="card-header">
                DATA PENDAFTAR
              </div>';
        include 'koneksi.php';

                $id =$_GET["id"];
                
                $query =mysqli_query ($koneksi, "SELECT * FROM data_pendaftar WHERE nisn = '$id' ");
                $result = mysqli_fetch_assoc($query);
$html .='
                <table width="600"> 
                    <tr>
                        <td width="150">Nisn</td>
                        <td width="35">:</td>
                        <td>'. $result["nisn"] .'</td>
                    </tr>
                    <tr>
                        <td width="150">Nama</td>
                        <td width="35">:</td>
                        <td>'. $result["nama"] .'</td>
                    </tr>
                    <tr>
                        <td width="150">Asal Sekolah</td>
                        <td width="35">:</td>
                        <td>'. $result["nama_sekolah"] .'</td>
                    </tr>
                </table>
            </div>';

            if ($result['status'] == 2) :

$html .= ' <div class="terima">
              <div>
                Selamat Anda Diterima di SMA MUHAMMADIYAH 4 KENDAL
              </div>
            </div>';

            else:

$html .= '
                <div class="tolak">
              <div>
                Maaf Anda dinyatakan Tidak Diterima di SMA MUHAMMADIYAH 4 KENDAL
              </div>
            </div>';

            endif;

$html .='
            <div class="pernyataan">
                <p>Pengumuman Resmi Hasil Penerimaan Peserta Didik Baru Sma Muhammadiyah 4 Kendal Tahun Ajaran 2020/2021 ditampilkan disitus resmi PPDB Sma Muhammadiyah 4 Kendal(localhost/ppdb/pengumuman.php). Apabila Ada perbedaan Data Hasil Penerimaan Peserta Didik Baru Sma Muhammadiyah 4 Kendal antara media cetak dengan pengumuman Online pada situs resmi PPDB, maka data yang benar dan sah adalah data yang ditampilkan pada Situs resmi Penerimaan Peserta Didik Baru Sma Muhammadiyah 4 Kendal.</p>
            </div>
        </div>
    </div>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('HASIL PPDB MUHPAT.pdf', 'I');

?>