<?php 
// fungsi untuk melakukan  koneksi ke database
function koneksi()
{
	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "pw_tubes_203040129");

	return $conn;
}
// function untuk melakukan query dan memasukan ke dalam array
function query($sql)
{
	$conn = koneksi();
	$result = mysqli_query($conn, "sql");
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){

	}
	return $row;
}

 ?>