
<?php
include "../../config/config.php";
	//Edit Mahasiswa
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$prodi = $_POST['prodi'];
	$fak = $_POST['fak'];
	$alamat = $_POST['alamat'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	if (strlen($foto)>0) {
			if (is_uploaded_file($tmp)) {
				move_uploaded_file ($tmp, "../../lib/mhs/".$foto);
				mysql_query ("UPDATE mhs SET foto='$foto' WHERE nim = '$nim ");
			}
		}

	//Query Mahasiswa
	$mhs = mysql_query("UPDATE mhs SET nim = '$nim', nama = '$nama', kd_prodi = '$prodi', kd_fak = '$fak', alamat = '$alamat' WHERE nim = '$nim' ");

	if ($mhs) {
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