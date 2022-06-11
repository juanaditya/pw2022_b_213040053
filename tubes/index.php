<?php 
include 'functions.php';
$obat = query("SELECT * FROM obat");
if(isset($_GET["cari"])){
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM obat
				WHERE
			nama LIKE '%$keyword%' OR
			keterangan LIKE '%$keyword%' OR
			perusahaan LIKE '%$keyword%' OR
			dosis LIKE '%$keyword%'
			";
	$obat = query($query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Data Obat</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
<div class="container">
    <a class="navbar-brand" href="#">Juan Klinik</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="logout.php">Logout </a>
    </div>
    </div>
</div>
</nav>
<!-- close Navbar -->

<!-- Container -->
<div class="container">
    <div class="row my-3">
        <div class="col-md">
            <h2 class="text-uppercase text-center fw-bold">Data Obat</h2>
        </div>
        <hr>
    </div>
    <div class="row">
        <div class="col-md">
        <a href="tambah.php" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data</a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-4">
            <form action="" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="Masukan keyword pencarian" autocomplete="off">
                <button class="btn btn-primary" type="submit" name="cari">Cari</button>
            </div>
            </form>
        </div>
    <div>
        <form class="form-inline" action="" methode="post">
            <div class="form-group">
            <div class="row mt-4">
        <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Perusahaan</th>
        <th scope="col">Dosis</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1 ?>
    <?php foreach( $obat as $o) { ?>
        <tr class="align-middle">
        <th scope="row"><?= $i++; ?></th>
        <td>
            <img src="img/<?= $o["gambar"]?>" width="150 px";
            class="img-preview">
        </td>
        <td> <?= $o["nama"]?> </td>
        <td><?= $o["keterangan"]?></td>
        <td><?= $o["perusahaan"]?></td>
        <td><?= $o["dosis"]?></td>
        <td>
            <a href="ubah.php?id=<?= $o["id"]?>" class="btn badge bg-warning">Ubah</a>
            <a href="hapus.php?id=<?= $o["id"]?>" class="btn badge bg-danger" onclick="return confirm('yakin?')">Hapus</a>
        </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
    </div>
</div>
<!-- Close Container -->





<!-- Bootstap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Data Tables -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>