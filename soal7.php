<?php
echo "Mengubah Celcius Menjadi Kelvin,Fahrenheit,Reamur<br>";
$suhu= 10;
$konversi= "reamur";
$reamur= 4/5 * $suhu;
$fahrenheit= 9/5 * $suhu + 32;
$kelvin= $suhu + 273;

if ($konversi == "reamur"){
    echo "Hasil konversi ke reamur : $reamur";
}elseif ($konversi == "fahrenheit"){
    echo "Hasil konversi ke fahrenheit : $fahrenheit";
}elseif ($konversi  == "kelvin"){
    echo "Hasil konversi ke reamur : $kelvin";
}else{
    echo "Tidak Memilih Suhu";
}
?>