<?php
// pertemuan 2, belajar sintaks PHP

// NILAI
// angka (integer), tulisan (string), true/false (boolean)
echo false; // boolean null
echo '<br>';
echo 10; // integer
echo '<br>';
echo 'Juan'; // string
echo '<hr>';

// VARIABEL (tempat/wadah untuk menyimpan/menampung nilai)
// awali dengan tanda $, namanya bebas
// boleh mengandung angka, tidak boleh di awali angka dan tidak boleh ada spasi
$nama = 'Juan';
echo $nama;
echo '<hr>';

// STRING
// ' '," "
$hari = "Jum'at";
echo $hari;
echo '<br>';
// Escape Character
// \
echo 'Juan: "Selamat hari Jum\'at"';
echo '<br>';
echo "Juan: \"Selamat hari Jum'at \"";
echo '<hr>';

// Interpolasi
// mencetak langsung isi variabel
// hanya bisa oleh " "

echo "Halo, nama saya $nama";
echo '<br>';

// concat / penggabung string
// .

$nama_depan = 'Juan' ;
$nama_belakang = 'Aditya' ;
echo $nama_depan . " " . $nama_belakang;
echo '<br>';
echo 'Juan: "Selamat' . "hari Jum'at\"";
echo '<hr>';

// OPERATOR
// Aritmatika
// +, -, *, /, % (modulo/modulus/sisa bagi)
echo 1 + 1 ;



echo '<hr>';
// Perbandingan
// <, > <=, >=, ==, /=
echo 1 < 5;
echo '<br>';
echo 1 == 1;
echo '<hr>';

// Identitaw / Strict Comparison
// ===, !==
echo 1 === "1";
echo '<hr>';

// Increment / Decrement
// Tambah / Kurang
// ++, --
$x = 10;
echo ++$x;
echo '<hr>';
echo $x++;


?>