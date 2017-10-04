<?php 
session_start();
require_once("header.php");
require_once("left.php");
?>
<div id="page-wrapper">
<div class="row">
<div class="col-lg-12">
<h2 class="page-header">Ask </h2>
</div>
</div>
<div class="container">
  <p><a href="#" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Tambah Data</a></p>      

<table id="mytable" class="table table-bordered" >
    <thead>
      <th>No</th>
      <th>Asker</th>
      <th>Judul</th>
      <th>Ask</th>
      <th>Action</th>
    </thead>
<?php 
  //menampilkan data mysql
  include "../config/config.php";
  $no = 0;
  $modal=mysql_query("SELECT * FROM ask JOIN user ON ask.id_user = user.id_user JOIN mhs ON user.nim = mhs.nim ORDER BY ask.id_ask");
  while($r=mysql_fetch_array($modal)){
  $no++;
       
?>
  <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo  $r['nama']; ?></td>
      <td><?php echo  $r['judul']; ?></td>
      <td><?php echo  $r['isi']; ?></td>
      <td>
         <a href="#" class='open_detail' id='<?php echo  $r['id_ask']; ?>'><i class="glyphicon glyphicon-zoom-in"></i></a>
         <?php 
         if ($_SESSION['user'] == $r['nim']){ ?>
         <a href="#" class='open_modal' id='<?php echo  $r['id_ask']; ?>'><i class="glyphicon glyphicon-pencil"></i></ </a> 
         <a href="#" onclick="confirm_modal('proses/p_delete.php?&id=<?php echo  $r['id_ask']; ?>');"><i class="glyphicon glyphicon-remove"></i></a><?php } ?>
      </td>
  </tr>
 

<?php } ?>
</table>
</div>

<!-- Modal Popup untuk Add--> 
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Tambah Data</h4>
        </div>

        <div class="modal-body">

          <form action="proses/p_addask.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                <?php
                  $user =  $_SESSION['user'];
                  $modal=mysql_query("SELECT * FROM user JOIN mhs ON user.nim = mhs.nim WHERE  user.nim ='$user' ");
                      while($r=mysql_fetch_array($modal)){
                ?>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">ID User</label>
                  <input type="text" name="user"  class="form-control" value="<?php echo $r['id_user']; ?>" readonly required/>
                </div>
                
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Nama Lengkap</label>
                  <input type="text" name="nama"  class="form-control" value="<?php echo $r['nama']; }?>" required readonly/>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Judul</label>
                  <input type="text" name="judul"  class="form-control" placeholder="Judul" required />
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Description">Ask</label>
                   <textarea class="form-control" name="isi" placeholder="Ask"></textarea>
                </div>

              <div class="modal-footer">
                  <button class="btn btn-success" type="submit">
                      Tambah
                  </button>

                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Batal
                  </button>
              </div>

              </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Popup untuk Edit--> 
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk Edit--> 
<div id="ModalDetail" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk delete--> 
<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Yakin akan dihapus ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Hapus</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>



<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "medit_ask.php",
    			   type: "GET",
    			   data : {id: m,},
    			   success: function (ajaxData){
      			   $("#ModalEdit").html(ajaxData);
      			   $("#ModalEdit").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
      });
</script>

<!-- Javascript untuk popup modal detail--> 
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_detail").click(function(e) {
      var m = $(this).attr("id");
       $.ajax({
             url: "detail_ask.php",
             type: "GET",
             data : {id: m,},
             success: function (ajaxData){
               $("#ModalDetail").html(ajaxData);
               $("#ModalDetail").modal('show',{backdrop: 'true'});
             }
           });
        });
      });
</script>

<!-- Javascript untuk popup modal Delete--> 
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>

</body>
</html>

  



