
<?php
include "../../config/config.php";

// Add Mahasiswa & User
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$fak = $_POST['fak'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Query Add Mahasiswa & User
if (strlen($foto)>0) {
			if (is_uploaded_file($tmp)) {
				move_uploaded_file ($tmp, "../../lib/mhs/".$foto);
			}
		}
$mhs = mysql_query("INSERT INTO mhs (nim, nama, kd_prodi, kd_fak, alamat, foto) VALUES ('$nim','$nama','$prodi','$fak', '$alamat', '$foto' )");

$user = mysql_query("INSERT INTO user (nim, user, pass, level) VALUES ('$nim','$nim','$nim','1')");

if ($mhs && $user ) {
	echo '<script>
			alert("Data baru sudah ditambahkan :) ");
			history.go(-1);
			</script>';
}else{
	echo '<script>
			alert("Maaf, tidak bisa menambahkan data ! ");
			history.go(-1);
			</script>';
}
?>