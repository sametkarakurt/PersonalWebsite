<?php

    $vt_sunucu = "localhost";

    $vt_kullanici = "root";
    $vt_sifre = "";

    $vt_adi = "sametkarakurt";

    $baglan = mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);

    if(!$baglan){

        die("Veritabanı baglanti islemi basarisiz".mysqli_connect_error());

    }

    


?>