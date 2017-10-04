
<?php
include "../../config/config.php";
	//Edit Fakultas
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$user = $_POST['user'];

	// Query Add Mata Kuliah
	$ask = mysql_query("INSERT INTO ask (judul, isi, id_user ) VALUES ('$judul','$isi', '$user' )");

	if ($ask ) {
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