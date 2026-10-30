<?php
//membuat function
function salam(){
    echo "<h3>Assalamualaikum, </h3>";
    echo "Perkenalkan, nama saya Titania <br>";
}
 
//memanggil function
salam();

function kenalan($nama,$asal) {
    echo "<h3>Halo Nama saya Titania, </h3>";
    echo "Saya dari $asal <br>";
}
 
//memanggil function salam
salam();
 
$siswa="Titania";
$dari="Nganjuk";
 
//memanggil function kenalan
kenalan($siswa,$dari);

// membuat fungsi hitung umur
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
  }
   
echo "Umur saya adalah ". hitungUmur(2007, 2026) ." tahun";

//FUNGSI YANG MEMANGGIL FUNGSI LAIN
//memanggil function salam
salam();
 
$siswa="Ani";
$dari="kediri";
 
//memanggil function kenalan
kenalan($siswa,$dari);
?>