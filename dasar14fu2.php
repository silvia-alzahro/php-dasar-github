<?php
function hitungumur($tahun_lahir, $tahun_sekarang){
    $umur = $tahun_sekarang -$tahun_lahir;
    return $umur;
}
function perkenalan($nama, $salam="assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan,nama saya ".$nama."<br/>";
    echo "Saya berusia ".hitungumur(2004,2021)." tahun<br/>";
    echo "Senang berkenalan dengan anda</br>";
}
perkenalan("Silvia");
?>