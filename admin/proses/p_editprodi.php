
<?php
include "../../config/config.php";
	//Edit Fakultas
	$kt = $_POST['kd'];
	$prodi = $_POST['prodi'];

	//Query Fakultas
	$prodi = mysql_query("UPDATE prodi SET prodi = '$prodi' WHERE kd_prodi = '$kt' ");

	if ($prodi) {
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