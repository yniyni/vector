<?php
$conn = mysqli_connect("localhost",'root',"","db_kopi");

$q = $conn->query("SELECT * FROM tb_kopi WHERE id_kopi='$_GET[id]'");
$a = $q->fetch_assoc();
$foto=$a['gambar'];
if(file_exists("../gambar/$foto")){
    unlink("../gambar/$foto");
}

$conn->query("DELETE FROM tb_kopi WHERE id_kopi='$_GET[id]'");

echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?p=kopi';</script>";
?>