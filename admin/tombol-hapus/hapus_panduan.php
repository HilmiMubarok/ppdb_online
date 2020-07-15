<?php
		include '../../koneksi.php';

		$query = "DELETE FROM panduan_ppdb WHERE id_panduan = '$_GET[id]'";
		if (mysqli_query($koneksi, $query)){
			echo "<script>
				alert('panduan ppdb berhasil dihapus');
				window.location.assign('../panduan_ppdb.php');
			</script>";
		} else {
			echo "<script>
				alert('gagal menghapus panduan ppdb!');
				window.location.assign('../panduan_ppdb.php');
			</script>";
		}
	?>