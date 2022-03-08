<?php 
// definisikan masing-masing sisi kubus
$a = 9;
$b = 4;

// hitung masing-masing volume kubus
$volume_a = pow($a, 3);
$volume_b = pow($b, 3);

// hitung total 2 volume
$total = $volume_a + $volume_b;

// kembalikan nilai total
echo "Jumlah dari volume kubus dengan sisi $a dan kubus dengan sisi $b adalah $total";

echo "<hr>";

// Deklarasi / definisi function
function total_volume_dua_kubus($a, $b){
    $volume_a = pow($a, 3);
    $volume_b = pow($a, 3);

    $total = $volume_a + $volume_b;


    return "Jumlah dari volume kubus dengan sisi $a dan kubus dengan sisi $b adalah $total";

}

// Pemanggilan / eksekusi function
echo total_volume_dua_kubus(9,4);
echo "<br>";
echo total_volume_dua_kubus(10,20);
echo "<br>";
echo total_volume_dua_kubus(5,6);
echo "<hr>";

// buat sebuah fungsi untuk menghitung luas segitiga

$a = 2;
$t = 4;
function luas_segitiga ($a, $t){
$luas_segitiga = ($a * $t)/2 ;
$total = $luas_segitiga;

return "Hasil luas segitiga dengan alas $a dan Tinggi  $t adalah $total";
}

echo luas_segitiga(2,4);
echo'<br>';
echo luas_segitiga(8,10);
echo'<br>';
echo luas_segitiga(7,4);


?>