<!DOCTYPE html>
<html>
    <head>
        <title>Form Sederhana</title>
    </head>
    <body style="background-color:#B0E0E6">
        <h2>Hotel Bintang 5</h2>
        <form method= "POST" action="hsl2.php">
            <table>
                <tr>
                    <td>Tanggal Menginap</td>
                    <td>:</td>
                    <td><input type='date' name='tanggal'required></td>
                </tr>
                <tr>
                   <td>Nama Tamu</td>
                    <td>:</td>
                    <td><input type='text' name='nama'></td>
                </tr>
                <tr>
                    <td>No Identitas</td>
                    <td>:</td>
                    <td><input type='text' name='no'></td>
                </tr>
                <tr>
                    <td>Tipe Kamar</td>
                    <td>:</td>
                    <td><select name="tipe">
                    <option value="tipe">Pilih</option>
               <option value="superior">superior </option>
             <option value="deluxe">deluxe</option>
             <option value="junior suite">junior suite</option>
             </td>
            </select>
                </tr>
                <tr>
                    <td>Durasi Menginap</td>
                    <td>:</td>
                    <td><input type='text' name='durasi'></td>
                </tr>
                 <tr>
                    <td></td>
                    <td></td>
                    <td><input type='submit' name="simpan" value='Kirim'>
                    <input type='submit' name="Batal" value='Batal'></td>
                </tr>
            </table>
        </form>
    </body>
</html>
