<!DOCTYPE html>
<html>
    <head>
        <title>Form Sederhana</title>
    </head>
    <body style="background-color:#B0E0E6">
        <h2>Konser Amal Assalaam Bahagia</h2><hr>
        <form method= "POST" action="hasil1.php">
            <table>
                <tr>
                    <td>Nama Pemesan</td>
                    <td>:</td>
                    <td><input type='text' name='nama'></td>
                </tr>
                <tr>
                   <td>Kode Studio</td>
                    <td>:</td>
                    <td><select name="studio">
               <option value="1">Studio 1 </option>
             <option value="2">Studio 2</option>
             </td>
            </select>
                </tr>
                <tr>
                    <td>Jenis Kelas</td>
                    <td>:</td>
                    <td><input type='radio' name='jenis' value='VIP'/>VIP
                    <input type='radio' name='jenis' value='Festival'/>Festival 
                </tr>
                <tr>
                    <td>Jumlah Tiket</td>
                    <td>:</td>
                    <td><input type='text' name='tiket'></td>
                </tr>
                 <tr>
                    <td></td>
                    <td></td>
                    <td><input type='submit' name="simpan" value='Tampil'>
                    <input type='submit' name="Batal" value='Batal'></td>
                </tr>
            </table>
        </form>
    </body>
</html