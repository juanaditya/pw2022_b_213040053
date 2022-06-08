<?php
// koneksi ke database
$conn = mysqli_connect('localhost','root','','tubes') or die('Koneksi GAGAL');


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
	$keterangan = htmlspecialchars($data["keterangan"]);
	$perusahaan = htmlspecialchars($data["perusahaan"]);
    $dosis = htmlspecialchars($data["dosis"]);
	$gambar = upload();
    if( !$gambar ) {
        return false ;
    }



    $query = "INSERT INTO obat
				VALUES
				('', '$nama', '$keterangan', '$perusahaan', '$dosis', '$gambar')
			";
	
	mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			</script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			</script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 1000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			</script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;
}



function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM obat WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function ubah($data) {

    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
	$keterangan = htmlspecialchars($data["keterangan"]);
	$perusahaan = htmlspecialchars($data["perusahaan"]);
	$dosis = htmlspecialchars($data["dosis"]);
	$gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE obat SET
                nama = '$nama', 
                keterangan = '$keterangan',
                perusahaan = '$perusahaan',
                dosis = '$dosis',
                gambar = '$gambar'
                WHERE id = $id
                ";
	
	mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);  

}
	







?>