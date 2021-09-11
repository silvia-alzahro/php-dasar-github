<?php
echo "1.Output Array Dengan Menggunakan perintah PRINT_R()";
$array= [];
$array[]='Indonesia';
$array[]='Malaysia';
$array[]='Singapura';
$array[]='Brunei Darussalam';
$array[]='Filipina';
echo'<pre>';
print_r($array);
?>

<?php
echo "2.Output Array Asosiatif<br>";
$negara = ["indonesia Jakarta",
            "Kuala Lumpur",
            "Singapura",
            "Bangkok",
            "Manila"
];
foreach($negara as $key => $value){
echo "ibukota $key";
echo "adalah $value";
echo '<br>';
}
?>