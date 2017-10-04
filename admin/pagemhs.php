<?php 
session_start();
require_once("header.php");
require_once("left.php");
?>
<div id="page-wrapper">
<div class="row">
<div class="col-lg-12">
<h2 class="page-header">Data Mahasiswa </h2>
</div>
</div>
<div class="container">
  <p><a href="#" class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Tambah Data</a></p>      
<table id="mytable" class="table table-bordered" >
    <thead>
      <th>No</th>
      <th>NIM</th>
      <th>Nama Lengkap</th>
      <th>Matkul</th>
      <th>Action</th>
    </thead>
<?php 
  //menampilkan data mysql
  include "../config/config.php";
  $no = 0;
  $modal=mysql_query("SELECT * FROM mhs JOIN prodi ON mhs.kd_prodi = prodi.kd_prodi ORDER BY mhs.nim");
  while($r=mysql_fetch_array($modal)){
  $no++; 
?>
  <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo  $r['nim']; ?></td>
      <td><?php echo  $r['nama']; ?></td>
      <td><?php echo  '['.$r['kd_prodi'].'] - '.$r['prodi']; ?></td>
      <td>
         <a href="#" class='open_detail' id='<?php echo  $r['nim']; ?>'><i class="glyphicon glyphicon-zoom-in"></i></a>
         <a href="#" class='open_modal' id='<?php echo  $r['nim']; ?>'><i class="glyphicon glyphicon-pencil"></i></a>
         <a href="#" onclick="confirm_modal('proses/p_delete.php?&id=<?php echo  $r['nim']; ?>');"><i class="glyphicon glyphicon-remove"></i></a>
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
          <form action="proses/p_addmhs.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">NIM [Nomor Induk Mahasiswa]</label>
                  <input type="text" name="nim"  class="form-control" placeholder="Nomor Induk Mahasiswa" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Nama Lengkap</label>
                  <input type="text" name="nama"  class="form-control" placeholder="Nama Lengkap" required/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Description">Program Studi</label>
                   <select name="prodi" class="form-control">
                    <option value="">--Daftar Program Studi--</option>
                      <?php
                        $tampil = mysql_query('SELECT * FROM prodi order by kd_prodi asc');
                        if(mysql_num_rows($tampil)>0){
                        while ($q = mysql_fetch_array($tampil)) {
                      ?>
                    <option value="<?php echo $q['kd_prodi'] ?> "> <?php echo $q['prodi'] ?> </option>
                      <?php
                        }
                        }
                      ?>
                    </select>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Description">Fakultas</label>
                   <select name="fak" class="form-control">
                    <option value="">--Daftar Fakultas--</option>
                      <?php
                        $tampil = mysql_query('SELECT * FROM fakultas order by kd_fak asc');
                        if(mysql_num_rows($tampil)>0){
                        while ($q = mysql_fetch_array($tampil)) {
                      ?>
                    <option value="<?php echo $q['kd_fak'] ?> "> <?php echo $q['fakultas'] ?> </option>
                      <?php
                        }
                        }
                      ?>
                    </select>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Description">Alamat</label>
                   <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Foto</label>
                  <input type="file" name="foto"  class="form-control" required/>
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
    			   url: "medit_mhs.php",
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
             url: "detail_mhs.php",
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

  



