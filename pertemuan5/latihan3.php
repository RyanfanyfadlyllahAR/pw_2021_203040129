<?php 
$mahasiswa = ["Ryan fany fadlyllah AR", "203040129", "Teknik informatika", "fadlyllahfanny@gmail.com"];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar mahasiswa</title>
 </head>
 <body>

 	<h1>Daftar Mahasiswa</h1>

 	<ul>
 		<?php foreach( $mahasiswa as $mhs) : ?>
 			<li><?= $mhs; ?></li>
 		<?php endforeach; ?>
 	</ul>
 
 </body>
 </html>