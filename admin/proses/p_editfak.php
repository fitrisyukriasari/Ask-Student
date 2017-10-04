
<?php
include "../../config/config.php";
	//Edit Fakultas
	$kt = $_POST['kd'];
	$fak = $_POST['fak'];

	//Query Fakultas
	$fakultas = mysql_query("UPDATE fakultas SET fakultas = '$fak' WHERE kd_fak = '$kt' ");

	if ($fakultas) {
		echo '<script>
				alert("Data baru sudah diedit :) ");
				history.go(-1);
				</script>';
	}else{
		echo '<script>
				alert("Maaf, tidak bisa edit data ! ");
				history.go(-1);
				</script>';
	}
?>