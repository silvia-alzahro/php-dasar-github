<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <h2>Hotel Bintang 5</h2>
        <?php
        if (isset($_POST['simpan'])){
            $nama=$_POST['nama'];
            $tanggal=$_POST['tanggal'];
            $identitas=$_POST['no'];
            $tipe=$_POST['tipe'];
            $durasi=$_POST['durasi'];
            $superior= 850000;
            $deluxe= 950000;
            $juniorsuite= 14000000;
            $total1=$superior * $durasi;
            $total2=$deluxe * $durasi;
            $total3=$juniorsuite * $durasi;
            $diskon1= 1700000;
            $diskon2= 250000;

        echo "<tr>";
        echo "<td>Nama Tamu</td>";
        echo "<td>:</td>";
        echo "<td>$nama</td>";
        echo "</tr>";
        echo "<br>";
        
        echo "<tr>";
        echo "<td>tanggal menginap</td>";
        echo "<td>:</td>";
        echo "<td>$tanggal</td>";
        echo "</tr>";
        echo "<br>";

        echo "<tr>";
        echo "<td>no identitas</td>";
        echo "<td>:</td>";
        echo "<td>$identitas</td>";
        echo "</tr>";
        echo "<br>";

        echo "<tr>";
        echo "<td>Durasi menginap</td>";
        echo "<td>:</td>";
        echo "<td>$durasi</td>";
        echo "</tr>";
        echo "<br>";
        }

        if ($tipe == 'superior'){
            $total1 = $durasi * $superior;
            echo "Total Yang Harus Dibayar = $total1";
        }elseif($tipe == 'deluxe'){
            $total2 = $durasi * $deluxe;
            echo "Total Yang Harus Dibayar = $total2";
        }else{
            $total3 = $durasi * $juniorsuite;
            echo "Total Yang Harus Dibayar = $total3";
        }
        if ($total1 >= 1700000 && $total1 <= 250000){
            $diskon1= 0.15 * $total1;
            $total1= $total1 - $diskon1;
            echo "<br>";
            echo "Anda mendapatkan diskon sebesar 15%<br>";
            echo "Maka harus membayar sebesar $total1";
        }elseif ($total2 >= 250000){
            $diskon2= 0.25 * $total2;
            $total2= $total1 - $diskon1;
            echo "<br>";
            echo "Anda mendapatkan diskon sebesar 25%<br>";
            echo "Maka harus membayar sebesar $total2";
        }else{
            echo "<br>";
            echo "Tidak ada diskon";
        }
?>