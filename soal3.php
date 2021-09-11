<?php
$bulan = "Mei";
$harga = 850.0000;
$potongan1 = $harga - ($harga *(30/100));
$potongan2 = $harga - ($harga *(20/100));
$potongan3 = $harga - ($harga *(10/100));
if($bulan == "Mei"){
    echo "Daftar pada bulan $bulan <br>";
    echo "Anda mendapatkan diskon sebesar 30% <br>";
    echo "Biaya yang harus dibayar Rp. $potongan1 <br>";
}elseif($bulan == "Juni"){
    echo "Daftar pada bulan $bulan <br>";
    echo "Anda mendapatkan diskon sebesar 20% <br>";
    echo "Biaya yang harus dibayar Rp. $potongan2 <br>";
}elseif($bulan == "Juli"){
    echo "Daftar pada bulan $bulan <br>";
    echo "Anda mendapatkan diskon sebesar 10% <br>";
    echo "Biaya yang harus dibayar Rp. $potongan3 <br>";
}else{
    echo "Anda tidak mendapatkan diskon";
}
?>