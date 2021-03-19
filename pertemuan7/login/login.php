<?php 
// cek apakah tombol submit sudah teka atau belum
if(isset($_POST["submit"]) ){
// cek username & password
if($_POST["username"] == "Ryan fany fadlyllah AR" && $_POST["password"] ==
 	"123") {
// jika benar, redirect ke halaman admin
	header("Location: admi.php");
	exit;
  } else {
// jika salah, tampilkan pesan kesalahan
  	$eror = true;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<h1>Login</h1>

<?php if(isset($eror) ): ?>
<p style="color : red; font-style: italic;">username / password salah</p>
<?php endif; ?>

<ul>
<form action="" method="post">
	<li>
		<label for="Username">Username: </label>
		<input type="text" name="Username" id="Username">
	</li>
	<li>
		<label for="password">password: </label>
		<input type="password" name="password" id="password">
	</li>
	<li>
		<button type="submit" name="submit">Login</button>
	</li>
	
		
	
	
</form>
</ul>






</body>
</html>