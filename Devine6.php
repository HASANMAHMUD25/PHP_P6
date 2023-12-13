<?php
 // Membuat Fungsi
 function hitunganUmur($thn_lahir,$thn_sekarang){
     $umur =$thn_sekarang - $thn_lahir;
     return $umur;
    }

    function perkenalan($nama ,$salam="Assalamualikum"){
        echo $salam.", ";
        echo "Perkenalan, nama saya ".$nama."<br/>";
        // Manggil Fungsi lain
        echo "Saya berusia ". hitunganUmur(1994,2015) ."tahun<br/>";
        echo "Senang berkenalan dengan anda<br/>";
    }

 // memangil fungsi perkenalan
 perkenalan("Ardianta");
?>