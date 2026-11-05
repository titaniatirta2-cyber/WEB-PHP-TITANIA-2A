<?php
//koneksi
require_once('koneksi.php');
 
//ambil data dari database
$query="SELECT * FROM tb_gambar";
$data=mysqli_query($conn,$query);
?>
 
<html>
    <head>
        <title>Upload File</title>
    </head>
    <body>
    <h1>Upload Foto Pengurus</h1>
 
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Nama Pengurus</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
<?php
 while($row=mysqli_fetch_assoc($data)) {
?>
        <tr>
            <td><?php echo $row['id_gambar']; ?></td>
            <td><?php echo $row['id_pengurus']; ?></td>
            <td><?php echo $row['gambar']; ?></td>
            <td>Hapus</td>
        </tr>
<?php
 }
?>
    </table>
    <hr>
<h1>Form Upload</h1>
<form method="post" action="proses_upload.php" enctype="multipart/form-data">
    <p>Nama 
        <select name="id_pengurus">
<?php
//menampilkan dropdown data pengurus
$query_pengurus="SELECT * FROM tb_pengurus";
$data_pengurus=mysqli_query($conn,$query_pengurus);
 while($row_pengurus=mysqli_fetch_assoc($data_pengurus)) {
?>
            <option value="<?php echo $row_pengurus['id_pengurus'];?>">
                <?php echo $row_pengurus['nama']; ?>
            </option>
<?php
 }
?>
        </select>
     
    </p>
    <p>Foto <input type="file" name="foto"></p>
    <p>
        <button type="submit">Simpan</button>
        <button type="reset">Batal</button>
    </p>
</form> 
</body>
</html>