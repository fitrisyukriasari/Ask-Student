
<?php
include "../../config/config.php";
	// answer
	$user =  $_SESSION['user'];
	  $modal=mysql_query("SELECT * FROM user WHERE user.nim ='$user' ");
	      while($r=mysql_fetch_array($modal)){
	      	$u = $r['id_user'];
	  }
	$id = $_POST['idask'];
	$isi = $_POST['answer'];
	$us = $u;
	// Query Add answer
	$answer = mysql_query("INSERT INTO answer (kd_ask, id_user, isi ) VALUES ('$id', '$us', '$isi' )");

	if ($answer ) {
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