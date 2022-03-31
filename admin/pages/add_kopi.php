<div class="card">
    <div class="card-header">
        <h3 class="card-title">Kopi Tambah</h3>
        <a href="index.php?p=kopi" class="btn btn-warning btn-flat">
            <i class="fa fa-undo"></i> Kembali
        </a>
    </div>
              <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
      <div class="col-md-4 col-md-offset-9">
        <form class="form-horizontal" method="post" enctype="multipart/form-data">
	        <div class="form-group">
	          <label>Nama</label>
	          <input type="text" id="nama_kopi" name="nama_kopi" class="form-control" placeholder="Masukan Nama">
	        </div>
	        <div class="form-group">
	          <label>Keterangan</label>
	           <textarea class="form-control" name="keterangan" rows="5"></textarea>
	        </div>
	        <div class="form-group">
	          <label>Link Id</label>
	          <input type="text" id="id" name="id" class="form-control" placeholder="Sesuai dengan nama kopi">
	        </div>
	        <div class="form-group">
	          <label>Link Class</label>
	          <input type="text" id="class" name="class" class="form-control" placeholder="Sesuai dengan nama kopi">
	        </div>
	        <div class="form-group">
	            <label>Gambar</label>
	            <input type="file" id="gambar" name="gambar" class="form-control">
	        </div>
	        <div class="form-group">
	            <button name="save" class="btn btn-success btn-flat">
	                <i class="fa fa-paper-plane"></i> Save
	            </button>
	            <button type="reset" class="btn btn-danger btn-flat">Reset</button>
	        </div>
        </form>
			<?php
			 $conn = mysqli_connect("localhost",'root',"","db_kopi");
			    if (isset($_POST['save'])) {
			    	$id = $_POST['id'];
			    	$class = $_POST['class'];
			        $nama_kopi = $_POST['nama_kopi'];
			        $keterangan = $_POST['keterangan'];
			        $gambar = $_FILES['gambar']['name'];
			        $lokasi = $_FILES['gambar']['tmp_name'];
			        move_uploaded_file($lokasi,"../gambar/".$gambar);
			        $conn->query("INSERT INTO tb_kopi(gambar,nama_kopi,keterangan,id,class) VALUES('$gambar','$_POST[nama_kopi]','$_POST[keterangan]','$_POST[id]','$_POST[class]')");
			        echo "<script>alert('Data Tersimpan');</script>";
			        echo "<meta http-equiv='refresh' content='1;url=index.php?p=kopi'>";
			    }
			?>

        
      	</div>
    </div>
</div>