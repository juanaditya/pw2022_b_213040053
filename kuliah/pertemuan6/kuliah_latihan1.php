<?php 
// Array Associative
// Array yang indexnya berupa string, yang berasosiasi atau berpasangan dengan nilai

$mahasiswa = [
    [   
        "nama" => "Juan Aditya",
        "npm" => "213040053", 
        "email" => "juanaditya@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Audi Hzr", 
        "npm" => "213040066", 
        "email" => "audihzr@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Paisal Ambari", 
        "npm" => "213040065", 
        "email" => "paisalambari@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
];
// var_dump($mahasiswa[3]["nama"]);
    
?>


<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama  : <?= $mhs["nama"]?></li>
    <li>NPM   : <?= $mhs["npm"]?></li>
    <li>Email : <?= $mhs["email"]?></li>
    <li>Prodi : <?= $mhs["jurusan"]?></li>
</ul>
<?php } ?>
