
<?php
    include "../config/config.php";
	$id=$_GET['id'];
	$modal=mysql_query("SELECT * FROM mhs JOIN prodi ON mhs.kd_prodi = prodi.kd_prodi JOIN fakultas ON mhs.kd_fak = fakultas.kd_fak JOIN user ON mhs.nim=user.nim WHERE mhs.nim ='$id' ");
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
            <li class="active"><a data-toggle="tab" href="#home">Mahasiswa</a></li>
            <li><a data-toggle="tab" href="#menu2">Foto</a></li>
            <li><a data-toggle="tab" href="#menu3">Akun</a></li>
        </ul>

        <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <br>
            <div class="form-group" style="padding-bottom: 20px;">
                <label for="Modal Name">NIM [Nomor Induk Mahasiswa]</label>
                <input type="text" name="nim"  class="form-control" value="<?php echo $r['nim']; ?>" readonly/>
            </div>

            <div class="form-group" style="padding-bottom: 20px;">
                <label for="Modal Name">Nama Lengkap</label>
                <input type="text" name="nama"  class="form-control" value="<?php echo $r['nama']; ?>" readonly />
            </div>

            <div class="form-group" style="padding-bottom: 20px;">
                <label for="Modal Name">Jurusan</label>
                <input type="text" name="nama"  class="form-control" value="<?php echo $r['prodi']; ?>" readonly />
            </div>

            <div class="form-group" style="padding-bottom: 20px;">
                <label for="Modal Name">Fakultas</label>
                <input type="text" name="nama"  class="form-control" value="<?php echo $r['fakultas']; ?>" readonly />
            </div>
            <div class="form-group" style="padding-bottom: 20px;">
                <label for="Modal Name">Alamat</label>
                <textarea type="text" class="form-control" readonly > <?php echo $r['alamat']; ?></textarea>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <br>
            <div class="form-group" style="padding-bottom: 20px;">
                   <center> <img src="../lib/mhs/<?php echo $r['foto']; ?>" height="300" width="250"> </center>
            </div>
        </div>
        <div id="menu3" class="tab-pane fade">
            <br>
            <div class="form-group" style="padding-bottom: 20px;">
                <label for="Modal Name">User</label>
                <input type="text" name="user"  class="form-control" value="<?php echo $r['user']; ?>" readonly />
            </div>
            <div class="form-group" style="padding-bottom: 20px;">
                <label for="Modal Name">Passwords</label>
                <input type="text" name="user"  class="form-control" value="<?php echo $r['pass']; ?>" readonly />
            </div>
      </div>
        <div class="modal-footer">

            <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                OK
            </button>
        </div>
        <?php } ?>
        </div>
        </div>
    </div>