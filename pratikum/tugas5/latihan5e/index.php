<?php 
// Melakukan dengan file php lainnya
require 'php/function.php';
// Melakukan query
  $mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 4C</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
 <div class="container">
  <?php foreach ($mahasiswa as $mhs) : ?>
    <p class="nama">
      <a href="php/detail.php?id=<?= $mhs['id'] ?>">
        <?= $mhs["nama"] ?>
      </a>
    </p>
  <?php endforeach; ?>
 </div>
</body>
</html>