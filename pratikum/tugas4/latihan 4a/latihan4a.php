<?php  
// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "");

// Memilih Database
mysqli_select_db($conn, "pw_tubes_203040129");

// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM  mahasiswa");

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
 				<td>NO</td>
 				<td>FOTO</td>
 				<td>NRP</td>
 				<td>Nama</td>
 				<td>Email</td>
 				<td>Jurusan</td>
 			</tr>
 			<?php $i=1 ?>
 			<?php while($row = mysqli_fetch_assoc($result)) : ?>
 				<tr>
 					<td><?=$i  ?></td>
 					<td><img src="assets/img/<?= $row["img"]; ?>"></td>
 					<td><?= $row["nrp"] ?></td>
 					<td><?= $row["nama"] ?></td>
 					<td><?= $row["email"] ?></td>
 					<td><?= $row["jurusan"] ?></td>
 				</tr>
 				<?php $i++ ?>
 			<?php endwhile; ?>
 		</table>
 	</div>
 
 </body>
 </html>