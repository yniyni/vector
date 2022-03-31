<?php
$conn = mysqli_connect("localhost",'root',"","db_kopi");
$q = $conn->query("SELECT * FROM tb_galery WHERE id_galery='$_GET[id]'");
$a = $q->fetch_assoc();
$foto=$a['gambar'];
if(file_exists("../gambar/$foto")){
    unlink("../gambar/$foto");
}

$conn->query("DELETE FROM tb_galery WHERE id_galery='$_GET[id]'");

echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?p=galeri';</script>";
?>