<?php

/**
 * What is Interface :- Interfaces are allow you define the methods signature without body and force the class to implement the method. 
 * 
 * According to the PHp.net Introduction for Interface ->
 * 
 *  An INTERFACES is provided so you can a set of function and then hide the final implementation of these functions  in the implementing class . This allows you to change the IMPLEMENATION of these functions without changing how to use it.
 */


//  interface MyInterface {

//     public const MYCONST = '1';
//     public function method1();
//     public function method2();
//  }

//  abstract class MyClass implements MyInterface{
//    public const MYCONST = '2';
//     public function method2(){

//     }
//  }

//  class MyClass2 implements MyInterface{
//   public function method1()
//   {
    
//   }
//   public function method2(){
    
//   }
//  }

/**
 * Absract class can have normal method , like with body but interfaces does not have.
 * Absract classes can have methods with protected visiblity. but interfaces can not.
 * When you extends from absract class you can one only , but you can implement Multiple interface.
 * 
 */

//  $myClass = new MyClass2();

/**
 * Implementing multiple Interface in one class. 
 */

 interface MyOwnInterface{
   public function method1(): float;
   public function method2(): string;
   public function method3(): string;
 }

 interface MyInterface1{
   public function method1();
 }
 interface MyInterface3{
   public function method3();
 }
 interface MyInterface2 extends MyInterface1 , MyInterface3{
   public function method2();
 }


 class MyNewClass implements MyInterface2{
   public function method1()
   {
     return 2.3;
   }
   public function method2()
   {
     return 'Ambikesh';
   }
   public function method3()
   {
     return 'Gautam';
   }
 }  

 $MyNewClass = new MyNewClass();

 echo $MyNewClass->method1();
 echo $MyNewClass->method2();




?>