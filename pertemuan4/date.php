<?php 
  //date
 // untuk menanpilkan tanggal dengan format tertentu
 //echo date("l,d-M-Y");

// Time
// UNIX Timestamp / EPOCH TIME
// DETIK YANG SUDAH BERLALU SEJAK 1 JANUARI 1970
//echo time();
//echo date("l", time()-60*60*24*100)

//mktime
// membuat sendiri detik
// mktime (0,0,0,0,0,0,)
// jam, menit, detik, bulan, tanggal, tahun
//echo date("l",mktime(0,0,0,5,14,2002));


// strtotime
echo date ("l",strtotime("14 may 2002"));

 ?>