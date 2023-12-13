<?php
 // Membuat Fungsi
 function perkenalan($nama ,$salam="Assalamualikum"){
    echo $salam.",";
    echo "Perkenalan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
 }

 // Memanggil Fugsi yang sudah di buat
 perkenalan("Jarwo", "Hi");

 echo "<hr/>";

  $saya =  "Bambang";
  $ucapanSalam = "Selamat Pagi";

  //memanggil lagi tanpa memanggil parameter salam
  perkenalan($saya);
?>