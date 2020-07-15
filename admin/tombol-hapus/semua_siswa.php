<?php
		include '../../koneksi.php';

		$query = "DELETE FROM data_pendaftar WHERE nisn = '$_GET[id]'";
		if (mysqli_query($koneksi, $query)){
			echo "<script>
				alert('data berhasil dihapus');
				window.location.assign('../semua_siswa.php');
			</script>";
		} else {
			echo "<script>
				alert('gagal menghapus data');
				window.location.assign('../semua_siswa.php');
			</script>";
	}
?>