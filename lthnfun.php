<!DOCTYPE html>
<html>
    <head>
        <title>Input bilangan</title>
    </head>
    <body>
        <h2>Input Bilangan</h2>
        <form method= "POST" action="">
        <tr>
            <td>Masukkan Jari-jari Lingkaran</td>
        <input type='number' name='jari'/>
</tr>
                <input type="submit" name="submit" value='Submit'/>
</form>

 
<?php
if (isset($_POST['submit'])) {
    function luas($jari, $phi=3.14){
        $jari **= 5;
        $luas = $jari * $phi;
        return $luas;
}
function keliling($jari, $phi=3.14){
    $keliling = ($jari * $phi) * 5;
    return $keliling;
}
echo "jari-jari= " . $_POST['jari'];
echo "luas lingkaran= " . luas($_POST['jari']);
echo "keliling lingkaran= " . keliling($_POST['jari']);
}
?>
</body>
</head>
</html>