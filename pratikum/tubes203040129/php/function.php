<?php
// function untuk  melakukan koneksi ke database
function koneksi(){
$conn = mysqli_connect("localhost","root","") or die("koneksi ke DB gagal");
mysqli_select_db($conn, "pw_tubes_203040129") or die ("Database salah!");

return $conn;
}

// function untuk melakukan query ke database
function query($sql){
    $conn = koneksi();
$result = mysqli_query($conn, "$sql");

$rows = [];
while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}
    return $rows;
}

function upload () {
	$namafile = $_FILES['img']['name'];
	$ukuranFile =$_FILES['img']['size'];
	$error =$_FILES['img']['error'];
	$tmp_Name =$_FILES['img']['tmp_name'];

	if($error === 4) {
		echo "<script>
		alert('pilih gambar terlebih dahulu!');
		</script>";
	return false;
	}

	$enkripsiGambarValid = ['jpg', 'jpeg', 'png','jfif'];
	$enkripsiGambar = explode('.', $namafile);
	$enkripsiGambar= strtolower(end($enkripsiGambar));

	if(!in_array($enkripsiGambar, $enkripsiGambarValid)) {
		echo "<script>
		alert('Anda upload bukan gambar!');
		</script>";
	return false;
	}

	if($ukuranFile > 1000000) {
		echo "<script>
		alert('Ukuran gambar terlalu besar!');
		</script>";
	return false;
	}

	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $enkripsiGambar;

	move_uploaded_file($tmp_Name, '../assets/img/' . $namafilebaru);

	return $namafilebaru;


}
function tambah ($data)
{
	$conn = koneksi();

	$nrp = htmlspecialchars($data ['nrp']);
	$nama = htmlspecialchars($data ['nama']);
	$email = htmlspecialchars($data ['email']);
	$jurusan = htmlspecialchars($data ['jurusan']);
	
	$img = upload();
	if(!$img) {
		return false;
	}

	$query = "INSERT INTO mahasiswa
					VALUES
					(NULL,'$img', '$nrp', '$nama', '$email', '$jurusan')";
	mysqli_query($conn, $query);

	return  mysqli_affected_rows($conn);
}



function hapus($id)
{
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	
	return mysqli_affected_rows($conn);
}
function ubah($data)
{
	$conn = koneksi();
	$id = $data['id'];
	$gambarlama = htmlspecialchars($data['gambarlama']);
	$nrp = htmlspecialchars($data['nrp']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	

	$img = upload();
    if (!$img) {
        return false;
    }
    if ($img == 'nophoto.png') {
        $img = $gambarlama;
    }
	
	$query = "UPDATE mahasiswa
				SET
				img ='$img',
				nrp = '$nrp',
				nama = '$nama',
				email = '$email',
				jurusan = '$jurusan',
				WHERE id ='$id'
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}







?>