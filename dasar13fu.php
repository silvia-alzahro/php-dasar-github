<?php
function perkenalan($nama, $salam="assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan,nama saya ".$nama." <br/>";
    echo "Senang berkenalan dengan anda</br>";
}
perkenalan("Silvia", "Hi");
echo "<hr>";

$saya = "tasya";
$ucapansalam = "Selamat Pagi";

perkenalan($saya);
?>