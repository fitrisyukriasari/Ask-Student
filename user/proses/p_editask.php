
<?php
include "../../config/config.php";
	$user =  $_SESSION['user'];
	  $modal=mysql_query("SELECT * FROM user WHERE user.nim ='$user' ");
	      while($r=mysql_fetch_array($modal)){
	      	$u = $r['id_user'];
	  }
	$id = $_POST['id'];
	$isi = $_POST['isi'];
	$judul = $_POST['judul'];
	$us = $u;

	//Query ask
	$ask = mysql_query("UPDATE ask SET judul = '$judul', isi = '$isi' WHERE id_ask = '$id' ");

	if ($ask) {
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