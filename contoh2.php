<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <style>
        
    </style>
</head>
<body>
    

    <h2 align="center">Wisata Yogyakarta</h2>
    <center>
        <p>1.Bukit Bintang/Rp10.000</p>
        <p>2.Pantai Sandranan/Rp15.000</p>
        <p>3.Candi Borobudur/Rp50.000</p>
        <p>4.Candi Prambanan/Rp50.000</p>
        <p>5.Keraton Yogyakarta/Rp5.000</p>
        <p>6.Malioboro/Rp5.000</p>
        <p>7.Cafe Pendopo Lawas</p>
        <p>8.Goa Pindul/Rp5.000</p>
    </center>
    <form action="" method="post">
        <table align="center"> 
            <tr>
                <td>Tanggal Gaji</td>
                <td>:</td>
                <td><input type="date" name="tanggal"></td>
            </tr>  
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><select name="jabatan" id="">
                    <option value="Direktur">Direktur</option>
                    <option value="Manager">Manager</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="OB">OB</option>
                </select></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td><select name="pendidikan" id="">
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="S1">S1</option>
                </select></td>
            </tr>
            <tr>
                <td>Lembur</td>
                <td>:</td>
                <td><input type="number" name="lembur">Hari/Rp. 20.000</td>
            </tr>
            <tr>
                <td>Potongan</td>
                <td>:</td>
                <td><input type="number" name="potongan"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="kirim" value="KIRIM"></td>
                <td><button><a href="soal3.php">Soal Selanjutnya</a></button></td>
            </tr> 
        </table>
    </form>

</body>
</html>
<?php
if(isset($_POST ['kirim'])){
    $bendahara = $_POST ['bendahara'];
    $pekerja = $_POST ['pekerja'];
    $jenis = $_POST ['jk'];
    $tanggal = $_POST ['tanggal'];
    $jabatan = $_POST ['jabatan'];
    $pendidikan = $_POST ['pendidikan'];
    $lembur = $_POST ['lembur'];
    $potongan = $_POST ['potongan'];

    if ($jabatan == "Direktur"){
        $gaji = 10000000;
    }elseif($jabatan == "Manager"){
        $gaji = 7500000;
    }elseif($jabatan == "Karyawan"){
        $gaji = 5000000;
    }elseif($jabatan == "OB"){
        $gaji = 2500000;
    }

    if ($pendidikan == "SD"){
        $tunjangan = 200000;
    }elseif ($pendidikan == "SMP"){
        $tunjangan = 500000;
    }elseif ($pendidikan == "SMA"){
        $tunjangan = 1000000;
    }elseif ($pendidikan == "S1"){
        $tunjangan = 1500000;
    }

    $vakasi = $lembur * 20000;
    $total = ($gaji + $tunjangan + $vakasi) - $potongan;
    echo "<center>";
    echo "<br>";
    echo "<h2>Struk Gaji Karyawan</h2>";
    echo "<hr>";
    echo "<table>";
    echo "<tr>";
    echo "<td></td><td></td><td><p align=right>Tanggal : $tanggal</p></td> ";
    echo "</tr>";
    echo "<tr>";
    echo "<td><h3>Gaji Pokok</h3></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nama Karyawan </td><td>:</td><td>$pekerja</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jenis Kelamin </td><td>:</td><td>$jenis</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Pendidikan Terakhir </td><td>:</td><td>$pendidikan</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jabatan </td><td>:</td><td>$jabatan</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Gaji </td><td>:</td><td>Rp. $gaji</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><h3>Tunjangan</h3></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tunjangan Pendidikan </td><td>:</td><td>Rp. $tunjangan</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Vakasi Lembur </td><td>:</td><td>Rp. $vakasi</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><h3>Potongan</h3></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Potongan </td><td>:</td><td>Rp. $potongan</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><h3>Total Gaji</h3></td><td>:</td><td>Rp. $total</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td></td><td></td><td><p align=right>Bendahara : $bendahara</p></td> ";
    echo "</tr>";
    echo "</table>";
    echo "</center>";
}