<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <h2>Data Siswa</h2>
            <table>
                <tr>
                    <td>Jumlah Siswa</td>
                    <td>:</td>
                    <td><input type="number" name="jumlah"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="Proses"></td>
                </tr>
            </table>
            <br>
        </form>

        <?php
        
        if(isset($_POST['proses'])){
            $jumlah = $_POST['jumlah'];
        
        ?>
        <form action="hasilarrayform.php" method="post">
            <table>
                <?php
                
                for($i = 1; $i<=$jumlah; $i++){
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Data Siswa Ke - <?= $i; ?></td>
                </tr>
                <tr>
                    <td>Nis</td>
                    <td>:</td>
                    <td><input type="text" name="nis[]" value=""></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama[]" value=""></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas[]" value=""></td>
                </tr>
                <tr>
                    <td>Nilai B.Indonesia</td>
                    <td>:</td>
                    <td><input type="text" name="bind[]" value=""></td>
                </tr>
                <tr>
                    <td>Nilai B.Inggris</td>
                    <td>:</td>
                    <td><input type="text" name="bing[]" value=""></td>
                </tr>
                <tr>
                    <td>Nilai Matematika</td>
                    <td>:</td>
                    <td><input type="text" name="mtk[]" value=""></td>
                </tr>
                <tr>
                    <td>Nilai Produktif</td>
                    <td>:</td>
                    <td><input type="text" name="prd[]" value=""></td>
                </tr>
                <?php
                }
                ?>

                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
                
                
            </table>
        </form>
        <?php
        }
        ?>
    </center>
</body>
</html>