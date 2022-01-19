<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body style="background-color : white;">
    <h2 align="center"></h2>
    <form action="" method="post">
        <table align="center">
            <tr>
                <td></td>
                <td></td>
                <td>No 1</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>No 2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>No 3</td>
            </tr>
            <tr>
                <td>Pilih</td>
                <td>:</td>
                <td><input type="number" name="pilih"></td>
            </tr>
            <tr>
                <td>Masukkan Angka</td>
                <td>:</td>
                <td><input type="number" name="masukkan"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="kirim" value="KIRIM"></td>
            </tr>
        </table>
    </form>
<?php 
if (isset($_POST['kirim'])) {
    $pilih = $_POST['pilih'];
    $angka = $_POST['masukkan'];

    if($pilih == 1){
        for($f = 1; $f <= $angka; $f++){
            for($d = 1; $d <= $f; $d++){
                echo "$d&nbsp";
            }
            echo "<br>";
        }
    }
    if($pilih == 2){
        for($a = $angka; $a>=1; $a--){
            for($b=$angka; $b>$a; $b--){
                echo "&nbsp";
            }
            for($c=1; $c<=$a; $c++){
                echo "&nbsp$c";
            }
            echo "<br>";
        }
    }
    if($pilih == 3){
        for($f = $angka; $f >= 1; $f--){
            for($d = $angka; $d >= $f; $d--){
                echo "$d&nbsp";
            }
            echo "<br>";
        }
    }
}
?>
</body>
</html>