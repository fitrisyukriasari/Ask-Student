<?php
    include "../config/config.php";
	$id=$_GET['id'];
	$modal=mysql_query("SELECT * FROM ask WHERE id_ask ='$id' ");
	while($r=mysql_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content">
    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit</h4>
        </div>
        <div class="modal-body">
        	<form action="proses/p_editask.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Modal Name">Judul</label>
     				<input type="text" name="judul"  class="form-control" value="<?php echo $r['judul']; ?>" />
                    <input type="hidden" name="id"  class="form-control" value="<?php echo $r['id_ask']; ?>"/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="Modal Name">Isi</label>
                    <textarea type="text" name="isi"  class="form-control"> <?php echo $r['isi']; ?> </textarea>
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