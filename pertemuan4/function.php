<?php 
function salam($waktu ="Datng", $nama="Admin!") {
	return "selamat $waktu, $nama!";
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan Function</title>
 </head>
 <body>
 	 <h1><?= salam("pagi", "Ryan fany fadlyllah AR") ?></h1>
 </body>
 </html>