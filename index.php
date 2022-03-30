<?php
$initial = '555';
//convert this octal string to a decimal number
$a = octdec($initial);
echo $a;
echo "\n";

//convert to radians from degrees
$b = deg2rad($a);
echo $b;
echo "\n";

//take the cosine of $b
$c = cos($b);
echo $c;
echo "\n";

//round to decimal places
$d = cos($c);
echo $d;
echo "\n";

//take the natural log
$e = log($d);
echo $e;
echo "\n";

//take the absolute value
$f = abs($e);
echo $d;
echo "\n";

//take the inverse cosine
$g = acos($f);
echo $g;
echo "\n";

//convert radians to degrees
$h = rad2deg($g);
echo $h;
echo "\n";

// floor the number
$i = floor($h);
echo  $i;
echo "\n";

//subtract 47
$j = $i - 47;
echo  $i;
echo  "\n";