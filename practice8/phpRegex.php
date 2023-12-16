<!DOCTYPE html>
<html>
<body>

<?php
//Using preg_match()
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); 
echo "<br>"; 

//Using preg_match_all()
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); 
echo "<br>"; 

//Using preg_replace()
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); 
echo "<br>"; 

//Grouping
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str); 
?>


</body>
</html>
