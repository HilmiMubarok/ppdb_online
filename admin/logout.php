<?php 

session_start();
session_destroy();
echo "	<script>
			alert('Yakin Ingin Keluar !!!');
			window.location.assign('login.php');
        </script>";

?>