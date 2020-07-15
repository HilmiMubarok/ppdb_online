<?php
	include '../../koneksi.php';

	$query = "DELETE FROM syarat_daftar WHERE id_syarat = '$_GET[id]'";
	if (mysqli_query($koneksi, $query)){
		echo "<script>
			alert('syarat daftar berhasil dihapus');
			window.location.assign('../syarat_daftar.php');
		</script>";
	} else {
		echo "<script>
			alert('gagal menghapus syarat daftar');
			window.location.assign('../syarat_daftar.php');
		</script>";
	}
?>