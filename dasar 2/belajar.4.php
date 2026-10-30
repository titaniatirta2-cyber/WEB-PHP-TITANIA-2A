<?php
 
$nama_barang = "Sabun Mandi";
$harga = 4000;
$stok = 40;

//TIPE DATA
var_dump($nama_barang);
var_dump($harga_barang);
var_dump($stok);
 
// menampilkan isi variabel
echo "<br>Titania membeli $nama_barang seharga Rp $harga";
 
//menggunakan petik satu
echo '<br>Titania membeli ' . $nama_barang . ' seharga Rp ' . $harga;
?>