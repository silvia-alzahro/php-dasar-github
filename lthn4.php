<!DOCTYPE html>
<html>
    <head>
        <title>Input bilangan</title>
    </head>
    <body>
        <h2>Input Bilangan</h2>
        <form method= "POST" action="">
        <tr>
        Masukkan Banyaknya Bilangan<input type='text' name='n'/>
                <input type="submit" name="submit" value='Submit'/>
                </tr><br>
</form>
</body>
</head>
</html>


<?php
echo "<br>";
if (isset($_POST['submit'])){
    $n =$_POST['n'];
    echo "<form method='post' action='hsl3.php'>";
    echo "<h3>input bilangan</h3><br>";
    for ($i=0;$i<= $n-1;$i++)
    {
        echo "Bil ke-".($i+1)." <input type='text' name='data".$i."' /><br>";
    }
    echo "<input type='submit' name='submit' value='Submit'/>";
    echo "<input type='hidden' name='n' value='".$n."'/>";
    echo "</form>";
}
?>