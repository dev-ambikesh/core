<?php 
require 'flyingInterface.php';

class Bird implements flyingInterface{
  public function fly() : bool
  {
    echo "Hello I'm Bird and I can fly <br>";
    return true;
  }
}