<?php
require 'function.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
            </script>";
    }
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>

	<h1>Halaman registrasi</h1>

	<form action="" method="post">
		<table>
			<tr>
				<td><label for="username">username</label></td>
				<td>:</td><td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td><label for="password">password</label></td>
            <td>:</td>
            <td><input type="password" name="password"></td>
			</tr>
		</table>
		<button type="submit" name="register">REGISTER</button>
	</form>

</body>
</html>