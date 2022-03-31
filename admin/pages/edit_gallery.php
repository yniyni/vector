<?php
    $conn = mysqli_connect("localhost",'root',"","db_kopi");
    $query=$conn->query("SELECT * FROM tb_galery WHERE id_galery='$_GET[id]'");
    $row=$query->fetch_assoc();
?>


<div class="page-content">

                    <!-- Page-Title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title mb-1">Gambar</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Gallery</a></li>
                                    <li class="breadcrumb-item active">Edit Gallery</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-right d-none d-md-block">
                                        <a href="index.php?p=galeri" class="btn btn-warning btn-rounded">
                                            <i class="fa fa-undo"></i> Kembali
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama_gambar" class="form-control" value="<?php echo $row['nama_gambar'];?>" />
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Gambar Lama</label>
                                            <div class="col-sm-10">
                                                <img src="../gambar/<?php echo $row['gambar'];?>" width="300px">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="gambar" class="form-control">
                                        </div>

                                        <div class="form-group mb-0">
                                            <div>
                                                <button name="save" class="btn btn-success waves-effect waves-light">
                                                    Save
                                                </button>
                                                <button type="reset" class="btn btn-danger waves-effect m-l-5">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end container-fluid -->
                    </div> 
                    <!-- end page-content-wrapper -->
                </div>
                <!-- End Page-content -->
<?php
    if (isset($_POST['save'])) {
        // $id = $_SESSION['id'];
        $nama_gambar = $_POST['nama_gambar'];
        $gambar = $_FILES['gambar']['name'];
        $lokasi = $_FILES['gambar']['tmp_name'];
        if (!empty($lokasi)) {
        move_uploaded_file($lokasi,"../gambar".$gambar);
        $conn->query("UPDATE galery SET nama_gambar='$_POST[nama_gambar]', gambar='$gambar' WHERE id_galery='$_GET[id]'");
    }else{
        $conn->query("UPDATE galery SET nama_gambar='$_POST[nama_gambar]' WHERE id_galery='$_GET[id]'");
    }
        echo "<script>alert('Data Tersimpan');</script>";
        echo "<meta http-equiv='refresh' content='1;url=index.php?p=gallery'>";
    }
?>
