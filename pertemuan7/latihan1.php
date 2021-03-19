<?php 
// $_GET
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
	<title>GET</title>
</head>
<body>
<h1>Daftar mahasiswa</h1>
<ul>
<?php foreach($mahasiswa as $mhs) : ?>
	<li>
		<a href="latihan2.php?nama=<?=$mhs["nama"]; ?>&nrp=<?=$mhs["nrp"]; ?>&email=<?=$mhs["email"]; ?>&Jurusan=<?=$mhs["Jurusan"]; ?>&gambar=<?=$mhs["gambar"]; ?>"><?=$mhs["nama"]; ?></a>
	</li>
<?php endforeach ?>
</ul>



</body>
</html>