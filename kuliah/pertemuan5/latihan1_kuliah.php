<?php 
// ARRAY
// Array adalah variable yang dapat menyimpan lebih dari satu nilai sekaligus.

$hari1 = "Senin";
$hari2 = "Selasa";
// Sampai dengan variable ke 7
$hari7 = "Minggu";

$bulan1 = "Januari";
// Sampai dengan variable ke 12
$bulan12 = "Desember";

// Membuat ARRAY
// Cara baru
$hari =  ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at"];
// Cara lama
$bulan = array("Januari", "Februaru", "Maret", "April", "Mei");

$myArray = [100, "Juan", true];

// Menampilkan Array
// Menampilkan 1 elemen menggunakan index, index itu dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

// Menampilkan semua isi array sekaligus
// var_dump() atau print_r()
// khusus untuk debugging

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// Mencetak semua isi array menggunakan Looping
// menggunakan for untuk pengulangan

for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<br>";
for($i = 0; $i < count($bulan); $i++) {
    echo $bulan[$i];
    echo "<br>";
}
echo "<hr>";

// Looping khusus Array = foreach
foreach($bulan as $bln) {
    echo $bln;
    echo "<br>";
}
echo "<hr>";

// Memanipulasi Array
// Menambahkan elemen di akhir Array

$hari[4] = "Jum'at";
$hari[5] = "Sabtu";
var_dump($hari);


?>