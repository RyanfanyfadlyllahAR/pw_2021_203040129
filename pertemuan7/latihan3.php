<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
<?php if(isset($_POST["Submit"]) ) : ?>
	<h1>Selamat Datang <?=$_POST["nama"]; ?></h1>
<?php endif; ?>

<form action="" method="post">
	Masukan nama :
	<input type="text" name="nama">
	<br>
	<button type="Submit" name="Submit">Kirim</button>
</form>

</body>
</html>