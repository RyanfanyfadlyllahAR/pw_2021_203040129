<?php 
// menghubungkan dengan file php lainynya
require 'php/function.php';

//melakukan query
$mahasiswa = query("SELECT * FROM mahasiswa")
 ?>
  <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>Document</title>
 </head>
 <body>
 	<div class="container">
 		<table cellpadding="10" cellspacing="0" border="1">
 			<tr>
 				<th>NO</th>
 				<th>FOTO</th>
 				<th>NRP</th>
 				<th>Nama</th>
 				<th>Email</th>
 				<th>Jurusan</th>
 			</tr>
 			<?php $i=1 ?>
 			<?php foreach($mahasiswa as $mhs) : ?>
 				<tr>
 					<td><?=$i  ?></td>
 					<td><img src="assets/img/<?= $mhs["img"]; ?>"></td>
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