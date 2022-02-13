<?php

/**
 * What is abstarction is :- Parent class is knows what should be done, but doesn't know how should be done , it let the child class to do the things , When you're preparing to create a child class which will inherit parent abstract class. you'll need to follow these 6 rule.
 * 
 * Rule1:- You'd need to redeclar all arrive methods in parent class
 * Rule2:- The argument to the given to the method should be same as for the parent abstract method.
 * Rule3:- Methods in child class can have additional argument with default argument.
 * Rule4:- Method signature must be the same.
 * Rule5:- The visibility of the child method must be same or less restricted.
 * Rule6:- Object can not be created from the absract class.
 */

 abstract class Shape{
   public $color;
   abstract public function getArea() : float;

   public function __construct( $color )
   {
     $this->color = $color;
   }

   public function getColor(){
     return $this->color;
   }
 }

 class Triangle extends Shape {

  public $height;
  public $base;

  public function __construct( $color , $height , $base ){
    parent::__construct( $color );
    $this->height = $height;
    $this->base   = $base;
  }

   public function getArea() : float
   {
      return $this->height * $this->base / 2;
   }
 }

 class Cricle extends Shape {
  public $radius;
  public function __construct( $color , $radius ){
    parent::__construct( $color );
    $this->radius = $radius;
  }

  public function getArea() : float{
    return $this->radius * $this->radius * 3.14;
  }
 }

 class Rectangle extends Shape {
  public $length;
  public $width;

  public function __construct( $color , $length, $width ){
    parent::__construct( $color );
    $this->length = $length;
    $this->width = $width;
  }

  public function getArea() : float{
    return $this->length * $this->width;
  }
 }

 $c = new Cricle( 'Red' , 12 , 15 );
 $t = new Triangle( 'Red' , 12 , 15 );
 
 echo $c->getArea();
 echo $t->getArea();



?>