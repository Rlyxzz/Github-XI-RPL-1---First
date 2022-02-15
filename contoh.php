<?php
// Membuat array associative
$nama_buah = array("Pepaya" => "Pepaya", "Nangka" => "Nangka", "Semangka" => "Semangka", "Durian" => "Durian", "Pisang" => "Pisang");

//Looping array menggunakan FOREACH
echo "<h2>Looping menggunakan foreach :</h2>";
foreach ($nama_buah as $val => $val_value) {
    echo "<b>Elemen : ".$val."</b><i> Value : ".$val_value."</i><br>";
}

//Looping menggunakan FOR
$nama_orang["rani"] = "Rani";
$nama_orang["devi"] = "Devi";
$nama_orang["yuli"] = "Yuli";
$nama_orang["andin"] = "Andin";
$nama_orang["desi"] = "Desi";

echo "<h2>Looping menggunakan for :</h2>";
$keys = array_keys($nama_orang);
$round = count($nama_orang);

for ($i = 0; $i < $round; ++$i) {
    echo '<b>Elemen : '.$keys[$i].'</b><i> Value : '.$nama_orang[$keys[$i]].'</i><br>';
}

echo "<h2>Penggunaan top dan bottom didalam array assosiative</h2>";
$countries = array(
    'CAD' => 'Canada',
    'TWN' => 'Taiwan',
    'USA' => 'United States',
    'GBR' => 'United kingdom',
    'GER' => 'Germany'
);

print "Original\n";
print_r($countries);

print "Move Taiwan to the top\n";
move_to_top($countries, 'TWN');
print_r($countries);

print "Move United States to the bottom\n";
move_to_top($countries, 'USA');
print_r($countries);

function move_to_top(&$array, $key) {
    $temp = array($key => $array[$key]);
    unset($array[$key]);
    $array = $temp + $array;
}

function move_to_bottom(&$array, $key) {
    $value = $array[$key];
    unset($array[$key]);
    $array[$key] = $value;
}
?>