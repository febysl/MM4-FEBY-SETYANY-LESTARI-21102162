<!DOCTYPE html>
<html>
<body>

<?php
$a = 5;
$b = 5.34;
$c = "25";
$d = 10.365;
$e = acos(8);
$f = "5985";
$g = "59.85" + 100;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>"; 
var_dump($d);
echo "<br>"; 
var_dump($e);
echo "<br>"; 
var_dump(is_numeric($f));
echo "<br>"; 
var_dump(is_numeric($g));
echo "<br>"; 

// Cast float to int
$h = 23465.768;
$int_cast = (int)$h;
echo $int_cast;
echo "<br>";

// Cast string to int
$i = "23465.768";
$int_cast = (int)$i;
echo $int_cast;

?> 



</body>
</html>
