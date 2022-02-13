<?php

use Car as GlobalCar;

/**
 * What is constant in php OOp 
 * Constant :- Constant won't be going to change ever once that declared in the class , you can access the constant with associated class not with object , do the same with on the instace of the object
 */
// class Math{
//   const PI = 3.14;
//   public $cal;
//   public function AddSomthing( $n ){
//     $this->cal = 3.14+$n;
//   }
//   public function GetAddedValue(){
//     return $this->cal;
//   }
// }

// $math = new Math();
// $math->AddSomthing(5);
// echo $math->GetAddedValue();
// echo Math::PI;

class Car{
  public $color;
  public $manufacturer;
  const MANUFACTURER_BMW = 'BMW';
  const MANUFACTURER_TESLA = 'TESLA';
  const MANUFACTURER_MERCEDES = 'MERCEDES';
  const COLOR_RED = 'RED';
  const COLOR_GREEN = 'GREEN';
  const COLOR_BLUE = 'BLUE';

  public function __construct( $color , $manufacturer )
  {
    $this->color = $color;
    $this->manufacturer = $manufacturer;  
  }



}
$myCar = new Car( Car::COLOR_GREEN , Car::MANUFACTURER_BMW );
var_dump($myCar);

?>