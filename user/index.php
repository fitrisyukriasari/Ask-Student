<?php 

session_start();
require_once("header.php");
require_once("left.php");

$user =  $_SESSION['user'];
$iduser =  $_SESSION['id_user'];
$modal=mysql_query("SELECT * FROM user JOIN mhs ON user.nim = mhs.nim WHERE  user.nim ='$user' ");
    while($r=mysql_fetch_array($modal)){
?>
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Dashboard </h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <center><h3>Selamat Datang <?php echo $r['nama']; } ?>  <?php echo $iduser; ?> di Ask Student</h3><br>
            <img src="../lib/img/logo.png"></center>
        </div>    

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../lib/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../lib/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../lib/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../lib/js/sb-admin-2.js"></script>

</body>

</html>
