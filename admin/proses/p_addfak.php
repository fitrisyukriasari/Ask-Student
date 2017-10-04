<?php
include "../../config/config.php";

// Add Fakultas
$kt = $_POST['kd'];
$fak = $_POST['fak'];

// Query Add fakultas
$fakultas = mysql_query("INSERT INTO fakultas (kd_fak, fakultas) VALUES ('$kt','$fak')");

if ($fakultas ) {
	echo '<script>
			alert("Data baru sudah ditembahkan :) ");
			history.go(-1);
			</script>';
}else{
	echo '<script>
			alert("Maaf, tidak bisa menambahkan data ! ");
			history.go(-1);
			</script>';
}
?>