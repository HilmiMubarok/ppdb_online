<?php
		include '../../koneksi.php';

		$query = "DELETE FROM jadwal WHERE id_jadwal = '$_GET[id]'";
		if (mysqli_query($koneksi, $query)){
			echo "<script>
				alert('jadwal berhasil dihapus');
				window.location.assign('../manajemen_jadwal.php');
			</script>";
		} else {
			echo "<script>
				alert('jadwal gagal dihapus');
				window.location.assign('../manajemen_jadwal.php');
			</script>";
		}
	?>