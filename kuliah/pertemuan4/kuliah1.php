<?php 
// 4 - FUN (string, $for,at, ?int
// built-in function

// date()
// untuk mengetahui waktu saat ini
// deffault timezone; UTC (-7 jam)

echo date("d");
echo "<br>";
echo date("l, j F y");
echo "<hr>";
echo date("l", time ());
echo "<hr>";
// time()
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu sejak 1 januari 1970
echo time();
echo "<br>";
echo time() + 60 * 60 * 24;
echo "<hr>";
// Hari apa 100 hari ke depan
echo date("l", time() + 60 * 60 * 24 * 100);
echo "<br>";
// Hari apa 100 hari ke belakang
echo date("l", time() - 60 * 60 * 24 * 100);
echo "<hr>";

// mktime()
// membuat waktu berdasarkan format
// mktime(0,0,0,0,0,0)
// jam, menit, detik, tanggal, tahun
echo mktime(10,45,0,3,5,2022);
echo "<br>";
echo date("l",mktime(0,0,0,3,7,2003));
echo "<hr>";


echo strtotime("7 March 2003");
echo "<br>";
echo mktime(0,0,0,3,7,2003);
echo "<hr>";

// Fungsi matematika
// pow() untuk pangkat
echo pow(2,3);
echo "<br>";
// bilangan random
echo rand(1,10);
echo "<br>";
// pembulatan ke nilai terdekat
echo round(2.5);
echo "<br>";
// pembulatan keatas (celling/langit2)
echo ceil(2.1);
echo "<br>";
// pembulatan kebawah (floor/lantai)
echo floor(2.9);

?>