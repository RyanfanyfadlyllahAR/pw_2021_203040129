<?php 
//$mahasiswa = [
//["Ryan fany fadlyllah Ar", "203040129","fadlyllahfanny@gmail.com", " Teknik Informatika"],
//["Rafli artiyadi", "203040130","rafliartiyadi@gmail.com", " Teknik Mesin"]
//["Bagja solehudin", "206040131", "baso@gmail.com", "Teknik mesin"]
//];
 

 // Array Associative
 //definisinya sama seperti array numerik, kecuali
 // keynya adalah string yang kita buat sendiri
$mahasiswa = [
	[
		"nrp" => "203040129",
		"nama" => "Ryan fany fadlyllah Ar",
		 "email" => "fadlyllahfanny@gmail.com",
		 "Jurusan" => "Teknik Informatika",
		 "gambar" => "fany.JFIF"
	],
	[
		"nama" => "Rafli artiyadi",
		 "nrp" => "203040130",
		 "email" => "rafliartiyadi@gmail.com",
		 "Jurusan" => "Teknik Mesin",
		 "gambar" => "rafli.JFIF"
	],
	[
		"nama" => "Bagja solehudin",
		 "nrp" => "206040131",
		 "email" => "baso@gmail.com",
		 "Jurusan" => "Teknik Mesin",
		 "gambar" => "bagja.JFIF"
	]
];



?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar mahasiswa</title>
 </head>
 <body>
 	<h1>Daftar mahasiswa</h1>

 	<?php foreach( $mahasiswa as $mhs) : ?>
 		<ul>
 			<li>
 				<img src="img/<?= $mhs["gambar"]; ?>">
 			</li>
 			<li>Nama : <?=$mhs["nama"]; ?></li>
 			<li>NRP : <?=$mhs["nrp"]; ?></li>
 			<li>Jurusan : <?=$mhs["Jurusan"]; ?></li>
 			<li>email : <?=$mhs["email"]; ?></li>
 		</ul>
 	<?php endforeach; ?>





 </body>
 </html>