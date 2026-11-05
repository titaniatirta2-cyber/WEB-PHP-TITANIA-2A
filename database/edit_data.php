<?php
//koneksi
include('koneksi.php');
 
//ambil data dari form
$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$gender=$_POST['gender'];
$gaji=$_POST['gaji'];
 
//memasukan data ke database
$query="UPDATE tb_pengurus SET nama = '$nama', alamat = '$alamat', gender = '$gender', gaji = '$gaji' WHERE id = '$id' ";
$ubah=mysqli_query($conn,$query);
 
?>
<a href="tampil_data.php"> Kembali Untuk lihat Data</a>

<?php
//koneksi
include('koneksi.php');
 
$id=$_GET['id']; //ambil ID
 
$query="SELECT * FROM tb_pengurus WHERE id = '$id'";
$data=mysqli_query($conn,$query);
 
//menampung hasil
$row=mysqli_fetch_assoc($data);
 
?>
<h1>Ubah Data</h1>
 
<form method="post" action="ubah_data.php">
    <p>ID <input type="text" name="id" required="required" value="<?php echo $row['id']; ?>"> </p>
    <p>Nama <input type="text" name="nama" value="<?php echo $row['nama']; ?>"> </p>
    <p>Alamat <textarea name="alamat"><?php echo $row['alamat']; ?></textarea> </p>
    <p>Gender <input type="radio" name="gender" value="L" <?php if(!strcmp($row['gender'], "L")){ echo "CHECKED";} ?> > Laki-laki 
    <input type="radio" name="gender" value="P" <?php if(!strcmp($row['gender'], "P")){ echo "CHECKED";} ?> > Perempuan
    </p>
    <p>Gaji <input type="number" name="gaji" value="<?php echo $row['gaji']; ?>"></p>
    <p>
        <button type="submit">Ubah</button>
        <button type="reset">Batal</button>
    </p>
</form>
?>
