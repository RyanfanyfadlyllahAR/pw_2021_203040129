<?php 
//Ryan fany fadlyllah AR
//203040129
//kelas D
// prodi teknik informatika
// pratikum pw pertemuan 2
//https://github.com/RyanfanyfadlyllahAR/pw_2021_203040129
 ?>

 <?php 
$jawabanIsset ="Isset adalah = digunakan untuk mengecek form  dari HTML, apakah form sudah di klik submit atau belum. <br><br>";
$jawabanEmpty = "Empty adalah = merupakan fungsi yang digunakan untuk untuk mengecek data atau variabel yang kosong.";
//sumber : https://carakode.com/penjelasan-fungsi-isset-pada-php/
//sumber : http://belajarmembikinwebsite.blogspot.com/2013/11/fungsi-empty-dan-trim-pada-php.html

function soal($style){
        return "<div class=\"$style\">" . $GLOBALS['jawabanIsset'] . $GLOBALS['jawabanEmpty'] . "</div>";
    }
  ?>

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2b</title>
    
    <style>
    .style{
        border: 1px solid black;
        padding: 10px;
        font-size: 20px;
        width: fit-content;
    }
    </style>
</head>
<body>
    <?php echo soal("style"); ?>
</body>
</html>