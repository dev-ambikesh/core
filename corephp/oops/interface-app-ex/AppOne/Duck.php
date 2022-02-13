<?php

require 'flyingInterface.php';
require 'SwimInterface.php';

class Duck implements flyingInterface , SwimInterface{
  public function fly() : bool
  {
    echo " Hi I'm Duck I can fly <br>";
    return true;
  }
  public function Swim()
  {
    echo " Hi I'm  Duck and I can Swim <br>";
    
  }
}
?>