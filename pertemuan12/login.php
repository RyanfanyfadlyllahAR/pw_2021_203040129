<?php 
session_start();

if(isset($_SESSION['login'])) {
	header("Location: index.php");
	exit;
}

require 'functions.php';

// ketika tombol login di tekan
if(isset($_POST['login'])) {
	$login= login($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
</head>

<body>
	<h3>Form login</h3>
	<?php if(isset($login['error'])) : ?>
		<p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
	<?php endif; ?>
	<form action="" method="POST">
		<ul>
			<li>
				<label>
					Username :
					<input type="text" name="Username" autofocus autocomplete="off" required="">
				</label>
			</li>
			<li>
				<label>
					Password :
					<input type="Password" name="Password" required>
				</label>
			</li>
			<li>
				<button type="Submit" name="login">Login</button>
			</li>
			<li>
				<a href="registrasi.php">Tambah user baru</a>
			</li>
		</ul>



	</form>
</body>
</html>