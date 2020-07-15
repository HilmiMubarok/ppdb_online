<?php
		include '../../koneksi.php';

		$query = "DELETE FROM foto WHERE id_foto = '$_GET[id]'";
		if (mysqli_query($koneksi, $query)){
			echo "<script>
				alert('foto berhasil dihapus');
				window.location.assign('../foto.php');
			</script>";
		} else {
			echo "<script>
				alert('foto gagal dihapus');
				window.location.assign('../foto.php');
			</script>";
		}
	?>