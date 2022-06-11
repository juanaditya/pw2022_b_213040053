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

    //jika user tidak memilih gambar
    if($_FILES["gambar"]["error"] === 4) {
        $gambar = 'default.jpg' ;
    } else {
        //jalankan fungsi upload gambar
        $gambar = upload();
        // cek jika upload gagal
        if (!$gambar) {
            return false;
        }
    }

    $nama = htmlspecialchars($data['nama']);
    $keterangan =  htmlspecialchars($data['keterangan']);
    $perusahaan =  htmlspecialchars($data['perusahaan']);
    $dosis =  htmlspecialchars($data['dosis']);
    // $gambar =  htmlspecialchars($data['gambar']);

    $query = "INSERT INTO obat VALUES (null, '$nama', '$keterangan', '$perusahaan', '$dosis', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Function upload
function upload() {
    //siapkan data gambar
    $filename = $_FILES["gambar"]["name"];
    $filetmpname = $_FILES["gambar"]["tmp_name"];
    $filesize = $_FILES["gambar"]["size"];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ["jpg", "jpeg", "png"];

    // cek apakah file yg diupload bukan gambar
    if(!in_array($filetype, $allowedtype)) {
        echo "<script> alert('File Tidak Mendukung!'); </script>" ;

        return false;
    }

    //cek apakah gambar terlalu besar
    if($filesize > 1000000) {
        echo "<script> alert('file terlalu besar'); </script>" ;
        return false;
    }
    //lolos pengecekan
    $newfilename = uniqid() . $filename;

    move_uploaded_file($filetmpname, '../img/' . $filename);

    return $filename;
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