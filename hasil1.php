<?php
if (isset($_POST['simpan'])){
    $nama=$_POST['nama'];
    $studio=$_POST['studio'];
    $jenis=$_POST['jenis'];
    $tiket=$_POST['tiket'];
    $harga1= 500000;
    $harga2= 250000;
    $jumlah=$tiket * $harga1;
    $total=$tiket * $harga2;

{
    echo "Nama Pemesan : $nama<br>";
    echo "Kode studio : $studio<br>";
}
if ($studio == "1"){
    echo "bintang tamu : opick <br>";
}else if($studio == "2"){
    echo "bintang tamu : raihan <br>";
}else{
    echo "tidak ada bintang tamu : ";
}
if($jenis == "VIP"){
    $harga1= 500000;
    echo "jenis : $jenis<br>";
    echo "harga : $harga1<br>";
    echo "jumlah beli : $tiket<br>";
    echo "total : $jumlah<br>";
}else if($jenis == "Festival"){
    $harga2=250000;
    echo "jenis : $jenis<br>";
    echo "harga : $harga2<br>";
    echo "jumlah beli : $tiket<br>";
    echo "total : $total <br>";
}else{
    echo "Pilihan tidak tersedia";
}
}
?>

<html>
<body>
<form method = "POST" action= "latihan1.php">
<a href="latihan1.php">Input Kembali</a>
</body>
</html>