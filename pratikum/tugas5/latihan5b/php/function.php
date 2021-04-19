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
function tambah ($data)
{
	$conn = koneksi();

	$nrp = htmlspecialchars($data ['nrp']);
	$nama = htmlspecialchars($data ['nama']);
	$email = htmlspecialchars($data ['email']);
	$jurusan = htmlspecialchars($data ['jurusan']);
	$img= htmlspecialchars($data ['img']);

	$query = "INSERT INTO mahasiswa
					VALUES
					('','$img', '$nrp', '$nama', '$email', '$jurusan')";
	mysqli_query($conn, $query);

	return  mysqli_affected_rows($conn);
}
?>