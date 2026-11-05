<?php
//koneksi
require_once('koneksi.php');
 
$id=$_GET['id']; //ambil ID
 
$query="DELETE FROM tb_pengurus WHERE id = '$id'";
$data=mysqli_query($conn,$query);
 
?>
<a href="tampil_data.php"> Kembali Untuk lihat Data</a>