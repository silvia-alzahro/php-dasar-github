<?php
echo "Mengubah Detik Menjadi Hari,Jam,Menit,Detik<br>";
$waktu= 3600;
$konversi= "jam";
$hari= 86.400 * $waktu;
$jam=3.600 * $waktu;
$menit=60 * $waktu;
$detik=3600 * $waktu;

if ($waktu == "hari"){
    echo "Hasil konversi ke hari : $hari";
}elseif ($waktu == "jam"){
    echo "Hasil konversi ke jam : $jam";
}elseif ($waktu  == "menit"){
    echo "Hasil konversi ke menit: $menit";
}elseif ($waktu  == "detik"){
    echo "Hasil konversi ke detik: $detik";
}else{
    echo "Anda Tidak Memilih Waktu";
}
?>