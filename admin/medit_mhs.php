<?php
    include "../config/config.php";
	$id=$_GET['id'];
	$modal=mysql_query("SELECT * FROM mhs  JOIN prodi ON mhs.kd_prodi = prodi.kd_prodi JOIN fakultas ON mhs.kd_fak = fakultas.kd_fak WHERE mhs.nim = '$id' ");
	while($r=mysql_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content">
    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit</h4>
        </div>
        <div class="modal-body">
        	<form action="proses/p_editmhs.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="Modal Name">NIM [Nomor Induk Mahasiswa]</label>
                    <input type="text" name="nim"  class="form-control" value="<?php echo $r['nim']; ?>" readonly/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="Modal Name">Nama Lengkap</label>
                    <input type="text" name="nama"  class="form-control" value="<?php echo $r['nama']; ?>"  />
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="Modal Name">Program Studi</label>
                    <select name="prodi" class="form-control">
                    <option value="">--Daftar Program Studi--</option>
                    <?php
                        $tampil = mysql_query('SELECT * FROM prodi order by kd_prodi asc');
                        while ($q = mysql_fetch_array($tampil)) {
                    if($r['kd_prodi'] == $q['kd_prodi']){ ?>
                    <option value="<?php echo $r['kd_prodi']?>" selected="<?php echo $q['kd_prodi']?>"><?php echo $r['prodi']?></option>
                    <?php } else { ?>
                    <option value="<?php echo $q['kd_prodi']?>"><?php echo $q['prodi']?></option>";
                    <?php }} ?>
                    </select>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="Modal Name">Fakultas</label>
                    <select name="fak" class="form-control">
                    <option value="">--Daftar Fakultas--</option>
                    <?php
                        $tampil = mysql_query('SELECT * FROM fakultas order by kd_fak asc');
                        while ($q = mysql_fetch_array($tampil)) {
                      if($r['kd_fak']== $q['kd_fak']){ ?>
                    <option value="<?php echo $r['kd_fak']?>" selected="<?php echo $q['kd_fak']?>"><?php echo $r['fakultas']?></option>
                    <?php } else { ?>
                    <option value="<?php echo $q['kd_fak']?>"><?php echo $q['fakultas']?></option>";
                    <?php }} ?>
                    </select>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                    <label for="Modal Name">Alamat</label>
                    <textarea type="text" name="alamat" class="form-control" value="<?php echo $r['alamat']; ?>" > <?php echo $r['alamat']; ?></textarea>
                </div>
                <div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Foto</label>
                  <img src="../lib/mhs/<?php echo $r['foto']; ?>" height="150" width="100">
                  <input type="file" name="foto"  class="form-control"/>
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