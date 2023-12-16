<!DOCTYPE html>
<html>
<body>

<?php 
$a = "Hello world!";
$b = 'Hello world!';
$c = 5985;
$d = 10.365;
$e = true;
$cars = array("Volvo","BMW","Toyota");
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  $f = "Hello world!";
  $f = null;
  $change = 5;
  $change = "Hello";

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
var_dump($cars);
echo "<br>"; 
var_dump($myCar);
echo "<br>"; 
var_dump($f);
echo "<br>"; 
var_dump($change);
echo "<br>"; 


?>


</body>
</html>
