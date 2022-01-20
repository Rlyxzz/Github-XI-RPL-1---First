<?php
// membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

// menampilkan isi array
echo"Menambahkan array<br>";
echo"<br>";
echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang[2]."<br>";
$barang[3] = "Papan Tulis";
$barang[] = "Meja";
echo ($barang[3]."<br>");
echo ($barang[4]."<br>");

//menghapus buku tulis


unset($barang[2]);


echo"<hr>";
echo"Menghapus array<br>";
echo "<pre>";
print_r($barang);
echo "</pre>";
?>