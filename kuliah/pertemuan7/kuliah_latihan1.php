<?php 
// SUPERGLOBALS
// Variable bawaan PHP yang bisa diakses di mana pun
// Bentuknya Array Associative
// $_GET
// $_POST
// $_SERVER
// $_GET = ["nama" => "Juan Aditya", "email" => "juanaditya@gmail.com"];
// $_GET["nama"] = "Juan Aditya";
// $_GET["email"] = "juanaditya@gmail.com";
// var_dump($_GET);


?>

<!-- <h1>Hallo, <?= $_GET["nama"];	?></h1> -->

<ul>
    <li>
        <a href="kuliah_latihan2.php?nama=Juan Aditya&npm=213040053&email=juanaditya@gmail.com">Juan</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Audia Hezra&npm=213040066&email=audiahezra@gmail.com">Audi</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Paisal Ambari&npm=213040065&email=paisalambari@gmail.com">Paisal</a>
    </li>
</ul>