<html>
<head>
<title>Segitiga Bintang Ganjil Genap </title>
</head>
<body style="background-color:#B0E0E6">
	<form action = "" method="post">
		<table>
			<tr>
				<td>
					<label for="nilai">Masukkan Bintang</label>
				</td>
				<td>
					<input type="text" name="nilai">
				</td>
				<td>
				<button type="Submit">submit</button>
			</td>
			</tr>
			</table>
		</form>
	</body>
	</html>

	<?php
    if(isset($_POST['nilai'])){
	$nilai = $_POST['nilai'];
    echo "Program segitiga bintang siku-siku <br> ";
    $star = "$nilai" ;
	for($r = $star; $r > 0; $r--){
		for($l = $star; $l >= $r; $l--){
			echo "*";
		}
		echo "<br>";
	}
    echo "<br>";
    echo "Program Ganjil Genap dengan menggunakan For <br>";
    echo bilangan($nilai);
}
function bilangan($nilai){
$genap = 0;
for($i=1; $i <= $nilai; $i++){
	if($i%2==0){
		echo $i." <br>  ";
		$genap++;
	}
}
}
?>