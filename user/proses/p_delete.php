
<?php
include "../../config/config.php";
	
	//ask
	$kt=$_GET['id'];
	$ask = mysql_query("Delete FROM ask WHERE id_ask ='$kt'");

	//answer
	$ka=$_GET['id'];
	$answer = mysql_query("Delete FROM answer WHERE id_answer ='$ka'");
	
	if ($ask || $answer) {
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