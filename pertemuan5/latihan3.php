<?php 
$mahasiswa = [
	["Ryan fany fadlyllah AR", "203040129", "Teknik
	 informatika", "fadlyllahfanny@gmail.com"],
	 ["Bagja solehudin", "203060013", "Teknik
	 perencanaan wilayah kota", "baso@gmail.com"],
	 ["Rosa yuni cahyani", "2030405060", "Teknologi
	  pangan", "rosa@gmail.com"]
];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>

 	<h1>Daftar Mahasiswa</h1>
<?php  foreach($mahasiswa as $mhs):?>
 	<ul>
	 	<li>Nama : <?= $mhs[0]; ?></li>
	 	<li>Npm : <?= $mhs[1]; ?></li>
	 	<li>jurusan : <?= $mhs[2]; ?></li>
	 	<li>Email : <?= $mhs[3]; ?></li>
 	</ul>
 <?php endforeach; ?>
 </body>
 </html>