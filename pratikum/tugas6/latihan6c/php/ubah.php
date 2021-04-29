<?php 

require 'function.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


if (isset($_POST['ubah'])) {
	if (ubah($_POST) > 0) {
		echo "<sctript>
				alert('Data Berhasil ditambahkan!');
				document.location.href = 'admin.php';
				</sctript>";
		} else {
			echo "<sctript>
			alert('Data Berhasil ditambahkan!');
				document.location.href = 'admin.php';
				</sctript>";

	}
}

 ?>
 


	    
<title>From Ubah Data Mahasiswa</title>
<form action="" method="post">
	<ul>
		<input type="hidden" name="id" id="nama" required value="<?=$mhs['id']; ?>">
		<li>
			<label for="gambar">Gambar :</label><br>
			<input type="text" name="img" id="img" required value="<?=$mhs['img']; ?>"><br><br>
		</li>
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
	   <br>
	   <button type="submit" name="ubah">Ubah Data!</button>
	   <button type="submit">
	   	<a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
	   </button>
	</ul>
</form>