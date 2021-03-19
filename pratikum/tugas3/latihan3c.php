<?php 
//Ryan fany fadlyllah AR
//203040129
//https://github.com/RyanfanyfadlyllahAR/pw_2021_203040129
//praktikum pw jumat jam 13:00-14:00
?>
<?php
$nama = [
    "Cristiano Ronaldo" => "Juventus", 
    "Lionel Messi" => "Barcelona", 
    "Luca Modric" => "Real Madrid", 
    "Mohammad Salah" => "Liverpool",
    "Neymar Jr" => "Paris Saint Germain",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan", 
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c</title>
    <style>
        .kotak {
            border: 2px solid black;
            width: 50%;
            padding: 10px;
        }
    </style>
</head>
<body>
        <div class="kotak">
        <p><b>Daftar pemain bola terkenal dan clubnya</b></p>
        <table>
            <?php foreach ($nama as $n => $klub) : ?>
                <td><b><?= $n; ?></b></td>
                <td>:</td>
                <td><?= $klub; ?></td>
                <tr></tr>
            <?php endforeach; ?>
        </table>
        </div>
    
</body>
</html>