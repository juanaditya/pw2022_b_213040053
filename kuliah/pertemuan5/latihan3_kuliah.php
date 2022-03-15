<?php 

// $mahasiswa = ["Juan Aditya", "213040053", "juan.213040053@unpas.ac.id", "Teknik Informatika"];
// echo "<hr>";
$mahasiswa = [
["Juan Aditya", "213040053", "juanaditya@gmail.com", "Teknik Informatika"],
["Audi Hzr", "213040066", "audihzr@gmail.com", "Teknik Informatika"],
["Paisal Ambari", "213040065", "paisalambari@gmail.com", "Teknik Informatika"],
];

echo "<br>";
?>
<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama  : <?php echo $mhs[0]?></li>
    <li>NPM   : <?php echo $mhs[1]?></li>
    <li>Email : <?php echo $mhs[2]?></li>
    <li>Prodi : <?php echo $mhs[3]?></li>
</ul>
<?php } ?>

?>