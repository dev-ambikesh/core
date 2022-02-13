<?php 

class Car {
  public $color = 'red';
  public $weight;
  public $year;

}

$car = new Car();
$car2 =  clone $car;
$car2->color = 'green';
echo "<pre>";
var_dump($car, $car2 );

?>