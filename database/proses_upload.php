<?php
//koneksi
require_once('koneksi.php');
 
//ambil dari variable form
$id_pengurus=$_POST['id_pengurus'];
$foto=$_FILES['foto']['name'];
 
//memasukan data ke database
$query="INSERT INTO tb_gambar VALUES ('', '$id_pengurus', '$foto')";
$simpan=mysqli_query($conn,$query);
 
//upload file ke folder gambar
move_uploaded_file ($_FILES['foto']['tmp_name'], "foto/".$foto); 
 
?>
<html>
<head>
    <title>Proses Upload</title>
    <head>
    <body>
        <h1>Proses Upload</h1>
        <p>File berhasil diupload!</p>
        <a href="upload_foto.php">Kembali ke Halaman Upload</a>

        <?php
 while($row=mysqli_fetch_assoc($data)) {
?>
        <tr>
            <td><?php echo $row['id_gambar']; ?></td>
            <td><?php echo $row['id_pengurus']; ?></td>
            <td><img src="foto/<?php echo $row['gambar']; ?>" width="50px" height="50px"></td>
            <td>
                <a href="hapus_foto.php?id_gambar=<?php echo $row['id_gambar']; ?>">Hapus</a>
            </td>
        </tr>
<?php
 }
?>

<select name="id_pengurus">
<?php
//menampilkan dropdown data pengurus
$query_pengurus="SELECT * FROM tb_pengurus";
$data_pengurus=mysqli_query($conn,$query_pengurus);

?>
<option value="">Pilih Pengurus</option>
<?php
while($row_pengurus=mysqli_fetch_assoc($data_pengurus)) {
?>
    <option value="<?php echo $row_pengurus['id_pengurus']; ?>">
        <?php echo $row_pengurus['nama_pengurus']; ?>
    </option>
<?php
}
?>
</select>
    </body>
</html>