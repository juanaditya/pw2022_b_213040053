<?php 
// $mahasiswa = [
//     ["Juan Aditya", "213040053", "juanaditya@gmail.com", "Teknik Informatika"],
//     ["213040066", "Audi Hzr", "audihzr@gmail.com", "Teknik Informatika"],
//      ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "Juan Aditya", 
    "nrp" => "213040053",
    "email" => "juanaditya@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "juannn.jpg"
    ],
    [
    "nama" => "Fasya", 
    "nrp" => "213040090",
    "email" => "fasya@gmail.com",
    "jurusan" => "Teknik Informatika",
    "tugas" => [90, 80, 100],
    "gambar" => "nopoto.jpeg"
    ]
];
echo $mahasiswa[1]["tugas"][1];


?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar $mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <!-- <li>Juan Aditya</li>
        <li>213040053</li>
        <li>juanaditya@gmail.com</li>
        <li>Teknik Informatika</li> -->
        <li>
            <img src="img/<?= $mhs["gambar"];	?>" alt="">
        </li>
        
        <li>Nama : <?= $mhs["nama"]; 	?></li>
        <li>NRP : <?= $mhs["nrp"];	?></li>
        <li>Email : <?= $mhs["email"];	?></li>
        <li>Jurusan : <?= $mhs["jurusan"];	?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>