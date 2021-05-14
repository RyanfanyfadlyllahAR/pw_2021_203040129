<?php
require 'functions.php';


// jika tiak ada id di url
if(!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$mhs =query("SELECT * FROM mahasiswa WHERE id = $id");
 
// cek apakah tombol tambah sudah ditekan
if (isset($_POST['Ubah'])) {
    if (Ubah($_POST) > 0) {
        echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "data gagal diubah!";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h3>Form Ubah Data Mahasiswa</h3>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
        <ul>
            <li>
                  <label>
                    Gambar :
                    <input type="text" name="img" required value="<?=$mhs['img']; ?>">
                </label>
                
            </li>
            <li>
                <label>
                    Nama :
                    <input type="text" name="nama" autofocus required value="<?=$mhs['nama']; ?>">
                </label>
            </li>
            <li>
                <label>
                    NRP :
                    <input type="text" name="nrp" required value="<?=$mhs['nrp']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Email :
                    <input type="text" name="email" required value="<?=$mhs['email']; ?>">
                </label>
            </li>
            <li>
               <label>
                    Jurusan :
                    <input type="text" name="jurusan" required value="<?=$mhs['jurusan']; ?>">
                </label>
            </li>
            <li>
                <button type="submit" name="Ubah">Ubah!</button>
            </li>
        </ul>
    </form>
</body>

</html>