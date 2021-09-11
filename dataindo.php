<?php

    $url = "https://api.kawalcorona.com/indonesia/";
    // persiapkan curl / init curl
    $ch = curl_init();
    // set url
    curl_setopt($ch, CURLOPT_URL, $url);
    // return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // $output contains the output string
    $dataCovidin = curl_exec($ch);
    // tutup curl
    curl_close($ch);
    // menampilkan hasil curl
    // echo $output;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <nav>
            <a href="data.php">Data Covid</a> |
            <a href="dataindo.php">Data Indonesia</a> |
            <a href="datapro.php">Data Covid Provinsi</a> |
            <a href="globaldat.php">Global Data Positif</a> |
            <a href="globaldatse.php">Global Data Sembuh</a> |
            <a href="globaldatme.php">Global Data Meninggal</a> |
        </nav>
    </center>
    <fieldset>
        <legend>Data Covid Indonesia</legend>
        <table border=1>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
            </tr>
            <?php
$no = 1;
$data = json_decode($dataCovidin);
foreach ($data as $covid){
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $covid->name; ?></td>
                <td><?php echo $covid->positif; ?></td>
                <td><?php echo $covid->sembuh; ?></td>
                <td><?php echo $covid->meninggal; ?></td>
            </tr>
            <?php
}?>
        </table>
    </fieldset>
</body>
</html>