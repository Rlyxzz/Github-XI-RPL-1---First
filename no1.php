<?php
echo "While<br>";
echo "Contoh 1<br>";
$x = 1; 
 
while($x <= 10) {
    echo "Angka $x <br>";
    $x++;
} 
echo "<br>";
echo "Contoh 2<br>";
$i=1;
while ($i <= 10)
{
  echo "$i";
  echo "<br />";
  $i=$i+1;
}
echo "<br>";
echo "Contoh 3<br>";
$i=100;
while ($i >= 0)
{
   echo "$i";
   echo "<br />";
   $i-=8;
}
echo "<br>";
echo "DoWhile<br>";
echo "Contoh 1<br>";
$x = 1;
do {
    echo "Do While: $x <br>";
    $x++;
} while($x <= 5);
echo "<br>";
echo "Contoh 2<br>";
$i=1000;
do
{
  echo "$i";
  echo " Akan tampil di browser<br>";
  $i=$i+1;
} while ($i <= 10);
echo "<br>";
echo "Contoh 3<br>";
$i=1;
do
{
  echo "$i";
  echo "<br />";
  $i=$i+1;
} while ($i <= 10);
?>