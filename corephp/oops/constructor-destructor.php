<?php
/**
 * User : Ambikesh same Date and times.
 * 
 */

class Car{
  private $color = 'red';
  private $weight = 1000;

  public function __construct( $color = 'green' , $weight = 1000 )
  {
    $this->color = $color;
    $this->weight= $weight;
  }
  public function getColors(){
    return $this->color;
  }

  public function __destruct()
  {
    echo "Im distroyed : ". $this->color .  '<br>';
  }

}

$myCar = new Car( 'green' , 2000 );
$myCar2 = new Car( 'white' , 1000 );
echo $myCar->getColors() . '<br>';
echo $myCar2->getColors() . '<br>';
unset($myCar);
sleep(2);


?>