<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
require 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "login";
 	echo "<script>
		alert('Login Berhasil');
		window.location='index.php';
	</script>";
  
}else{
  	echo "<script>
		alert('gagal euyyyy:)');
		window.location='login.php';
	</script>";
}
?>
