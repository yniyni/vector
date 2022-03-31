<?php
    $conn = mysqli_connect("localhost",'root',"","db_kopi");
    $query=$conn->query("SELECT * FROM tb_kopi WHERE id_kopi='$_GET[id]'");
    $row=$query->fetch_assoc();
?>


<div class="card">
    <div class="card-header">
        <h3 class="card-title">Kopi Edit</h3>
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
	          <label>nama_kopi</label>
	          <input type="text" id="nama_kopi_gambar" name="nama_kopi_gambar" class="form-control" value="<?php echo $row['nama_kopi'] ?>">
	        </div>
	        <div class="form-group">
	          <label>Keterangan</label>
	           <textarea class="form-control" name="keterangan" rows="5"><?php echo $row['keterangan'] ?></textarea>
	        </div>
	        <div class="form-group">
	          <label>Link Id</label>
	          <input type="text" id="id" name="id" class="form-control" value="<?php echo $row['id'] ?>">
	        </div>
	        <div class="form-group">
	          <label>Link Class</label>
	          <input type="text" id="class" name="class" class="form-control" value="<?php echo $row['class'] ?>">
	        </div>
	        <div class="form-group">
                <label>Gambar Lama</label>
                <div class="col-sm-10">
                    <img src="../gambar/<?php echo $row['gambar'];?>" width="300px">
                </div>
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
			        $nama_kopi_kopi = $_POST['nama_kopi'];
			        $keterangan = $_POST['keterangan'];
			        $gambar = $_FILES['gambar']['name'];
			        $lokasi = $_FILES['gambar']['tmp_name'];
			        if (!empty($lokasi)) {
        move_uploaded_file($lokasi,"../gambar'/".$gambar);
        $conn->query("UPDATE tb_kopi SET nama_kopi='$_POST[nama_kopi]',keterangan='$_POST[keterangan]',id='$_POST[id]',class='$_POST[class]', gambar='$gambar' WHERE id_kopi='$_GET[id]'");
    }else{
        $conn->query("UPDATE tb_kopi SET nama_kopi='$_POST[nama_kopi]',keterangan='$_POST[keterangan]',id='$_POST[id]',class='$_POST[class]' WHERE id_kopi='$_GET[id]'");
    }
			        echo "<script>alert('Data Tersimpan');</script>";
			        echo "<meta http-equiv='refresh' content='1;url=index.php?p=kopi'>";
			    }
			?>

        
      	</div>
    </div>
</div>