<?php 

// function perkenalan($nama, $salam="Assalamuaikum"){
//     echo $salam . ", ";
//     echo "Perkenalkan, nama saya  ".$nama. "<br/>";
//     echo "Senang berkenalan dengan Anda <br/>";
// }

// perkenalan("Hamdana", "Halo");

// echo "<br/>";

// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";

// perkenalan($saya);

function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam. ", ";
    echo "Perkenalkan, nama saya ". $nama."<br/>";
    echo "Umur saya adalah ". hitungUmur(2005, 2024). " tahun <br/>";
    echo "Senang berkenalan dengan anda";
}

perkenalan("Doni");
?>