<?php 
// menghubungkan dengan file php lainynya
require 'function.php';

//melakukan query
$mahasiswa = query("SELECT * FROM mahasiswa");
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>Document</title>
 </head>
 <body>
 	<div class="container">
 		<div class="add">
 			<a href="tambah.php">Tambah.php</a>
 		</div>
 		<table border="1" cellpadding="13" cellspacing="0" >
 			<tr>
 				<th>#</th>
 				<th>opsi</th>
 				<th>Gambar</th>
 				<th>NRP</th>
 				<th>Nama</th>
 				<th>Email</th>
 				<th>Jurusan</th>
 			</tr>
 			<?php $i=1 ?>
 			<?php foreach($mahasiswa as $mhs) : ?>
 				<tr>
 					<td><?=$i  ?></td>
 					<td>
 						<a href=""><button>Ubah</button></a>
 						<a href=""><button>Hapus</button></a>
 					</td>
 					<td><img src="../assets/img/<?= $mhs["img"]; ?>"></td>
 					<td><?= $mhs["nrp"]; ?></td>
 					<td><?= $mhs["nama"]; ?></td>
 					<td><?= $mhs["email"]; ?></td>
 					<td><?= $mhs["jurusan"]; ?></td>
 				</tr>
 				<?php $i++ ?>
 			<?php endforeach; ?>
 		</table>
 	</div>
 
 </body>
 </html>