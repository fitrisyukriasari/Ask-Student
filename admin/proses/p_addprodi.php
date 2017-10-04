
<?php
include "../../config/config.php";

// Add prodi
$kt = $_POST['kd'];
$prodi = $_POST['prodi'];

// Query Add prodi
$prodi = mysql_query("INSERT INTO prodi (kd_prodi, prodi) VALUES ('$kt','$prodi')");

if ($prodi ) {
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