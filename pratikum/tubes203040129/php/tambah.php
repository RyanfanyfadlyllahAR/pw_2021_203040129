<?php 
require 'function.php';

if (isset($_POST['tambah'])) {
	if (tambah($_POST) > 0) {
		echo "<script>
				alert('Data Berhasil ditambahkan!');
				document.location.href = 'admin.php';
				</script>";
		} else {
			echo "<script>
			alert('Data Berhasil ditambahkan!');
				document.location.href = 'admin.php';
				</script>";
	}
}
 ?>
<h3>From Tambah Data Mahasiswa</h3>
<style>
        body{
            background-color:  gray; 
        }
    </style>
<form action="" method="post" enctype="multipart/form-data">
	<ul>
		
		<li>
			<label for="nrp">NRP :</label><br>
			<input type="text" name="nrp" id="nrp" required><br><br>
		</li>
		<li>
			<label for="nama">Nama :</label><br>
			<input type="text" name="nama" id="nama" required><br><br>
		</li>
		<li>
		<label for="email">Email :</label><br>
		<input type="text" name="email" id="email" required><br><br>
	   </li>
	   <li>
	   	<label for="jurusan">Jurusan :</label><br>
	   	<select name="jurusan" id="jurusan" required>
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
			<input type="file" name="img" id="img" ><br><br>
		</li>
	   <br>
	   <button type="submit" name="tambah">Tambah Data!</button>
	   <button type="submit">
	   	<a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
	   </button>
	</ul>
</form>