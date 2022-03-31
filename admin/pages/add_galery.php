<div class="card">
    <div class="card-header">
        <h3 class="card-title">Gallery Tambah</h3>
        <a href="index.php?p=galeri" class="btn btn-warning btn-flat">
            <i class="fa fa-undo"></i> Kembali
        </a>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-4 col-md-offset-9">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" id="nama_gambar" name="nama_gambar" class="form-control" placeholder="Masukan Nama">
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
                        $nama_gambar = $_POST['nama_gambar'];
                        $gambar = $_FILES['gambar']['name'];
                        $lokasi = $_FILES['gambar']['tmp_name'];
                        move_uploaded_file($lokasi,"gambar/".$gambar);
                        $conn->query("INSERT INTO tb_galery(gambar,nama_gambar) VALUES('$gambar','$_POST[nama_gambar]')");
                        echo "<script>alert('Data Tersimpan');</script>";
                        echo "<meta http-equiv='refresh' content='1;url=index.php?p=galeri'>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>