 <?php 

        include '../koneksi.php';

        $nisn = $_GET['id'];

        $query = "UPDATE data_pendaftar SET status = 2 WHERE nisn = '$nisn' ";
        $result = mysqli_query($koneksi,$query);

         if (!$result) {
                    echo "<script>
                        alert('gagal mengupdate');
                        window.location.assign('belum_diverifikasi.php');
                    </script>";
                } else {
                    echo "<script>
                        alert('Berhasil Mengupdate');
                        window.location.assign('belum_diverifikasi.php');
                    </script>";
                }

    ?>