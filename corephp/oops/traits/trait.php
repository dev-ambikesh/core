<?php

/**
 * What is traits :- If you can copy and past the code of one class to another ( and we've all done this , even though we try not to because its code duplication ) then you have candidate for traits.
 * 
 * Train can solve the problem of Mutliple inheritance in php Oops.
 * 
 */

 trait FlyableTrait{
  // public $a = 10;
  // public function fly(){
  //   echo "Im flying <br>";
  // }

    abstract public function fly();
    public function hello(){
      echo "Hello I can fly <br>";
    }
 }

 trait EngineTrait{
    public function hello(){
      echo "Hello I'm EngineTrait <br>";
    }
 }

 class Plain {
   use FlyableTrait , EngineTrait{
     FlyableTrait::hello insteadOf EngineTrait;
     EngineTrait::hello as engineHello;
   }

   public function fly(){
     echo "I'm flying at the speed of 800 km/h ";
   }
 }

 class Helicopter{
  use FlyableTrait , EngineTrait;
  public function fly(){
    echo "I'm flying at the speed of 300 km/h";
  }
 }

//  $plain = new Plain();
//  $plain->fly();
//  $plain->hello();
 
// $helicopter = new Helicopter();
// $helicopter->fly();
// $helicopter->hello();

 $plain = new Plain();
 $plain->hello();
 $plain->engineHello();


?>