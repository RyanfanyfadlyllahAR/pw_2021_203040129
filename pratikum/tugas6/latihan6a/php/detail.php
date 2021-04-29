<?php 
//mengecek apakah  ada id yang di kirimkan
//jika tidak maka akan di kembalikan ke halaman index.php
if(!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'function.php';

//Mengambil id dari url
$Id = $_GET['id'];

//melakukan query dengan parameter id yang di ambil dari url 
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $Id")[0];
?>
 
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="../assets/img/<?= $mahasiswa["img"]; ?>" alt="">
		</div>
		<div class="keterangan">
			<p><?= $mahasiswa["nama"]; ?></p>
			<p><?= $mahasiswa["nrp"]; ?></p>
			<p><?= $mahasiswa["email"]; ?></p>
			<p><?= $mahasiswa["jurusan"]; ?></p>
		</div>

		<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
	</div>
</body>
</html>