
<?php
include "../../config/config.php";
	
	//mahasiswa
	$id=$_GET['id'];
	$mhs = mysql_query("Delete FROM mhs WHERE nim ='$id'");

	//prodi
	$kj=$_GET['id'];
	$jur = mysql_query("Delete FROM prodi WHERE kd_prodi ='$kj'");

	//fakultas
	$kt=$_GET['id'];
	$fakultas = mysql_query("Delete FROM fakultas WHERE kd_fak ='$kt'");
	
	if ($mhs || $jur || $fakultas) {
		echo '<script>
					alert("Data baru sudah dihapus :) ");
					history.go(-1);
					</script>';
	}else{
		echo '<script>
				alert("Maaf, tidak bisa hapus data ! ");
				history.go(-1);
				</script>';
	}
?>