<?php
    include "../config/config.php";
	$id=$_GET['id'];
	$modal=mysql_query("SELECT * FROM prodi  WHERE kd_prodi ='$id' ");
	while($r=mysql_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content">
    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit</h4>
        </div>
        <div class="modal-body">
        	<form action="proses/p_editprodi.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Modal Name">Kode Program Studi</label>
     				<input type="text" name="kd"  class="form-control" value="<?php echo $r['kd_prodi']; ?>" readonly/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="Modal Name">Program Studi</label>
                    <input type="text" name="prodi"  class="form-control" value="<?php echo $r['prodi']; ?>"/>
                </div>
	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit">
	                    Edit
	                </button>
	                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
	               		Batal
	                </button>
	            </div>
            	</form>
             <?php } ?>
            </div>           
        </div>
    </div>