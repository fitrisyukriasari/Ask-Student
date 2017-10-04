
<?php
    include "../config/config.php";
	$id=$_GET['id'];
	$modal=mysql_query("SELECT * FROM ask JOIN user ON ask.id_user = user.id_user JOIN mhs ON user.nim = mhs.nim WHERE ask.id_ask ='$id' ");
    // JOIN prodi ON mhs.kd_prodi = prodi.kd_prodi JOIN fakultas ON mhs.kd_fak = fakultas.kd_fak
	while($r=mysql_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Detail</h4>
        </div>

        <div class="modal-body">
         <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Ask</a></li>
            <li><a data-toggle="tab" href="#menu2">Answer</a></li>
        </ul>

        <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <br>
            <div class="form-group" style="padding-bottom: 20px;">
                <label for="Modal Name">Asker</label>
                <input type="text" name="asker"  class="form-control" value="<?php echo $r['nama']; ?>" readonly/>
            </div>
            <div class="form-group" style="padding-bottom: 20px;">
                <label for="Modal Name">Judul</label>
                <input type="text" name="judul"  class="form-control" value="<?php echo $r['judul']; ?>" readonly/>
            </div>

            <div class="form-group" style="padding-bottom: 20px;">
                <label for="Modal Name">Ask</label>
                <textarea type="text" name="ask"  class="form-control" readonly><?php echo $r['isi']; ?></textarea>
            </div>

            <div class="form-group" style="padding-bottom: 20px;">
                <form action="proses/p_addanswer.php" enctype="multipart/form-data" method="POST">
                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="Modal Name">Answer</label>
                    <input type="hidden" name="idask"  class="form-control" value="<?php echo $r['id_ask']; ?>" hidden/>
                    <textarea type="text" name="answer"  class="form-control" placeholder="Answer"></textarea>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-success" type="submit">
                      Answer
                  </button>
                  <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                    Batal
                </button>
              </div>
              </form>
            </div>
        </div>

            <?php } ?>
        <div id="menu2" class="tab-pane fade">
            <br>
            <table id="mytable" class="table table-bordered" >
            <thead>
              <th>No</th>
              <th>Answer</th>
              <th>Isi</th>
              <th>Action</th>
            </thead>
        <?php 
          //menampilkan data mysql
          $no = 0;
          $modal=mysql_query("SELECT * FROM answer JOIN user ON answer.id_user = user.id_user JOIN mhs ON user.nim = mhs.nim WHERE answer.kd_ask = '$id' ");
          while($r=mysql_fetch_array($modal)){
          $no++;
               
        ?>
          <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo  $r['nama']; ?></td>
              <td><?php echo  $r['isi']; ?></td>
              <td>
                 <a href="#" onclick="confirm_modal('proses/p_delete.php?&id=<?php echo  $r['id_answer']; ?>');"><i class="glyphicon glyphicon-remove"></i></a>
              </td>
          </tr>
         

        <?php } ?>
        </table>
      </div>
        </div>
        
        </div>
    </div>