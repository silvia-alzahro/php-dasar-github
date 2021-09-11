<?php
$nilai = 1000;
if($nilai <= 90){
    $grade = "A";
}elseif($nilai > 80){
    $grade = "B";
}elseif($nilai > 75){
    $grade = "C";
}elseif($nilai > 60 ){
        $grade = "D";
}elseif($nilai < 60){
    $grade = "E";
}else{
    $grade = "nilai tidak ada";
}
echo "nilai=$nilai<br>";
echo "grade=$grade";
?>