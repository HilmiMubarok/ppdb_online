<?php
	include '../koneksi.php';

    $keyword = $_GET['keyword'];
?>

<table class="table table-striped table-bordered">
                <thead class="text-center bg-blue">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Asal Sekolah</th>
                        <th colspan="3" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                <?php 

                    $no = 1;
                    $query = mysqli_query($koneksi,"SELECT * FROM data_pendaftar 
                                    WHERE status = 3 AND
                            (nama LIKE '%$keyword%' OR
                            nisn LIKE '%$keyword%' OR
                            nama_sekolah LIKE '%$keyword%') ");

                    while($result = mysqli_fetch_assoc ($query)){
                ?>
                    <tr>
                        <td><?= $no++;  ?></td>
                        <td><?= $result['nama'] ?></td>
                        <td><?= $result['nisn']; ?></td>
                        <td><?= $result['nama_sekolah']; ?></td>
                        <td><a href="tombol-detail/siswa_tolak.php?id=<?= $result['nisn']; ?>" class="btn btn-primary">Detail</a></td>
                        <td><a href="tombol-hapus/siswa_tolak.php?id=<?= $result['nisn']; ?>">
                            <i class="fas fa-trash-alt bg-danger text-white rounded p-2" data-toogle="tooltip" title="Hapus"></i>
                        </a></td> 
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>