<?php 
//Ryan fany fadlyllah AR
//203040129
//kelas D
// prodi teknik informatika
// pratikum pw pertemuan 2
//https://github.com/RyanfanyfadlyllahAR/pw_2021_203040129
 ?>

 <?php 
function gantiStyle($tulisan, $style1, $style2){
	return "<div class=\"$style1 $style2\">$tulisan</div>";
}
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2a</title>
    
    <style>
    .ubahTulisan{
        font: italic bolder 28px Arial;
        color: #8c782d;
    }
    .wrapper{
        border: 1px solid black;
        box-shadow: 0 0 10px rgba(0, 0, 0, 20);
        width: fit-content;
        padding: 10px;
    }
    </style>
</head>
<body>
    <?php echo gantiStyle("Selamat datang di praktikum PW", "ubahTulisan", "wrapper") ?>
</body>
</html>