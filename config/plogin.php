<?php
session_start();
require_once('config.php');
$u = $_POST['user'];
$p = $_POST['pass'];

$cek = mysql_query("select * from user where user = '$u' and pass = '$p'");

//0 as admin
//1 as member

if(mysql_num_rows($cek) == 1) {
    $row = mysql_fetch_array($cek);
        $_SESSION['user'] = $row['user'];
        $_SESSION['level'] = $row['level'];
        $_SESSION['pass'] = $row['pass'];

    if ($row['level'] == 0 ) {
        header('location:../admin/index.php');
    }else if ($row['level'] == 1 ){
        header('location:../user/index.php');
    }
}else{
        echo "<script>
                    alert('Maaf, login gagal !!! '); 
                    history.go(-1)
                </script>";
}
?>

