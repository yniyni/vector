<?php
    $conn = mysqli_connect("localhost",'root',"","db_kopi");
    $query=$conn->query("SELECT * FROM about WHERE id_about='$_GET[id]'");
    $row=$query->fetch_assoc();
?>


<div class="card">
    <div class="card-header">
        <h3 class="card-title">Gallery Tambah</h3>
        <a href="index.php?p=about" class="btn btn-warning btn-flat">
            <i class="fa fa-undo"></i> Kembali
        </a>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-4 col-md-offset-9">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Tittle</label>
                  <input type="text" id="tittle" name="tittle" class="form-control" value="<?php echo $row['tittle'];?>">
                </div>
                <div class="form-group">
                  <label>About</label>
                   <textarea class="form-control" name="about" rows="5"><?php echo $row['about'];?></textarea>
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
                        $tittle = $_POST['tittle'];
                        $about = $_POST['about'];
                        $gambar = $_FILES['gambar']['name'];
                        $lokasi = $_FILES['gambar']['tmp_name'];
                        if (!empty($lokasi)) {
                            move_uploaded_file($lokasi,"../gambar/".$gambar);
                            $conn->query("UPDATE about SET about='$_POST[about]', gambar='$gambar' WHERE id_about='$_GET[id]'");
                        }else{
                            $conn->query("UPDATE about SET about='$_POST[about]' WHERE id_about='$_GET[id]'");
                        }
                        echo "<script>alert('Data Tersimpan');</script>";
                        echo "<meta http-equiv='refresh' content='1;url=index.php?p=about'>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>