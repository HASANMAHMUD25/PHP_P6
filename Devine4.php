<?php
 // Membuat Fungsi
 function perkenalan($nama ,$salam){
    echo $salam.",";
    echo "Perkenalan, nama saya Hasan".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
 }

  // Memanggil Fugsi yang sudah di buat
  perkenalan("Usro", "Hai");

  echo "<hr/>";

  $saya =  "Hasan";
  $ucapanSalam = "Selamat Pagi";

  //memanggil lagi
  perkenalan($saya, $ucapanSalam);
?>