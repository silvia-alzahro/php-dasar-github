<!DOCTYPE html>
<html" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1 Fungsi</title>
</head>
<body>
    <fieldset>
        <legend>Menampilkan Biodata</legend>
        <form action ="" method="POST">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td> 
                <td><input type="text" name="nama" ></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type = "radio" name = "jk" value = "Laki-Laki">Laki-Laki
                <input type = "radio" name = "jk" value = "Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type = "date" name = "tanggal"></td>
            </tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name = "agama">
                    <option value = "">--Pilih Agama--</option>
                    <option value = "Islam">Islam</option>
                    <option value = "Budha">Budha</option>
                    <option value = "Hindu">Hindu</option>
                    <option value = "Kristen">Kristen</option>
                    <option value = "Khonghucu">Khonghucu</option>
                    <option value = "Ateis">Ateis</option>
                </select></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name = "alamat"></textarea></td>
            </tr>
                <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type = "checkbox" name = "hobi[]" value = "Main Game">Main Game
                <input type = "checkbox" name = "hobi[]" value = "Membaca">Membaca
                <input type = "checkbox" name = "hobi[]" value = "Traveling">Traveling
                <input type = "checkbox" name = "hobi[]" value = "Memasak">Memasak
                <input type = "checkbox" name = "hobi[]" value = "Menulis">Menulis</td>
            </tr>
                <tr>
                <td></td>
                <td></td>
                <td><input type = "submit" value = "Simpan" name = "simpan">
                <input type='submit' name="Batal" value='Batal'></td></td>
            </tr>
            </table>
        </form>
</fieldset>
    </body>
</html>