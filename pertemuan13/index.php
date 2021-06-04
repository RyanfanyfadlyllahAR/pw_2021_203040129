<?php 
session_start();

if(!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari diklik
if(isset($_POST['cari'])) {
    $mahasiswa = cari($_POST['keyword']);
}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<title>Daftar Mahasiswa</title>
</head>


<body>
	<a href="logout.php">logout</a>
	<h3>Daftar Mahasiswa</h3>
	
	<a href="tambah.php">Tambah data mahasiswa</a>
	<br><br>

	<form action="" method="POST">
		<input type="text" name="keyword" size="50" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus class="keyword">
		<button type="submit" name="cari" class="tombol-cari">Cari!</button>
	</form>
	<br>

	<div class="container">
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>#</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Aksi</th>
		</tr>

	<?php if(empty($mahasiswa)) : ?>
	<tr>
		<td colspan="4">
			<p style="color: red; font-style: italic;">data mahasiswa tidaak di temukana!</p>
		</td>
	</tr>
	<?php endif; ?>

		<?php $i = 1;
		foreach($mahasiswa as $mhs) : ?>
		<tr>
			<td><?= $i++; ?></td>
			<td><img src="img/<?= $mhs['img']; ?>" width="60"></td>
			<td><?= $mhs['nama']; ?></td>
			<td>
				<a href="detail.php?id=<?= $mhs['id'];?>">lihat detail</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>

<script src="js/script.js"></script>
</body>

</html>


