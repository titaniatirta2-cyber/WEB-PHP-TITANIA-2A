<?php
// OPERATOR BITWISE
//Operator bitwise digunakan untuk melakukan operasi pada bilangan biner. Operator ini bekerja pada level
 
$x = 60;
$y = 13;
 
// bitwise AND
$z = $x & $y;
echo "$x & $y = $z";
echo "<br>";
 
// bitwise OR
$z = $x | $y;
echo "$x | $y = $z";
echo "<br>";
 
// bitwise XOR
$z = $x ^ $y;
echo "$x ^ $y = $z";
echo "<br>";
 
// Shift Left
$z = $x << $y;
echo "$x << $y = $z";
echo "<br>";
 
// Shift Right
$z = $x >> $y;
echo "$x >> $y = $z";
echo "<br>";
 
?>