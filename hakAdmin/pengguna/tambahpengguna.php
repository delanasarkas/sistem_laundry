<?php
include 'koneksi.php';
if(isset($_POST['modal-footer'])){
$tanggal = $_POST['tanggal'];
$nama = $_POST ['nama'];
$username = $_POST ['username'];
$alamat = $_POST ['alamat'];
$telepon = $_POST ['telepon'];

$query = mysqli_query($koneksi, "INSERT INTO pengguna (tanggal,nama,username,alamat,telepon) VALUES 
	('$tanggal','$nama','$username','$alamat','$telepon')");

header("Location: index.php");
}
?>

