<?php 

require 'function.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


if (isset($_POST['ubah'])) {
	if (ubah($_POST) > 0) {
		echo "<script>
				alert('Data Berhasil ditambahkan!');
				document.location.href = 'admin.php';
				</script>";
		} else {
			echo "<script>
			alert('Data Gagal ditambahkan!');
				document.location.href = 'admin.php';
				</script>";

	}
}

 ?>
 


	    
<title>From Ubah Data Mahasiswa</title>
<form action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?=$mhs['id']; ?>">
	<ul>
		<input type="hidden" name="gambarlama" id="img" value="<?=$mhs['img']; ?>">
		<li>
			<label for="nrp">NRP :</label><br>
			<input type="text" name="nrp" id="nrp" required value="<?=$mhs['nrp']; ?>"><br><br>
		</li>
		<li>
			<label for="nama">Nama :</label><br>
			<input type="text" name="nama" id="nama" required value="<?=$mhs['nama']; ?>"><br><br>
		</li>
		<li>
		<label for="email">Email :</label><br>
		<input type="text" name="email" id="email" required value="<?=$mhs['email']; ?>"><br><br>
	   </li>
	   <li>
	   	<label for="jurusan">Jurusan :</label><br>
	   	<select name="jurusan" id="jurusan" required value="<?=$mhs['jurusan']; ?>">
	   		<option value="">----------- pilih Jurusan -----------</option>
	   		<option value="Teknik Mesin">Teknik Mesin</option>
	   		<option value="Teknik Informatika">Teknik Informatika</option>
	   		<option value="Teknik Industri">Teknik Industri</option>
	   		<option value="mipa">mipa</option>
	   		<option value="elektro">elektro</option>
	   		<option value="kimunikasi">kimunikasi</option>
	   	</select>
	   </li>
	   <li>
			<label for="gambar">Gambar :</label><br>
			<img src="../assets/img/<?= $mhs['img']; ?>" width = "40"><br>
			<input type="file" name="img" id="img">
		</li>
	   <br>
	   <button type="submit" name="ubah">Ubah Data!</button>
	   <button type="submit">
	   	<a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
	   </button>
	</ul>
</form>