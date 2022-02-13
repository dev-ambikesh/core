<?php

use Car as GlobalCar;

/**
 * What is Static property and methods 
 * Static Property :- Static property are associated with the class not with the "instance" , Let say if you're creating any object and you want to access the "static" property you won't be access the same they'll be change as per the instance of the class.
 * 
 * Self Keyword :- You can Access the static methods and property with the "self" keyword or you can use class name itself;
 * 
 * Example :- Here i'm going to create a variable called counter which'll increase after the creating instance , "Basically counter on the instance creation".
 */
class Car{
  private $color = 'red';
  private $weight = 1000;
  public static $availableColors = [
      'red','green','yellow','blue'
  ];

  static $counter = 0;
  public $count = 0;
  public function __construct()
  {
    self::$counter++;
    $this->count++;
  }
  public static function getAvailableColors(){
    return self::$availableColors;
  }

}

$myCar = new Car();
echo Car::$counter .' '.$myCar->count . '<br>';
$myCar = new Car();
echo Car::$counter . ' ' . $myCar->count . '<br>';
//Output will be 
// 1 1 
// 2 1
echo "<pre>";
var_dump(Car::$availableColors);
//Output will be available colors;


?>