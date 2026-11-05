<?php
//buat session
if(!isset($_SESSION)) {
    session_start();
}
 
//koneksi
require_once('koneksi.php');
 
//ambil data dari form
$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
 
//mencari data username dan password di database
$query="SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";
$data=mysqli_query($conn,$query);
 
//cek berapa jumlah data yang ada
$login=mysqli_num_rows($data);
 
if($login > 0) { //apakah data ditemukan
    //memasukan data username kedalam session
    $_SESSION['username']=$username;
    header("location: tampil_data.php");
} else {
    // jika gagal login kembali ke tampilan login
    header("location: login.php");
}
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h1 align="center">Halaman Login</h1>
<form method="post" action="aksi_login.php">
     
    <table align="center">
        <tr>
            <th>Username</th>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Login</button>
                <button type="reset">Batal</button>
            </td>
        </tr>
    </table>
 
</form>
 
</body>
</html>