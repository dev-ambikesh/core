<?php 
/**
 * User : Ambikesh Time 3am 8 Aug 2021
 */
class Car{
  private $color = 'Default Color';
  public $weight;
  private $year;
  private $availableColor = [
    'red','greed','blue','yellow'
  ];

  public function SetYear($year){
    $this->year = $year;
  }

  public function GetYear(){
    return $this->year;
  }
  public function SetColor($color){
    if(in_array($color , $this->availableColor )){
      return $this->color = $color;
    }
  }
  public function GetColor(){
    return $this->color;
  }
}

$myCar = new Car();
$myCar->SetColor('red');
echo $myCar->GetColor();
// $myCar->color = 'red';
// $myCar->SetYear(2021);
// echo $myCar->GetYear();

?>