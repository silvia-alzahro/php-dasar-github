<!DOCTYPE html>
<html>
<head>
<title>Cetak Nilai</title>
</head>
<style>
body{
 background-image:url("sv.jpg");
 width:"100px";
 height:"100px";
 display: block;
 margin-left: auto;
 margin-right: auto;
}
</style>
<body><h2 align="center">Form Cetak Nilai Siswa<br>SMK ASSALAAM BANDUNG<br>TAHUN 2021/2022</h2>
<form method = "POST" action= "hasilcetak.php">
<br>
<center>
<table border = "1" width="100px">
        <tr>
                <td bgcolor="#00FFFF">Nama</td>
                <td><input type = 'text' name = 'Nama'></td>
            </tr>   
        <tr>
                <td bgcolor="#0FFFF">Nis</td>
                <td><input type = 'text' name = 'Nis'></td>
            </tr>      
</table>
<center>
<table border="1">
<br>
<br>
<br>
<tr>
<td bgcolor="#FFEBCD">No</td>
<td bgcolor="#FFEBCD" colspan="10" align="center">Mata Pelajaran</td>
<td bgcolor="#FFEBCD">Nilai</td>
</tr>
<tr>
<td bgcolor="#FFEBCD" align="center">1</td>
<td bgcolor="#FFEBCD" colspan="10">Pendidikan Agama Islam</td>
<td><input type='text' name='nilai1'></td>
</tr>
<tr>
<td bgcolor="#FFEBCD" align="center">2</td>
<td bgcolor="#FFEBCD" colspan="10">PPKN</td>
<td><input type='text' name='nilai2'></td>
</tr>
<tr>
<td bgcolor="#FFEBCD" align="center">3</td>
<td bgcolor="#FFEBCD" colspan="10">Bahasa Indonesia</td>
<td><input type='text' name='nilai3'></td>
</tr>
<tr>
<td bgcolor="#FFEBCD" align="center">4</td>
<td bgcolor="#FFEBCD" colspan="10">Matematika</td>
<td><input type='text' name='nilai4'></td>
</tr>
<tr>
<td bgcolor="#FFEBCD" align="center">5</td>
<td bgcolor="#FFEBCD" colspan="10">Bahasa Inggris</td>
<td><input type='text' name='nilai5'></td>
</tr>
<tr>
<td bgcolor="#FFEBCD" align="center">6</td>
<td bgcolor="#FFEBCD" colspan="10">Produk Kreatif Dan Komunikatif</td>
<td><input type='text' name='nilai6'></td>
</tr>
<tr>
<td bgcolor="#FFEBCD" align="center">7</td>
<td bgcolor="#FFEBCD" colspan="10">Al Qur`an</td>
<td><input type='text' name='nilai7'></td>
</tr>
<tr>
<td bgcolor="#FFEBCD" align="center">8</td>
<td bgcolor="#FFEBCD" colspan="10">Bimbingan Konseling</td>
<td><input type='text' name='nilai8'></td>
</tr>
<tr>
<td bgcolor="#FFEBCD" align="center">9</td>
<td td bgcolor="#FFEBCD" colspan="10">Produktif RPL</td>
<td><input type='text' name='nilai9'></td>
</tr>
<tr>
<td bgcolor="#FFEBCD" align="center">10</td>
<td bgcolor="#FFEBCD" colspan="10">Produktif TKJ</td>
<td><input type='text' name='nilai10'></td>
</tr>
</table>
<br>
<br>
<td  bgcolor="#00FFFF"></td>
<input align="center" type="submit" name ="cetak" value='CETAK NILAI'></input>
</center>
</form>
</body>
</html>