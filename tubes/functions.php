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

// function tambah
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

// Function upload
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


// Function Hapus
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM obat WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// Function Ubah
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
	
// register akun
function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek email
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Your Email Already Registered, Please Try Another Email');
                document.location.href = 'registrasi.php';
                </script>";
        return false;
    }

    //cek konfrimasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('Sorry your Password not correct!');
                document.location.href = 'registrasi.php';
                </script>";

        return false;
    }
//enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

//tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password', 'user')");

    return mysqli_affected_rows($conn);
}

?>